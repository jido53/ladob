<?php


namespace App\Form;



use App\Entity\Per;
use App\Entity\Tdo;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaSearchFormType extends AbstractType
{

    /*
     * Tipo Documento
     * Numero Documento
     * Apellido
     * Nombre
     * Nro COnsultante
     *
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
//            ->add('tdoId', EntityType::class,['required'   => false,'label'=>'Tipo de Documento', 'class' => Tdo::class,'choice_label' => 'tdo_descr'])
            ->add('perNrodoc', TextType::class,['required'   => false,'label'=>'Número de Documento'])
            ->add('pfiNom',TextType::class,['required'   => false,'label'=>'Nombre'])
            ->add('pfiApe',TextType::class,['required'   => false,'label'=>'Apellido'])
            ->add('expNCons',IntegerType::class,['required'   => false,'label'=>'Numero Consultante'])
            ->add('Buscar ', SubmitType::class)
        ;
    }

//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setDefaults([
//            'data_class' => Per::class
//        ]);
//    }

}