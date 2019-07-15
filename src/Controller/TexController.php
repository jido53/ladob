<?php


namespace App\Controller;



use App\Entity\TipoExpediente;

use App\Form\TexFormType;
use App\Repository\TipoExpedienteRepository;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TexController extends AbstractController
{

    /**
     * @Route ("/tex", name="tex_list")
     */
    public function list(TipoExpedienteRepository $repository)
    {

        /** @var TipoExpediente $tex */
        $tex = $repository->findAll();
        if (!$tex){

            throw $this->createNotFoundException('No se encontró lo que se buscaba');

        }

        return $this->render('tex/list.html.twig',[

            'texs'=>$tex,

        ]);
    }

    /**
     * @Route("tex/new", name="tex_new")

     */
    public function new(EntityManager $em, Request $request)
    {


        $form = $this->createForm(TexFormType::class);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Tex $article */
            $tex = $form->getData();


            $em->persist($tex);
            $em->flush();

            $this->addFlash('success', 'Tex Created! Knowledge is power!');

            return $this->redirectToRoute('tex_list');
        }
        return $this->render('tex/new.html.twig', [
        'texForm' => $form->createView()
        ]);



    }

    /**
     * @Route("tex/edit/{tex_id}", name="tex_edit")
     * @param $tex_id
     */
    public function edit($tex_id)
    {


    }



}