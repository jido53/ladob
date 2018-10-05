<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Organismo;
use App\Entity\Dep;
use App\Entity\DepUsr;


class OrganismoController extends AbstractController
{
      /**
     * Matches /organismo exactly
     *
     * @Route("/organismos", name="org_list")
     */
    public function list()
    {
        $organismos = $this->getDoctrine()->getRepository(Organismo::class)->findAll();

        return $this->render('organismo/list.html.twig', ['organismos' => $organismos]);
    }
          /**
     * Matches /organismo exactly
     *
     * @Route("/defensoriaspcyf")
     */
    public function listpcyf()
    {
        $organismos = $this->getDoctrine()->getRepository(Organismo::class)->findAll();

        return $this->render('organismo/list.html.twig', ['organismos' => $organismos]);
    }
      /**
      * @Route("/organismo/{org_id}", name="org_show")
      */
    public function show($org_id)
    {
             
        $organismo = $this->getDoctrine()
        ->getRepository(Organismo::class)
        ->find($org_id);
        $deps = $this->getDoctrine()
        ->getRepository(Dep::class)
        ->findDepbyOrg($org_id);
        $usrs = $this->getDoctrine()
        ->getRepository(DepUsr::class)
        ->findUserbyOrg($org_id);

    if (!$organismo) {
        throw $this->createNotFoundException(
            'No organismo found for id '.$id
        );
    }
    return $this->render('organismo/detail.html.twig', ['organismo' => $organismo, 'deps'=>$deps, 'usrs' => $usrs]);
    //return new Response('Check out this great organismo: '.$organismo->getOrgDescr());
      
    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}
?>