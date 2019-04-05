<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Licencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MProd\LicenciaCyPBundle\Form\LicenciaType;
use MProd\LicenciaCyPBundle\Entity\Persona;
use MProd\LicenciaCyPBundle\Entity\Comprobante;
use MProd\LicenciaCyPBundle\Entity\TipoLicencia;
use MProd\LicenciaCyPBundle\Service\LicenciaServiceImpl;
use MProd\LicenciaCyPBundle\Service\ILicenciaService;
use MProd\LicenciaCyPBundle\Exception\SimpleMessageException;

class LicenciaController extends Controller
{
    private $logger;
    private $licenciaService;
    
    public function addAction(Request $request) {
            $this->get('logger')->info("LicenciaController, addAction");
            
            $licencia = new Licencia();
            $form = $this
                ->container
                ->get('form.factory')
                ->create(new LicenciaType(), $licencia);

            $form->handleRequest($request);
            
            if ($form->isSubmitted() && $form->isValid() ) {                                    
                $this->get('logger')->info("LicenciaController, formulario enviado OK..");    
                
                /** @var LicenciaServiceImpl $licenciaService */
                $licenciaService = $this->get('licencia_service');
              
                try {
                    $licenciaService->generarLicencia($licencia);
                } catch (SimpleMessageException $sme) {                                                          
                    $exceptionNumber = $sme->getCode();
                    $exceptionMessage = $sme->getMessage();
                    $this->get('logger')->error("LicenciaController,ERROR ".$exceptionNumber. " message ".$exceptionMessage );

                    $this->addFlash('licenciaForm_message_error', 'La Licencia no pudo ser generada .'. $sme->getMessage());
                    return $this->render('MProdLicenciaCyPBundle:Licencia:add.html.twig', array('form' => $form->createView()));                    
                }

                try {
                    $licenciaService->save($licencia);
                    
                    $this->get('logger')->info("LicenciaController, formulario PROCESADO OK..".'La Licencia ' . $licencia . ' ha sido creada correctamente.');                                          
                    $this->addFlash('licenciaForm_message', 'La Licencia ' . $licencia . ' ha sido creada correctamente.');
                } catch (\Doctrine\DBAL\DBALException $e) {                                                          
                    $exceptionNumber = $e->getPrevious()->getCode();
                    $exceptionMessage = $e->getMessage();
                    $this->get('logger')->error("LicenciaController,ERROR ".$exceptionNumber. " message ".$exceptionMessage );
                    return $this->render('MProdLicenciaCyPBundle:Exception:errorDB.html.twig', array('errorCode' => $exceptionNumber, 'errorMessage' => $exceptionMessage));
                }

                $this->get('logger')->info("LicenciaController, Redirect path_home");
                return $this->redirect($this->generateUrl("path_home"));
            }

            $this->get('logger')->info("LicenciaController, devuelvo formulario a la vista");
            return $this->render('MProdLicenciaCyPBundle:Licencia:add.html.twig', array('form' => $form->createView()));
    }

   
    
}
