<?php
namespace MProd\LicenciaCyPBundle\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\Exception\Exception;
use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\IFileRendicionLiquidacionRepository;
use MProd\LicenciaCyPBundle\Repository\IRendicionRepository;
use MProd\LicenciaCyPBundle\Repository\ILiquidacionRepository;
use TangoMan\CSVReaderBundle\Service\CSVReaderService;
use MProd\LicenciaCyPBundle\Entity\FileRendicionLiquidacion;
use MProd\LicenciaCyPBundle\Entity\Rendicion;
use MProd\LicenciaCyPBundle\Entity\Liquidacion;

class FileCsvReaderServiceImpl implements IFileCsvReaderService{

    private $logger;
    private $fileRendicionLiquidacionRepository;
    private $rendicionRepository;
    private $liquidacionRepository;
    private $csvReaderService;

    public function __construct(LoggerInterface $logger, 
            IFileRendicionLiquidacionRepository $fileRendicionLiquidacionRepository,
            IRendicionRepository $rendicionRepository,
            ILiquidacionRepository $liquidacionRepository,
            CSVReaderService $csvReaderService) 
    {
        $this->logger = $logger;
        $this->rendicionRepository = $rendicionRepository;
        $this->liquidacionRepository = $liquidacionRepository;
        $this->csvReaderService = $csvReaderService;
    }


    public function readCsvFile($file, FileRendicionLiquidacion $fileRendicionLiquidacion){
        $objectToSave = null;
        $nombreOriginal = substr($fileRendicionLiquidacion->getNombreOriginalArchivo(),0,2);
        $procesoRendicion=false;
        $procesoLiquidacion=false;
        switch ($nombreOriginal) {
            case 'RE':
                $objectToSave = new Rendicion();
                $procesoRendicion=true;
                break;
            
            case 'LI':
                $objectToSave = new Liquidacion();
                $procesoLiquidacion=true;
                break;
            default:
                # code...
                break;
        }

        $this->logger->info("FileCsvReaderServiceImpl,Leyendo el Archivo ");
            // File check
            $count=0;
            if (is_file($file)) {
                // Init reader service
                $this->csvReaderService->init($file, 0, '|');
                
                // Read current line
                while (false !== ($line = $this->csvReaderService->readLine())) {
                    $count++;
                    if(!is_null($line)){                        
                        if(!is_null($objectToSave)){
                            $this->logger->info("FileCsvReaderServiceImpl,Leyendo el registro"); 
                            $this->loguearLinea($line);
                            
                            $objectToSave->bind($line);                                                                            
                        }
                    }
                }
           }
    }

    private function loguearLinea($line){
        $count = count($line);
        foreach ($line as $key => $value) {
            $this->logger->info("registro: ".$count." key:".$key." value: ".$value);
        }
    }
}

?>