<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;


class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),            
            //Bundle del paginador
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            //Bundle de temas de la stg
            new STG\DEIM\Themes\Bundles\AplicativoBundle\ThemeAplicativoBundle(),
            //Bundle de autorización de la STG no va a ser utilizado por el momento
            //new STG\DEIM\Security\Bundle\CasBundle\CasBundle(),          
            new MProd\LicenciaCyPBundle\MProdLicenciaCyPBundle(),

            new WhiteOctober\TCPDFBundle\WhiteOctoberTCPDFBundle(),      
            new SGK\BarcodeBundle\SGKBarcodeBundle(),
            
            //new Markup\BarcodeBundle\MarkupBarcodeBundle(),
            new FOS\UserBundle\FOSUserBundle(),

            // Petkopara
            new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(),
            new Petkopara\MultiSearchBundle\PetkoparaMultiSearchBundle(),
            new Petkopara\CrudGeneratorBundle\PetkoparaCrudGeneratorBundle(),

            // Upload
            //new Vich\UploaderBundle\VichUploaderBundle(),

            // Leer CSV
            new TangoMan\CSVReaderBundle\TangoManCSVReaderBundle(),
                        
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
    
    /*Configuración setLocale para usar el Assert\Type
    public function getCharset()
    {
        return 'ISO-8859-1';
    }
     * 
     */
}
