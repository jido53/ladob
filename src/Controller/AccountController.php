<?php

namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    /**
     * @Route("/account", name="account")
     */
    public function index(LoggerInterface $logger)
    {
       //dump($this->getUser());die;
        return $this->render('account/index.html.twig', [

        ]);
    }

    /**
     * @Route("/change_depusrcar/{dependencia}/{cargo}", name="change_depusrcar")
     */
    public function change_depusrcar($dependencia, $cargo)
    {
        $this->session->set('dependencia', $dependencia);
        $this->session->set('cargo', $cargo);


        //dump($this->getUser());die;
        return $this->render('account/index.html.twig', [

        ]);
    }
}
