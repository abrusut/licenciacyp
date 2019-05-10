<?php
namespace MProd\LicenciaCyPBundle\Service;


use MProd\LicenciaCyPBundle\Service\IFileUploaderService;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\Exception\Exception;
use Psr\Log\LoggerInterface;

class FileUploaderServiceImpl implements IFileUploaderService{

    private $logger;

    public function __construct(LoggerInterface $logger) 
    {
        $this->logger = $logger;
    }

    public function upload($uploadDir, $file, $filename) 
    {
        $this->logger->info("FileUploaderServiceImpl, Voy a subir el archivo a ".$uploadDir. " fileName ". $filename);
        try {            
            $file->move($uploadDir, $filename);
        } catch (FileException $e){            
            $this->logger->error("FileUploaderServiceImpl, Error Subiendo archivo a ".$uploadDir. " fileName ". $filename);
            $this->logger->error("FileUploaderServiceImpl, FileException: ".$e->getMessage());           
            throw new $e;        
        } catch (Exception $e){
            $this->logger->error("FileUploaderServiceImpl, Error Subiendo archivo a ".$uploadDir. " fileName ". $filename);
            $this->logger->error("FileUploaderServiceImpl, Exception: ".$e->getMessage());            
            throw new $e;
        }
        
    }


}




?>