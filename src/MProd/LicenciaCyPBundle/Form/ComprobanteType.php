<?php

namespace MProd\LicenciaCyPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ComprobanteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('monto')
            ->add('recargoSegundoVencimiento')
            ->add('recargoPrimerVencimiento')
            ->add('clienteSap')
            ->add('letraServicio')
            ->add('rendicionNumero')
            ->add('fechaPago')
            ->add('primerVencimiento')
            ->add('segundoVencimiento')
            ->add('numeroCodigoBarra')
            ->add('createdAt')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MProd\LicenciaCyPBundle\Entity\Comprobante'
        ));
    }
}
