<?php

namespace App\Security;

use App\Entity\DepUsrCar;
use App\Entity\DepUsrPfl;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;


class FormLoginAuthenticator extends AbstractFormLoginAuthenticator
{
    use TargetPathTrait;

    private $entityManager;
    private $urlGenerator;
    private $csrfTokenManager;
    private $usr_id;
    private $session;
    private $security;



    public function __construct(EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator, 
        CsrfTokenManagerInterface $csrfTokenManager, SessionInterface $session, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->urlGenerator = $urlGenerator;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->session = $session;
        $this->security = $security;


    }

    public function supports(Request $request)
    {

//        return $request->attributes->get('_route') === 'app_login'
//            && $request->isMethod('POST');

        

        return ($request->attributes->get('_route') === 'app_login' && $request->isMethod('POST'))
            || ($request->attributes->get('_route') === 'set_duc' && $request->isMethod('GET')) ;


    }

    public function getCredentials(Request $request)
    {
//        dump($request->attributes->get('d'));die;
        if ($request->attributes->get('_route') === 'app_login'){
        $credentials = [
            'usr_cod' => $request->request->get('usr_cod'),
            'password' => $request->request->get('password'),
            'csrf_token' => $request->request->get('_csrf_token'),
            'origen' => 'login'
        ];
        $request->getSession()->set(
            Security::LAST_USERNAME,
            $credentials['usr_cod']
        );
        };
        if ($request->attributes->get('_route') === 'set_duc'){
            $credentials = [
                'origen' => 'set_duc',
                'usr_id' => $this->session->get('usuario'),
                'dependencia'=>$request->attributes->get('d'),
                'cargo'=>$request->attributes->get('c'),
            ];
        };
        return $credentials;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if ($credentials['origen']==="login"){
        $token = new CsrfToken('authenticate', $credentials['csrf_token']);
        if (!$this->csrfTokenManager->isTokenValid($token)) {
            throw new InvalidCsrfTokenException();
        }

        $user = $this->entityManager->getRepository(User::class)->findOneBy(['usr_cod' => $credentials['usr_cod']]);
        if (!$user) {
            // fail authentication with a custom error
            throw new CustomUserMessageAuthenticationException('Usr_cod could not be found.');
        }




        };
        if ($credentials['origen']==="set_duc"){

            $user = $this->entityManager->getRepository(User::class)->findOneBy(['id' => $credentials['usr_id']]);

        };
        return $user;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        // Check the user's password or other credentials and return true or false
        // If there are no credentials to check, you can just return true
        //throw new \Exception('TODO: check the credentials inside '.__FILE__);

   //     dump($user);die;
         /*
         * Busco las dependencias y cargo del usuario, la que es default y la asigno a la session
         */

        $this->session->set('usuario', $user->getId());
        if ($credentials['origen']==="set_duc"){

            $duc =$this->entityManager->getRepository(DepUsrCar::class)->findOneBy(

                ['usuario' =>$this->session->get('usuario'),
                 'dependencia'=>$credentials['dependencia'],
                 'cargo'=>$credentials['cargo'],]);

            $this->session->getFlashBag()->add('success','Se cambió el perfil del usuario');

        };

        if ($credentials['origen']==="login"){

            $duc =$this->entityManager->getRepository(DepUsrCar::class)->findOneBy(['duc_default'=>1,'usuario' =>$this->session->get('usuario')]);

        };


        if (!empty($duc)) {

            $this->session->set('dependencia', $duc->getDependencia()->getDepId());
            $this->session->set('organismo', $duc->getDependencia()->getOrgId()->getOrgId());
            $this->session->set('cargo', $duc->getCargo()->getCarId());

            
            $dup = $this->entityManager->getRepository(DepUsrPfl::class)->findBy([
    
                'usuario'=>$this->session->get('usuario'),
                'dependencia'=> $this->session->get('dependencia'),
    
            ]);

            if (!empty($dup))
                {
                foreach ($dup as $perfil){
//                    dump($);die;
                    $roles[] = $perfil->getPerfil()->getPflDescr();

                }

                $user->setRoles($roles);
            }




        }

        return true;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {


        if ($targetPath = $this->getTargetPath($request->getSession(), $providerKey)) {
            return new RedirectResponse($targetPath);
        }
        
        return new RedirectResponse($this->urlGenerator->generate('app_default'));
        //throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }

    protected function getLoginUrl()
    {
        return $this->urlGenerator->generate('app_login');
    }
}
