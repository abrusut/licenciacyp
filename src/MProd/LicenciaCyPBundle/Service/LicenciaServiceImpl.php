<?php

namespace MProd\LicenciaCyPBundle\Service;

use Doctrine\ORM\EntityManager;
use MProd\LicenciaCyPBundle\Entity\Licencia;
use MProd\LicenciaCyPBundle\Entity\Comprobante;
use Psr\Log\LoggerInterface;


class LicenciaServiceImpl implements ILicenciaService {

    private $personaService;
    private $em;
    private $tipoLicenciaService;

    public function __construct(LoggerInterface $logger, EntityManager $entityManager,
                                IPersonaService $personaService, ITipoLicenciaService $tipoLicenciaService )
    {
        $this->personaService = $personaService;
        $this->em = $entityManager;
        $this->tipoLicenciaService = $tipoLicenciaService;
    }   

    public function generarLicencia(Licencia $licencia){
        // Actualizo la Persona (si existe previamente) con los datos enviados            
        $this->bindPersonaToLicencia($licencia);

        $idTipoLicencia = $licencia->getTipoLicencia()->getId();

        // Creo el Comprobante
        $licencia->setComprobante(
            $this->createComprobante($idTipoLicencia));
        
    }

    public function createComprobante($idTipoLicencia) {        
        $comprobante = new Comprobante();
        
        //Obtengo el tipo de licencia para sacar el Arancel
        $tipoLicencia = $this->tipoLicenciaService->findById($idTipoLicencia);

        $comprobante->setMonto($tipoLicencia->getArancel());
        return $comprobante;
    }

    public function bindPersonaToLicencia(Licencia $licencia) {        
        // Saco los datos de la persona que vino en el request
        $personaRequest = $licencia->getPersona();
        
        // Si la licencia tiene ID de Persona, lo levanto para que Doctrine no intente
        // hacer Insert, y haga update
        if(!is_null($personaRequest) &&
            is_object($personaRequest) &&
            !is_null($personaRequest->getId()))
        {           
            // Obtengo la Persona desde la Base 
            $persona = $this->personaService->findById($personaRequest->getId());

            // SI existe actualizo los datos con los datos que viajaron en el request
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

?>