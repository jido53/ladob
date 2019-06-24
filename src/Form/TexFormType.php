<?php


namespace App\Form;


use App\Entity\TipoExpediente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TexFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
           ->add('tex_descr',TextType::class,[

               'label'=>'Descripción'

           ])
           ->add('tex_cod',TextType::class,[

               'label'=>'Código'

           ])
       ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TipoExpediente::class
        ]);
    }

}