<?php

namespace Acme\DemoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddUser extends AbstractType
{
	/**
	 * Builds the AddUser form
	 * @param  \Symfony\Component\Form\FormBuilder $builder
	 * @param  array $options
	 * @return void
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		
		$builder
			->add('firstName')
			->add('lastName')
			->add('addressLine1')
			->add('addressLine2')
			->add('city')
			->add('postcode')
			->add('telephoneHome')
			->add('telephoneMobile')
		;
		
		/*
		$builder
			->add(
				'firstName'
				//,
				//'text',
				//array(
					//'error_bubbling' => true,
					//'label' => 'First name: ',
					//'placeholder' => 'George',
					//'required'=> false,
				//)
			);
		$builder->add('last_name', 'text');
		$builder->add('address_line_1', 'text');
		$builder->add('address_line_2', 'text');
		$builder->add('city', 'text');
		$builder->add('postcode', 'text');
		$builder->add('telephone_home', 'text');
		$builder->add('telephone_mobile', 'text');
		*/
	}
	
	/**
	 * Returns the default options/class for this form.
	 * @param array $options
	 * @return array The default options
	 */
	public function getDefaultOptions(array $options)
	{
		return array(
			'data_class' => 'Acme\DemoBundle\Entity\User'
		);
	}
	
	/**
	 * Mandatory in Symfony2
	 * Gets the unique name of this form.
	 * @return string
	 */
	public function getName()
	{
		return 'add_user';
	}
	
}
