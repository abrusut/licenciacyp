<?php

namespace MProd\LicenciaCyPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class PersonaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id','hidden')
            ->add('nombre')
            ->add('apellido')
            ->add('fechaNacimiento', 'date', array( 'label'=>'Fecha de Nacimiento',
                    'required' => FALSE,
                    // render as a single text box
                    'widget' => 'single_text',
                    'format' => 'dd/MM/yyyy',
                    // do not render as type="date", to avoid HTML5 date pickers
                    'html5' => false,
                    // add a class that can be selected in JavaScript
                    'attr' => ['class' => 'js-datepicker'],))
            ->add('tipoDocumento', 'entity', 
                    array(
                        'label' => 'Tipo Documento',
                        'class' => 'MProdLicenciaCyPBundle:TipoDocumento',                         
                        'required' => FALSE
                    ))            
            ->add('numeroDocumento', 'text', array('label' => 'Número de Documento', 'attr'=>array('placeholder'=>'99999999')))
            ->add('domicilioCalle')
            ->add('domicilioNumero')
            ->add('sexo', 'choice', array('choices' => array('m' => 'Masculino', 'f' => 'Femenino'), 'required' => FALSE))
            ->add('jubilado', 'choice', 
                     array('choices' => array(1 => 'Si', 0 => 'No'),
                           'required' => true,
                           'multiple' => false,
                           'expanded' => true                           
                           )                   
                     )
            ->add('telefono', 'text', array('label' => 'Teléfono', 'required' => FALSE, 'attr'=>array('placeholder'=>'3420000000')))
            ->add('email', EmailType::class)
            /*->add('localidad', 'entity', array(
                'label' => 'Localidad',
                'class' => 'MProdLicenciaCyPBundle:Localidad',                 
                'required' => TRUE            
                ))*/
            ->add('localidad')
            ->add('provincia')
            ->add('localidadOtraProvincia','text', array(
                'label' => 'Localidad Otra Provincia',
                'required' => FALSE
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MProd\LicenciaCyPBundle\Entity\Persona',
            'cascade_validation' => true,
            'error_bubbling' => true
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mprod_licenciacypbundle_persona';
    }
}
