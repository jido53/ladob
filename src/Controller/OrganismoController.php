<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Organismo;

class OrganismoController extends AbstractController
{
      /**
     * Matches /organismo exactly
     *
     * @Route("/organismo")
     */
    public function list()
    {
        $organismos = $this->getDoctrine()->getRepository(Organismo::class)->findAll();

        return $this->render('organismo/list.html.twig', ['organismos' => $organismos]);
    }
      /**
      * @Route("/organismo/{org_id}", name="org_show")
      */
    public function show($org_id)
    {
        $id= 198;      
        $organismo = $this->getDoctrine()
        ->getRepository(Organismo::class)
        ->find($org_id);

    if (!$organismo) {
        throw $this->createNotFoundException(
            'No organismo found for id '.$id
        );
    }
    
    return new Response('Check out this great organismo: '.$organismo->getOrgDescr());
      
    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}
?>