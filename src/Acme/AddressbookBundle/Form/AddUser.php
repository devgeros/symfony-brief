<?php

namespace Acme\AddressbookBundle\Form;

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
    }
    
    /**
     * Returns the default options/class for this form.
     * @param array $options
     * @return array The default options
     */
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Acme\AddressbookBundle\Entity\User'
        );
    }
    
    /**
     * Gets the unique name of this form.
     * @return string
     */
    public function getName()
    {
        return 'add_user';
    }
    
}
