<?php
// src/Controller/ExpController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use App\Entity\Exp;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class ExpController extends AbstractController
{
     /**
     * Matches /exp exactly
     *
     * @Route("/exp", name="exp_list")
     */
     public function generic_list()
     {
      $exps = $this->getDoctrine()->getRepository(Exp::class)->findList();

      return $this->render('exp/list.html.twig', ['exps' => $exps]);
    }

    /**
     * Matches /exp exactly
     *
     * @Route("/exp/{tex}/{dep}", name="exp_especific_list")
     */
    public function especific_list()
    {
        $exps = $this->getDoctrine()->getRepository(Exp::class)->findList();

        return $this->render('exp/list.html.twig', ['exps' => $exps]);
    }


      /**
      * @Route("/exp/{exp_id}", name="exp_show")
      */
      public function edit()
      {
            return null;
      }
    }
    ?>