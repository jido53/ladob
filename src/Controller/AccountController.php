<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends Controller
{
    /**
     * @Route("/account", name="account")
     */
    public function index(LoggerInterface $logger)
    {
        return $this->render('account/index.html.twig', [

        ]);
    }
}
