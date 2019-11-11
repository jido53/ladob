<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Correos;


class CorreosController extends AbstractController
{
    /**
     * Matches /correo exactly
     *
     * @Route("/correos", name="correos_list")
     */
    public function list()
    {
      $periodo = "-1 days";
      $correos = $this->getDoctrine()->getRepository(Correos::class)->findPeriodo2($periodo);

      return $this->render('correos/list.html.twig', ['correos' => $correos]);
    }

      /**
      * @Route("/correo/{correo_id}", name="correo_show")
      */
      public function show($correo_id)
      {

        $correo = $this->getDoctrine()
        ->getRepository(Correos::class)
        ->find($correo_id);
        
       
        if (!$correo) {
          throw $this->createNotFoundException(
            'No correo found for id '.$id
          );
        }
        return $this->render('correos/detail.html.twig', ['correo' => $correo]);
    //return new Response('Check out this great correo: '.$correo->getOrgDescr());

    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/_datos_basicos.html.twig', ['product' => $product]);
      }
    }
    ?>