<?php

namespace MProd\LicenciaCyPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use MProd\LicenciaCyPBundle\Form\PersonaType;
use MProd\LicenciaCyPBundle\Form\TipoLicenciaType;

class LicenciaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaEmitida','hidden', array(
                'constraints' => null
                ))
            ->add('tipoLicencia','entity', 
                array(
                    'label' => 'Tipo Licencia',
                    'class' => 'MProdLicenciaCyPBundle:TipoLicencia',                         
                    'required' => TRUE
                ))            
            ->add('persona',  new PersonaType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MProd\LicenciaCyPBundle\Entity\Licencia',
            'cascade_validation' => true            
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mprod_licenciacypbundle_licencia';
    }
}
