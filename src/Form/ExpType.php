<?php
// src/Form/Search.php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;





class ExpType extends AbstractType
{

	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		->add('exp_id', IntegerType::class, ['label' => 'Id'])
	    ->add('exp_carat', TextType::class, ['label'=>'Caratula'])
        ->add('buscar', SubmitType::class, ['label' => 'Buscar'])
		;
    	/*
		$form = $this->createFormBuilder($exp)
		->add('exp_carat', TextType::class, ['label' => 'Caratula'])
		->add('Buscar', SubmitType::class, ['label' => 'Buscar'])
		->getForm();

	    
	    foreach ($obj as $key => $value) {
	    echo "$key => $value\n";
		}	
		*/
	}
}
?>