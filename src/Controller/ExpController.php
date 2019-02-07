<?php
// src/Controller/ExpController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Exp;



class ExpController extends AbstractController
{
     /**
     * Matches /exp exactly
     *
     * @Route("/exp", name="exp_list")
     */
    public function list()
    {
        $exps = $this->getDoctrine()->getRepository(Exp::class)->findList();

        return $this->render('exp/list.html.twig', ['exps' => $exps]);
    }

    /**
     * Matches /expajax exactly
     *
     * @Route("/expajax", name="exp_list_ajax")
     */
    public function listAjax()
    {
        $exps = $this->getDoctrine()->getRepository(Exp::class)->findList();

        return $this->render('exp/list.ajax.html.twig', ['exps' => $exps]);
    }
    /**
     * Matches /listajax exactly
     *
     * @Route("/listajax", name="json_response")
     */
    public function JsonResponse()
    {
        $exps = $this->getDoctrine()->getRepository(Exp::class)->findList();

        return $this->render('exp/list.ajax.html.twig', ['exps' => $exps]);
    }

      /**
      * @Route("/exp/{exp_id}", name="exp_show")
      */
    public function show($exp_id)
    {
             
        $exp = $this->getDoctrine()
        ->getRepository(Exp::class)
        ->find($exp_id);
        $deps = $this->getDoctrine()
        ->getRepository(Dep::class)
        ->findDepbyOrg($exp_id);
        $usrs = $this->getDoctrine()
        ->getRepository(DepUsr::class)
        ->findUserbyOrg($exp_id);

    if (!$exp) {
        throw $this->createNotFoundException(
            'No exp found for id '.$id
        );
    }
    return $this->render('exp/detail.html.twig', ['exp' => $exp, 'deps'=>$deps, 'usrs' => $usrs]);
    //return new Response('Check out this great exp: '.$exp->getOrgDescr());
      
    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}
?>