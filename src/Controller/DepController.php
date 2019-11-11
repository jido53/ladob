<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Dep;
use App\Entity\DepUsr;


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
      * @Route("/dependencia/{dep_id}", name="dep_show")
      */
    public function show($dep_id)
    {
             
        $dependencia = $this->getDoctrine()
        ->getRepository(Dep::class)
        ->find($dep_id);
        
        $usuarios = $this->getDoctrine()
        ->getRepository(DepUsr::class)
        ->findUserbyDep($dep_id);
        
    if (!$dependencia) {
        throw $this->createNotFoundException(
            'No dependencia found for id '.$id
        );
    }
    return $this->render('dependencia/detail.html.twig', ['dep' => $dependencia, "usuarios"=>$usuarios]);
    //return new Response('Check out this great dependencia: '.$dependencia->getOrgDescr());
      
    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/_datos_basicos.html.twig', ['product' => $product]);
    }
}
?>