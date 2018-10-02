<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Dep;


class DepController extends AbstractController
{
    /**
     * Matches /dependencia exactly
     *
     * @Route("/dependencias", name="dep_list")
     */
    public function list()
    {
        $dependencias = $this->getDoctrine()->getRepository(Dep::class)->findAll();

        return $this->render('dependencia/list.html.twig', ['dependencias' => $dependencias]);
    }
          /**
     * Matches /dependencia exactly
     *
     * @Route("/defensoriasqqpcyf")
     */
    public function listpcyf()
    {
        $dependencias = $this->getDoctrine()->getRepository(Dep::class)->findAll();

        return $this->render('dependencia/list.html.twig', ['dependencias' => $dependencias]);
    }
      /**
      * @Route("/dependencia/{dep_id}", name="dep_show")
      */
    public function show($dep_id)
    {
             
        $dependencia = $this->getDoctrine()
        ->getRepository(Dep::class)
        ->find($dep_id);


    if (!$dependencia) {
        throw $this->createNotFoundException(
            'No dependencia found for id '.$id
        );
    }
    return $this->render('dependencia/detail.html.twig', ['dependencia' => $dependencia, 'deps'=>$dep]);
    //return new Response('Check out this great dependencia: '.$dependencia->getOrgDescr());
      
    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);
    }
}
?>