<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Usr;

class UsrController extends AbstractController
{
     /**
     * Matches /usr exactly
     *
     * @Route("/usr", name="usr_list")
     */
    public function list()
    {
        $usrs = $this->getDoctrine()->getRepository(Usr::class)->findAll();

        return $this->render('usr/list.html.twig', ['usrs' => $usrs]);
    }

      /**
      * @Route("/usr/{usr_id}", name="usr_show")
      */
    public function show($usr_id)
    {
             
        $usr = $this->getDoctrine()
        ->getRepository(Usr::class)
        ->find($usr_id);

    if (!$usr) {
        throw $this->createNotFoundException(
            'No usr found for id '.$id
        );
    }
    
    return new Response('Check out this great usr: '.$usr->getcr());
      
    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}
?>