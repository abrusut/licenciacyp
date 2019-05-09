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

/**
 * Rendicion controller.
 *
 * @Route("/upload")
 */
class UploadFileController extends Controller
{
    /**
     * Vich Uploader
     *
     * @Route("/filevich", name="vich_upload_file_rendicion_liquidacion")
     * @Method("GET")
     */
    public function vichRendicionLiquidacionUploadFileAction(Request $request)
    {
        $this->get('logger')->info("UploadFileController, vichRendicionLiquidacionUploadFileAction ");

        $fileRendicionLiquidacion = new FileRendicionLiquidacion();
        $form = $this
            ->container
            ->get('form.factory')
            ->create(new FileRendicionLiquidacionType(), $fileRendicionLiquidacion);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('logger')->info("UploadFileController, archivo enviado y validado OK..");
        }
               
        return $this->render('MProdLicenciaCyPBundle:Upload:vich.upload.file.html.twig',  array(
            'form' => $form->createView()
        ));
    }

    /**
     * Lists all Rendicion entities.
     *
     * @Route("/file", name="upload_file_rendicion_liquidacion")
     * @Method("GET")
     */
    public function rendicionLiquidacionUploadFileAction(Request $request)
    {
                
        return $this->render('MProdLicenciaCyPBundle:Upload:nostg.upload.file.html.twig', array(            
        ));
    }

    /**
     * Lists all Rendicion entities.
     *
     * @Route("/file/process", name="process_file_rendicion_liquidacion")
     * @Method("POST")
     */
    public function rendicionLiquidacionProcessFileAction(Request $request)        
    {
        $files = $request->files;

        $resultUpload = true;

         /** @var JsonServiceImp $jsonService */
         $jsonService = $this->get('json_service');          
         //$jsonService->setArrayIgnoredAttributes(array('licencias'));
 
         $resultJson = $jsonService->transformToJson($resultUpload);
                      
 
         $this->get('logger')->info("Result Upload: ".$resultJson);  
 
         return new Response($resultJson,Response::HTTP_OK, array('content-type'=> 'application/json'));       
    }
}