<?php

namespace App\Controller;


use App\Entity\Per;

use App\Form\PersonaSearchFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Common\Collections\Criteria;

class PersonaController extends Controller
{
    /**
     * @Route("/persona_index", name="persona")
     */
    public function index()
    {
        return $this->render('persona/index.html.twig', [
            'controller_name' => 'PersonaController',
        ]);
    }

    /**
     * @Route("/persona", name="persona_list")
     */
    public function persona_list( Request $request)
    {

        $form = $this->createForm(PersonaSearchFormType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           /*
            *
            * Tipo Documento
            * Numero Documento
            * Apellido
            * Nombre
            * Nro COnsultante
            *
            */
          //  dump($request);die;
            $criterio =[
                'pfi.pfi_nom'=>strtoupper($form['pfiNom']->getData()) ,
                'pfi.pfi_ape'=>strtoupper($form['pfiApe']->getData()),
                'pfiAdi.exp_n_cons'=>$form['expNCons']->getData(),
                'per_nrodoc'=>$form['perNrodoc']->getData(),
//                'per_nrodoc2'=>$request->request->get('persona_search_form')['perNrodoc'],

                ];
//            dump(array_filter($criterio));die;

            $criteria = Criteria::create();
                foreach (array_filter($criterio) as $clave => $valor){
                   if (is_string($valor)){$criteria->andWhere(Criteria::expr()->contains($clave, $valor));}
                   if (is_int($valor)){$criteria->andWhere(Criteria::expr()->eq($clave, $valor));}
//                   $criteria->andWhere(Criteria::expr()->eq($clave, $valor));

                };


            $criteria->setMaxResults(50);
//            $criteria->andWhere(Criteria::expr()->eq('isDeleted', false));
//                ->andWhere(Criteria::expr()->contains('isDeleted2', false));



//            $personas = $this->getDoctrine()->getRepository(Per::class)->findBy(['pfi.pfi_nom'=>'Ferri']);
            $personas = $this->getDoctrine()->getRepository(Per::class)->find_list_with_criteria($criteria);//  ->findBy(['pfi_nom'=>'Eugenio']);
//            dump($personas);die;

            return $this->render('persona/list.html.twig', [
                'personas' => $personas,
                'PersonaSearchForm' => $form->createView()
            ]);

        }


        $personas = $this->getDoctrine()->getRepository(Per::class)->find_list_limit(100);

        return $this->render('persona/list.html.twig', [
            'personas' => $personas,
            'PersonaSearchForm' => $form->createView()
            ]);



    }


    /**
     * @Route("/persona_basico/{per_id}", name="persona_basico")
     */
    public function persona_basico ($per_id)
    {
        $persona = $this->getDoctrine()->getRepository(Per::class)->findOneBy(['per_id'=>$per_id]);//   find_one_by_id($per_id);

        return $this->render('persona/show.html.twig', [
            'per' => $persona,
        ]);
    }

//
//    /**
//     * Replaces an array key and preserves the original
//     * order.
//     *
//     * @param $array The array in question.
//     * @param $oldKey The key that you want to replace.
//     * @param $newKey The name of the new key.
//     *
//     * @return array
//     */
//    function replaceArrayKey($array, $oldKey, $newKey){
//        //If the old key doesn't exist, we can't replace it...
//        if(!isset($array[$oldKey])){
//            return $array;
//        }
//        //Get a list of all keys in the array.
//        $arrayKeys = array_keys($array);
//        //Replace the key in our $arrayKeys array.
//        $oldKeyIndex = array_search($oldKey, $arrayKeys);
//        $arrayKeys[$oldKeyIndex] = $newKey;
//        //Combine them back into one array.
//        $newArray =  array_combine($arrayKeys, $array);
//        return $newArray;
//    }
}
