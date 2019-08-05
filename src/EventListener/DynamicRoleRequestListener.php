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
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

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

    public function onKernelController(FilterControllerEvent $event)
    {

//        dump($this->session->get('_is_dynamic_role_auth') === 'true');die;
        if ($this->session->has('_is_dynamic_role_auth') && $this->session->get('_is_dynamic_role_auth') === 'true') {
            //$roles = new Role("ROLE_NEW");
      //      dump('llego hasta aca'); die;
            $usuario_objeto = $this->security->getUser();
            if ($usuario_objeto) {
                $roles = $usuario_objeto->getRoles();
           
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
         $this->security->getUser()->setRoles($roles);
//            $this->security->getUser()->addRole($this->json->encode($roles,'json'));
//           dump($this->security->getUser());die;

        } }


        // ...
    }
}