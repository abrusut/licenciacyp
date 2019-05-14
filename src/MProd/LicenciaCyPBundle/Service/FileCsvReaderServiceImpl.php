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
use TangoMan\CSVReaderBundle\Service\CSVLine;
use Doctrine\ORM\EntityManagerInterface;

class FileCsvReaderServiceImpl implements IFileCsvReaderService
{

    private $logger;
    private $fileRendicionLiquidacionRepository;
    private $rendicionRepository;
    private $liquidacionRepository;
    private $csvReaderService;

    public function __construct(
        LoggerInterface $logger,
        IFileRendicionLiquidacionRepository $fileRendicionLiquidacionRepository,
        IRendicionRepository $rendicionRepository,
        ILiquidacionRepository $liquidacionRepository,
        CSVReaderService $csvReaderService        
    ) {
        $this->logger = $logger;
        $this->rendicionRepository = $rendicionRepository;
        $this->liquidacionRepository = $liquidacionRepository;
        $this->csvReaderService = $csvReaderService;
    }


    public function readCsvFile($file, FileRendicionLiquidacion $fileRendicionLiquidacion)
    {
        $objectToSave = null;
        $nombreOriginal = substr($fileRendicionLiquidacion->getNombreOriginalArchivo(), 0, 2);
        $procesoRendiciones=false;
        $procesoLiquidaciones=false;
        $arrayLineasPersist=array();
        switch ($nombreOriginal) {
            case 'RE':
                $objectToSave = new Rendicion();
                $procesoRendiciones=true;                
                break;

            case 'LI':
                $objectToSave = new Liquidacion();       
                $procesoLiquidaciones = true;
                break;
            default:
                # code...
                break;
        }

        $this->logger->info("FileCsvReaderServiceImpl,Leyendo el Archivo ");
        // File check
        $count = 0;
        if (is_file($file)) {

            $head = $this->createHeader($objectToSave);
            // Init reader service            
            $this->csvReaderService->init($file, $head, '|');

            $this->logger->info("FileCsvReaderServiceImpl,Leyendo el registros");
            try{
                while (false !== ($linea = $this->csvReaderService->readLine())) {
                    if (!is_null($linea)) {
                        $count++;                    
                        $this->loguearLinea($linea,$head);    
                        array_push($arrayLineasPersist,$linea);                                    
                    }
                }
            }catch(Exception $e){
                $this->logger->error("FileCsvReaderServiceImpl,Error Leyendo el registros ".$e->getMessage());
            }catch (\Exception $e) {
                $this->logger->error("FileCsvReaderServiceImpl,Error Leyendo el registros ".$e->getMessage());                
            }

            if($procesoLiquidaciones){                 
                foreach ($arrayLineasPersist as $key => $value) {                    
                    $objectToSave = new Liquidacion(); 
                    $objectToSave->bind($value, $head);
                    $objectToSave->setFileRendicionLiquidacion($fileRendicionLiquidacion);
                    $this->liquidacionRepository->persist($objectToSave);
                }  
                $this->liquidacionRepository->flush();     
            }

            if($procesoRendiciones){   
                foreach ($arrayLineasPersist as $key => $value) {                       
                    $objectToSave = new Rendicion();
                    $objectToSave->bind($value, $head);    
                    $objectToSave->setFileRendicionLiquidacion($fileRendicionLiquidacion);     
                    $this->rendicionRepository->persist($objectToSave);
                }
                $this->rendicionRepository->flush();
            }
            $this->logger->info("FileCsvReaderServiceImpl,Cantidad de Registros leidos " . $count);
        }
    }

    private function createHeader($objectToSave){
        $head = array();
        if($objectToSave instanceof Rendicion){
            $head = array('nis','fechaCobro','codigoBarraCliente','importeCobrado','');
        }

        if($objectToSave instanceof Liquidacion){
            $head = array('nis','fechaCobro','codigoBarraCliente','numeroRendicion','importeCobrado','comision','');
        }
        return $head;
    }

    private function loguearLinea(CSVLine $linea, $head)
    {
        $count = count($linea);
        foreach ($head as $key => $value) {
            $this->logger->info("registro: key:" . $value  . " value: " . $linea->get($value));
        }
    }
}
