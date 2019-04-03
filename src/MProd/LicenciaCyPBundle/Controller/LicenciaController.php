<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Licencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MProd\LicenciaCyPBundle\Form\LicenciaType;
use MProd\LicenciaCyPBundle\Entity\Persona;
use MProd\LicenciaCyPBundle\Entity\Comprobante;
use MProd\LicenciaCyPBundle\Entity\TipoLicencia;

class LicenciaController extends Controller
{
      public function addAction(Request $request) {
        $this->get('logger')->info("LicenciaController, addAction");
        $em = $this->container->get('doctrine')->getManager();
        $licencia = new Licencia();
        $form = $this
            ->container
            ->get('form.factory')
            ->create(new LicenciaType(), $licencia);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid() ) {                                    
            $this->get('logger')->info("LicenciaController, formulario enviado OK..");                                          
            $this->get('licencia_service')->generarLicencia($licencia);
            
            try {
                $em->persist($licencia);
                $em->flush();
                $this->get('logger')->info("LicenciaController, formulario PROCESADO OK..".'La Licencia ' . $licencia . ' ha sido creada correctamente.');                                          
                $this->addFlash('home_mensaje', 'La Licencia ' . $licencia . ' ha sido creada correctamente.');
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
