<?php
namespace gesBarBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
		//->setAction($this->generateUrl('ges_mesa_create'))
		->setMethod('POST')
		->add('name', TextType::class)
		// If you use PHP 5.3 or 5.4 you must use
		// ->add('task', 'Symfony\Component\Form\Extension\Core\Type\TextType')
		;
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
		'data_class' => 'gesBarBundle\Entity\Category',
		));
	}
}