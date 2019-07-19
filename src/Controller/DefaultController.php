<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Ldap;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_default")
     */
    public function index()
    {
//        return $this->redirectToRoute('app_login');
        return $this->render('default/index.html.twig');
    }


}