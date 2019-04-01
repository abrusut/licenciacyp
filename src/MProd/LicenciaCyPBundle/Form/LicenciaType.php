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
            ->add('tipoLicencia','entity', 
                array(
                    'label' => 'Tipo Licencia',
                    'class' => 'MProdLicenciaCyPBundle:TipoLicencia',                         
                    'required' => TRUE
                ))            
                ->add('fechaEmitida','date', array(                        
                    'constraints' => null,
                    'data' => (isset($options['data']) && 
                                    $options['data']->getFechaEmitida() !== null) ? $options['data']->getFechaEmitida() : new \DateTime(),
                     // render as a single text box
                     'widget' => 'single_text',
                     'format' => 'dd/MM/yyyy',
                     // do not render as type="date", to avoid HTML5 date pickers
                     'html5' => false,
                     // add a class that can be selected in JavaScript
                     'attr' => ['class' => 'js-datepicker disabledPanel']
                    )
                )
                ->add('fechaDesde','date', array(                        
                    'constraints' => null,
                    'required' => TRUE,
                    'data' => (isset($options['data']) && 
                                    $options['data']->getFechaDesde() !== null) ? $options['data']->getFechaDesde() : new \DateTime(),
                     // render as a single text box
                     'widget' => 'single_text',
                     'format' => 'dd/MM/yyyy',
                     // do not render as type="date", to avoid HTML5 date pickers
                     'html5' => false,
                     // add a class that can be selected in JavaScript
                     'attr' => ['class' => 'js-datepicker']
                    )
                )
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
