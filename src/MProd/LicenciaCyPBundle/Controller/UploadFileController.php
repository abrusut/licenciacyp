<?php

namespace MProd\LicenciaCyPBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use MProd\LicenciaCyPBundle\Entity\Rendicion;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use MProd\LicenciaCyPBundle\Entity\FileRendicionLiquidacion;
use MProd\LicenciaCyPBundle\Form\FileRendicionLiquidacionType;
use MProd\LicenciaCyPBundle\Service\JsonServiceImpl;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\FileBag;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Config\Definition\Exception\Exception;
use MProd\LicenciaCyPBundle\Exception\SimpleMessageException;
use MProd\LicenciaCyPBundle\Service\FileUploaderServiceImpl;
use MProd\LicenciaCyPBundle\Service\FileCsvReaderServiceImpl;

/**
 * Rendicion controller.
 *
 * @Route("/upload")
 */
class UploadFileController extends Controller
{   

    /**     
     * Muestra el form para upload de archivos
     * @Route("/file", name="index_file_upload")
     * @Method("GET")
     */
    public function indexUploadFileAction(Request $request)
    {                
        return $this->render('MProdLicenciaCyPBundle:Upload:nostg.upload.file.html.twig', array());
        //return $this->render('MProdLicenciaCyPBundle:Upload:stg.upload.file.html.twig', array());
    }

    /**
     * Procesa el Upload de Rendiciones y Liquidaciones
     *
     * @Route("/file/process", name="process_file_upload")
     * @Method("POST")
     */
    public function rendicionLiquidacionProcessFileAction(Request $request)        
    {
        $this->get('logger')->info("UploadFileController, rendicionLiquidacionProcessFileAction ");

        if (!$request->isXmlHttpRequest()) {
            $this->get('logger')->info("UploadFileController, rendicionLiquidacionProcessFileAction, llamada no ajax ");
            return new JsonResponse(array('message' => 'No es posible enviar el formulario'), 400);
        }

        $this->get('logger')->info("UploadFileController, rendicionLiquidacionProcessFileAction, leo el archivo");
         
         /** @var UploadedFile  $fileUploadedFile */
        $fileUploadedFile = $this
                                ->getUploadedFile($request);
        
        $fileName = $this
                    ->generateUniqueFileName($fileUploadedFile->getClientOriginalName()).
                        "." .
                        $fileUploadedFile->getClientOriginalExtension();

        $this->get('logger')->info("UploadFileController, rendicionLiquidacionProcessFileAction, fileName ".$fileName);      
         
        $pathForUpload = $this->getParameter('app.path.upload.file.rendicion.liquidacion');

        /** @var FileUploaderServiceImpl $fileUploadService */
        $fileUploadService = $this->get('file_upload_service');     
        try {
            $em = $this->getDoctrine()->getManager();

            $fileRendicionLiquidacion = $this->
                                        createFileRendicionLiquidacion($fileUploadedFile, $fileName,$pathForUpload );

            $achivoEnDisco = $fileUploadService
                                        ->upload( $pathForUpload,
                                            $fileUploadedFile,
                                            $fileName);            

            /** @var FileCsvReaderServiceImpl $fileCsvReaderServiceImpl */
            $fileCsvReaderServiceImpl = $this->get('file_csv_reader');
            $fileCsvReaderServiceImpl->readCsvFile($achivoEnDisco, $fileRendicionLiquidacion);

            $fileRendicionLiquidacion->setProcesado(true);
            $em->flush();
        } catch (FileException $e) {
            return new JsonResponse(array('message' => $e->getMessage()), 400);
        }catch (Exception $ex) {
            return new JsonResponse(array('message' => $ex->getMessage()), 400);
        }
        
        $this->get('logger')->info("UploadFileController, Devuelvo Success 200 : ".$fileRendicionLiquidacion);
        return new JsonResponse(array('message' => 'Success!'), 200);        
               
    }

    /**
     * @return string
     */
    private function generateUniqueFileName($stringName)
    {        
        return sha1(md5(sha1(time().$stringName).time()));
    }    

    private function createFileRendicionLiquidacion($fileUploadedFile,$fileName,$pathForUpload){
        $this->get('logger')->info("UploadFileController, createFileRendicionLiquidacion ".$fileUploadedFile." fileName ".$fileName);
        $fileRendicionLiquidacion = new FileRendicionLiquidacion();
        $fileRendicionLiquidacion->bindValueFromFile($fileUploadedFile,$fileName,$pathForUpload );        
        $this->get('logger')->info("UploadFileController, FileRendicionLiquidacion Creado ".$fileRendicionLiquidacion);
        
        $validator = $this->get('validator');
        $errors = $validator->validate($fileRendicionLiquidacion);

        if (count($errors) > 0) {            
            $errorsString = (string) $errors;
            $this->get('logger')->info("UploadFileController, No supera validaciones: ".$errorsString);
            throw new SimpleMessageException("No supera validaciones ".$errorsString);            
        }

        $this->get('logger')->info("UploadFileController, Persisto el registro : ".$fileRendicionLiquidacion);
        $em = $this->getDoctrine()->getManager();
        $em->persist($fileRendicionLiquidacion);        

        return $fileRendicionLiquidacion;
    }

    private function getUploadedFile(Request $request){
         /** @var FileBag  $file */        
         $file = $request->files;  
         if(is_null($file)){
             $this->get('logger')->info("UploadFileController, file is null ");    
             return new JsonResponse(array('message' => 'No adjunta archivo'), 400);
         }
         
         /** @var UploadedFile  $fileUploadedFile */
         $fileUploadedFile = null;
         if(!is_null($file->all()) && is_array($file->all()) ){
             foreach ($file->all() as $key => $value) {
                 if($value instanceof UploadedFile){
                     $fileUploadedFile = $value;  
                     break;  
                 }
             }
             
         }

         return $fileUploadedFile;
    }
}