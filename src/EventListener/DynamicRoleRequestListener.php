<?php


namespace App\EventListener;


use App\Entity\DepUsrPfl;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\Security\Core\Role\Role;
use Symfony\Component\Security\Core\Role\RoleHierarchy;
use Symfony\Component\Security\Core\Role\SwitchUserRole;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\Encoder\EncoderInterface;
use Symfony\Component\Serializer\Encoder\JsonEncode;

class DynamicRoleRequestListener
{
    private $session;
    private $security;
    /**
     * @var DepUsrPfl
     */
    private $dup;
    /**
     * @var JsonEncode
     */
    private $json;


    public function __construct(Session $session, Security $security,EntityManagerInterface $dup, EncoderInterface $json)
    {
        $this->session = $session;
        $this->security = $security;
        $this->dup = $dup;
        $this->json = $json;
    }

    public function onKernelRequest(GetResponseEvent $event)
    {
        if (HttpKernel::MASTER_REQUEST != $event->getRequestType()) {
            // don't do anything if it's not the master request
            return;
        }
//        dump($this->session->get('_is_dynamic_role_auth') === 'true');die;
        if ($this->session->has('_is_dynamic_role_auth') && $this->session->get('_is_dynamic_role_auth') === 'true') {
            //$roles = new Role("ROLE_NEW");
            $roles = $this->security->getUser()->getRoles();
            $dup = $this->dup->getRepository(DepUsrPfl::class)->findBy([

                'usuario'=>$this->session->get('usuario'),
                'dependencia'=> $this->session->get('dependencia'),

            ]);

            if (!empty($dup)) {
//                $perfiles = $dup->toArray();
                foreach ($dup as $perfil){
                    $roles[] = $perfil->getPerfil()->getPflDescr();

                }
            }
//            dump($this->json->encode($roles,'json'));die;
            $this->security->getUser()->setRoles(new Role(json_encode($roles)));
//            $this->security->getUser()->addRole($this->json->encode($roles,'json'));
            dump($this->security->getUser());die;
        }


        // ...
    }
}