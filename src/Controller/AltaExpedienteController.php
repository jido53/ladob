<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\AltaExpediente;
use Symfony\Component\DomCrawler\Crawler;


class AltaExpedienteController extends AbstractController
{
    /**
     * Matches /request exactly
     *
     * @Route("/request", name="request_list")
     */
    public function list()
    {

      //$requests = $this->getDoctrine()->getRepository(AltaExpediente::class)->findAll();
      $requests = $this->getDoctrine()->getRepository(AltaExpediente::class)->bringRequest();
      
      foreach ($requests as $request) {
        //$denuncia = $request->getOneRequest();

        $denuncia = $request;
        var_dump( $denuncia);
        $crawler = new Crawler($denuncia);
        //$crawler->registerNamespace('m', 'http://iurix.entidad.unitech.com');
        $crawler->registerNamespace('ns2', 'http://iurix.entidad.unitech.com');
        //var_dump($crawler);
         
        $crawler = $crawler->filterXPath('//identificador');
        $id = $request->getExpId();
        $listado[$id] = $crawler;
        
      exit;        
      }

      return $this->render('altaexpediente/list.html.twig', ['requests' => $requests, 'crawler' => $crawler, 'listado' => $listado]);
    }

      /**
      * @Route("/request/{request_id}", name="request_show")
      */
      public function show($request_id)
      {

        $request = $this->getDoctrine()
        ->getRepository(AltaExpediente::class)
        ->find($request_id);
        
        $crawler = new Crawler($request.getRequest());

        foreach ($crawler as $domElement) {
          var_dump($domElement->nodeName);
        }
       
        if (!$request) {
          throw $this->createNotFoundException(
            'No request found for id '.$id
          );
        }
        return $this->render('altaexpediente/detail.html.twig', ['request' => $request, 'crawler' => $crawler]);
    //return new Response('Check out this great request: '.$request->getOrgDescr());

    // or render a template
    // in the template, print things with {{ product.name }}
    // return $this->render('product/show.html.twig', ['product' => $product]);
      }
    }
    ?>