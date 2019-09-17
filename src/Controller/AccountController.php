<?php

namespace App\Controller;


use App\Entity\DepUsrCar;
use App\Entity\DepUsrPfl;

use App\Form\DepUsrCarFormType;
use App\Repository\DepUsrPflRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Guard\Token\PostAuthenticationGuardToken;


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
    public function setDuc($d,$c,Request $request)
    {




        return $this->redirectToRoute('account');
    }




}
