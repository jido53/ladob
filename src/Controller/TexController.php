<?php


namespace App\Controller;



use App\Entity\TipoExpediente;

use App\Repository\TipoExpedienteRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
     * @Route("tex/edit/{tex_id}", name="tex_edit")
     * @param $tex_id
     */
    public function edit($tex_id)
    {

        //todo
    }

}