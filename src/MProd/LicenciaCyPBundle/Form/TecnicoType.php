<?php

namespace MProd\LicenciaCyPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TecnicoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('especialidad')
            ->add('nombre')
            ->add('apellido')
            ->add('dni')
            ->add('email')
            ->add('telefono')
            ->add('role')
            ->add('password')
            ->add('isActive')
            ->add('salt')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MProd\LicenciaCyPBundle\Entity\Tecnico',
            'csrf_protection' => TRUE,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mprod_licenciacypbundle_tecnico';
    }
}
