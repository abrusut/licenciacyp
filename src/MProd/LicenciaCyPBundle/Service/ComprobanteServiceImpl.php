<?php
namespace MProd\LicenciaCyPBundle\Service;

use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Entity\TipoLicencia;
use MProd\LicenciaCyPBundle\Repository\IComprobanteRepository;
use MProd\LicenciaCyPBundle\Entity\Comprobante;


class ComprobanteServiceImpl implements IComprobanteService{

    private $comprobanteRepository;
    private $logger;
    private $tipoLicenciaService;

    public function __construct(LoggerInterface $logger, IComprobanteRepository $comprobanteRepository,
                ITipoLicenciaService $tipoLicenciaService)
    {
        $this->comprobanteRepository = $comprobanteRepository;
        $this->logger = $logger;
        $this->tipoLicenciaService = $tipoLicenciaService;
    }

    public function generarComprobante(TipoLicencia $tipoLicencia){
        $comprobante = new Comprobante();       
        $comprobante->setMonto($tipoLicencia->getArancel());
        $comprobante->setClienteSap($tipoLicencia->getClienteSap());        
        $comprobante->setLetraServicio($tipoLicencia->getLetraServicio());                        
        $comprobante->setNumeroCodigoBarra(null);

        //Primer Vencimiento
        if(!is_null($tipoLicencia->getDiasPrimerVencimiento()) && $tipoLicencia->getDiasPrimerVencimiento()>0)
        {
            $fechaPrimerVencimiento = new \DateTime();
            $fechaPrimerVencimiento->add(new \DateInterval('P'.$tipoLicencia->getDiasPrimerVencimiento().'D'));
            $comprobante->setPrimerVencimiento($fechaPrimerVencimiento);
            $recargoPrimerVencimiento = round(($tipoLicencia->getArancel() * $tipoLicencia->getPorcentajeRecargoPrimerVencimiento())/100,2);
            $comprobante->setRecargoPrimerVencimiento($recargoPrimerVencimiento);
        }

        //Segundo Vencimiento
        if(!is_null($tipoLicencia->getDiasSegundoVencimiento()) && $tipoLicencia->getDiasSegundoVencimiento()>0)
        {
            if( !is_null($comprobante->getPrimerVencimiento())){
                $fechaSegundoVencimiento = (clone $comprobante->getPrimerVencimiento());
            }else{
                $fechaSegundoVencimiento = new \DateTime();
            }
            
            $fechaSegundoVencimiento->add(new \DateInterval('P'.$tipoLicencia->getDiasSegundoVencimiento().'D'));
            $comprobante->setSegundoVencimiento($fechaSegundoVencimiento);
            
            /**  No existe lugar para un segundo recargo
             *$recargoSegundoVencimiento = round(($tipoLicencia->getArancel() * $tipoLicencia->getPorcentajeRecargoSegundoVencimiento())/100,2);
             *  $comprobante->setRecargoSegundoVencimiento($recargoSegundoVencimiento);
            */
        }
        

        return $comprobante;
    }

     /**
     * @param MProd\LicenciaCyPBundle\Entity\Comprobante     
     * @return void
     */  
    public function save(Comprobante $comprobante){
        return $this->comprobanteRepository->save($comprobante);
    }

    public function findById($id){
        $this->logger->info("Buscando comprobante por id ".$id);
        return $this->comprobanteRepository->findById($id);       
    }
}



?>