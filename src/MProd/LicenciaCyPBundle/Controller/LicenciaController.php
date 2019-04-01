<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Licencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MProd\LicenciaCyPBundle\Form\LicenciaType;
use MProd\LicenciaCyPBundle\Entity\Persona;

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
                    	  	                                  
            // $personaRequest = $request->request->get('mprod_licenciacypbundle_licencia')['persona'];
           
            // Actualizo la Persona con los datos enviados            
            $this->bindPersonaToLicencia($licencia);
            
            try {
                $em->persist($licencia);
                $em->flush();
                $this->addFlash('home_mensaje', 'La Licencia ' . $licencia . ' ha sido creado correctamente.');
            } catch (\Doctrine\DBAL\DBALException $e) {
                $exception_number = $e->getPrevious()->getCode();
                $exception_message = $e->getMessage();

                return $this->render('MProdLicenciaCyPBundle:Exception:errorDB.html.twig', array('errorCode' => $exception_number, 'errorMessage' => $exception_message));
            }
            return $this->redirect($this->generateUrl("path_home"));
        }

        return $this->render('MProdLicenciaCyPBundle:Licencia:add.html.twig', array('form' => $form->createView()));
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
                ->find($licencia->getPersona()->getId());

            if(!is_null($persona)){
                //$persona->setTipoDocumento($personaRequest->getTipoDocumento());
                //$persona->setNumeroDocumento($personaRequest->getNumeroDocumento());
                //$persona->setSexo($personaRequest->getSexo());
                $persona->setApellido($personaRequest->getApellido());
                $persona->setCalle($personaRequest->getCalle());
                $persona->setEmail($personaRequest->getEmail());
                $persona->setFechaNacimiento($personaRequest->getFechaNacimiento());
                $persona->setJubilado($personaRequest->getJubilado());
                $persona->setLocalidad($personaRequest->getLocalidad());
                $persona->setLocalidadOtraProvincia($personaRequest->getLocalidadOtraProvincia());
                $persona->setNombre($personaRequest->getNombre());
                $persona->setNumero($personaRequest->getNumero());                
                $persona->setProvincia($personaRequest->getProvincia());                
                $persona->setTelefono($personaRequest->getTelefono());                                
                $licencia->setPersona($persona);
            }
            
        }

    }
}
