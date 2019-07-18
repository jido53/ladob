<?php

namespace App\Form;


use App\Entity\DepUsrCar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DepUsrCarFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usuario')
            ->add('duc_fecdesde', TextType::class)
            ->add('dependencia')
            ->add('cargo')
//            ->add('dependencia',EntityType::class,[
//                'placeholder' => 'Dependencias',
//                'label'=>'Dependencia'
//
//            ])
//            ->add('cargo',EntityType::class,[
//
//                'label'=>'Cargo'
//
//            ])
            ->add('Cambiar Perfil ', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => DepUsrCar::class
        ]);
    }

}