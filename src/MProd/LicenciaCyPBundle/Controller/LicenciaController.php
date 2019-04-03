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
        $em = $this->container->get('doctrine')->getManager();
        $licencia = new Licencia();
        $form = $this
            ->container
            ->get('form.factory')
            ->create(new LicenciaType(), $licencia);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid() ) {                                    
                    	  	                                                         
            // Actualizo la Persona con los datos enviados            
            $this->bindPersonaToLicencia($licencia);
            $licencia->setComprobante(
                $this->createComprobante($licencia->getTipoLicencia()->getId()));

            
            try {
                $em->persist($licencia);
                $em->flush();
                $this->addFlash('home_mensaje', 'La Licencia ' . $licencia . ' ha sido creada correctamente.');
            } catch (\Doctrine\DBAL\DBALException $e) {
                $exception_number = $e->getPrevious()->getCode();
                $exception_message = $e->getMessage();

                return $this->render('MProdLicenciaCyPBundle:Exception:errorDB.html.twig', array('errorCode' => $exception_number, 'errorMessage' => $exception_message));
            }
            return $this->redirect($this->generateUrl("path_home"));
        }

        return $this->render('MProdLicenciaCyPBundle:Licencia:add.html.twig', array('form' => $form->createView()));
    }

    private function getTipoLicenciaById($idTipoLicencia){
        $em = $this->container->get('doctrine')->getManager();
        $tipoLicencia =  $em
                ->getRepository('MProdLicenciaCyPBundle:TipoLicencia')
                ->find($idTipoLicencia);
        return $tipoLicencia;
    }

    private function createComprobante($idTipoLicencia) {        
        $comprobante = new Comprobante();
        $comprobante->setMonto($this->getTipoLicenciaById($idTipoLicencia)->getArancel());
        return $comprobante;
    }
    private function bindPersonaToLicencia(Licencia $licencia) {
        $em = $this->container->get('doctrine')->getManager();

        $personaRequest = $licencia->getPersona();
        // Si la licencia tiene ID de Persona, lo levanto para que Doctrine no intente
        // hacer Insert, y haga update
        if(!is_null($personaRequest) &&
            is_object($personaRequest) &&
            !is_null($personaRequest->getId()))
        {
            $persona =  $em
                ->getRepository('MProdLicenciaCyPBundle:Persona')
                ->find($personaRequest->getId());

            if(!is_null($persona)){
                //$persona->setTipoDocumento($personaRequest->getTipoDocumento());
                //$persona->setNumeroDocumento($personaRequest->getNumeroDocumento());
                //$persona->setSexo($personaRequest->getSexo());
                $persona->setApellido($personaRequest->getApellido());
                $persona->setDomicilioCalle($personaRequest->getDomicilioCalle());
                $persona->setEmail($personaRequest->getEmail());
                $persona->setFechaNacimiento($personaRequest->getFechaNacimiento());
                $persona->setJubilado($personaRequest->getJubilado());
                $persona->setLocalidad($personaRequest->getLocalidad());
                $persona->setLocalidadOtraProvincia($personaRequest->getLocalidadOtraProvincia());
                $persona->setNombre($personaRequest->getNombre());
                $persona->setDomicilioNumero($personaRequest->getDomicilioNumero());                
                $persona->setProvincia($personaRequest->getProvincia());                
                $persona->setTelefono($personaRequest->getTelefono());                                
                $licencia->setPersona($persona);
            }
            
        }

    }
}
