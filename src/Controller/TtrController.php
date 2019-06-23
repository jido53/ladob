<?php

namespace App\Controller;

use App\Entity\Ttr;
use App\Repository\TtrRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TtrController extends Controller
{
    /**
     * @Route("/ttr", name="ttr_list")
     */
    public function list(TtrRepository $repository)
    {
        /** @var Ttr $ttr */

        $ttr = $repository->findAll();

        return $this->render('ttr/list.html.twig', [
            'ttrs' => $ttr,
        ]);
    }
    /**
     * @Route("/ttr/{ttr_id}", name="ttr_edit")
     */
    public function edit(TtrRepository $repository,$ttr_id)
    {
        /** @var Ttr $ttr */

        $ttr = $repository->findOneBy(['ttr_id' => $ttr_id]);

        return $this->render('ttr/show.html.twig', [
            'ttr' => $ttr,
        ]);
    }
}
