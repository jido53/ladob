<?php

namespace App\Controller;


use App\Entity\DepUsrCar;
use App\Entity\DepUsrPfl;

use App\Form\DepUsrCarFormType;
use App\Repository\DepUsrPflRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;



class AccountController extends BaseController
{

    private $session;
    private $em;


    public function __construct(SessionInterface $session, EntityManagerInterface $em)
    {
        $this->session = $session;
        $this->em = $em;

    }

    /**
     * @Route("/account", name="account")
     */
    public function index()
    {


        $duc = $this->em->getRepository(DepUsrCar::class)->findOneBy([

            'usuario'=>$this->getUser()->getId(),
            'dependencia'=> $this->session->get('dependencia'),
            'cargo'=> $this->session->get('cargo'),
        ]);


        $form = $this->createForm(DepUsrCarFormType::class,$duc);


        return $this->render('account/index.html.twig', [
            'ducForm' => $form->createView()
        ]);
    }

    /**
     * @IsGranted("ROLE_USER")
     * @Route("/set_duc/{d}/{c}", name="set_duc")
     * //seteo la Dependencia, el cargo y el perfil. El perfil lo cargo en el los roles del usuario.
     */
    public function setDuc($d,$c)
    {
        $this->session->set('dependencia', $d);
        $this->session->set('cargo', $c);

        $dup = $this->entityManager->getRepository(DepUsrPfl::class)->findBy([

            'usuario'=>$this->session->get('usuario'),
            'dependencia'=> $this->session->get('dependencia'),

        ]);

        if (!empty($dup)) {
            foreach ($dup as $perfil){
                $roles[] = $perfil->getPerfil()->getPflDescr();

            }

            $user->setRoles($roles);
        }



        $this->addFlash('success', 'Se ha cambiado el perfil.');

        return $this->redirectToRoute('account');
    }




}
