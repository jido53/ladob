<?php

namespace App\Controller;


use App\Entity\DepUsrCar;
use App\Entity\DepUsrPfl;
use App\Form\DepUsrCarFormType;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
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
     * @Route("/set_duc/{d}/{c}", name="set_duc")
     */
    public function setDuc($d,$c)
    {
        $this->session->set('dependencia', $d);
        $this->session->set('cargo', $c);

        $dup = $this->em->getRepository(DepUsrPfl::class)->findOneBy([

            'usuario'=>$this->getUser()->getId(),
            'dependencia'=> $this->session->get('dependencia'),

        ]);

        $this->session->set('perfil', $dup->getPerfil()->getPflDescr());

        $this->addFlash('success', 'Se ha cambiado el perfil.');

        return $this->redirectToRoute('account');
    }


}
