<?php

namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Entity\Licencia;
use MProd\LicenciaCyPBundle\Entity\Comprobante;
use Psr\Log\LoggerInterface;
use MProd\LicenciaCyPBundle\Repository\ILicenciaRepository;
use MProd\LicenciaCyPBundle\Exception\SimpleMessageException;
use MProd\LicenciaCyPBundle\Entity\Persona;
use MProd\LicenciaCyPBundle\Entity\TipoLicencia;
class LicenciaServiceImpl implements ILicenciaService {

    private $logger;
    private $personaService;
    private $tipoLicenciaService;
    private $licenciaRepository;
    private $comprobanteService;
    private $boletaService;

    public function __construct(LoggerInterface $logger,
                                IPersonaService $personaService, 
                                ITipoLicenciaService $tipoLicenciaService,
                                ILicenciaRepository $licenciaRepository,
                                IComprobanteService $comprobanteService,
                                IBoletaService $boletaService )
    {
        $this->logger = $logger;
        $this->personaService = $personaService;    
        $this->licenciaRepository = $licenciaRepository;    
        $this->tipoLicenciaService = $tipoLicenciaService;       
        $this->comprobanteService = $comprobanteService;
        $this->boletaService = $boletaService;
    }   

    /**
     * @param MProd\LicenciaCyPBundle\Entity\Licencia     
     * @return void
     */  
    public function save(Licencia $licencia){
        return $this->licenciaRepository->save($licencia);
    }

    public function findById($id){
        $this->logger->info("Buscando Licencia por id ".$id);
        return $this->licenciaRepository->findById($id);       
    }
    public function findByComprobanteId($idComprobante){
        $this->logger->info("Buscando Licencia por id Comprobante ".$idComprobante);
        return $this->licenciaRepository->findByComprobanteId($idComprobante);       
    }

    public function generarLicencia(Licencia $licencia){
        $this->validate($licencia);            

        // Actualizo la Persona (si existe previamente) con los datos enviados            
        $this->bindPersonaToLicencia($licencia);        
        
        // Creo el Comprobante
        $comprobante = $this->comprobanteService->generarComprobante($licencia->getTipoLicencia());        

        $licencia->setComprobante($comprobante);

        $licencia->configurarVigencia();        
        
    }

    public function validate(Licencia $licencia){
        /** @var Persona $persona */
        $persona = $licencia->getPersona();

        /** @var TipoLicencia $tipoLicencia */
        $tipoLicencia = $licencia->getTipoLicencia();

        $generoJubiladoTipoLicencia = $tipoLicencia->getGeneroJubilado();

        $sexoCliente = $persona->getSexo();
        $isPersonaJubilado = $persona->getJubilado();

        if(!is_null($generoJubiladoTipoLicencia))
        {
            if($isPersonaJubilado && ($generoJubiladoTipoLicencia != 'j') ){
                throw new SimpleMessageException("Selecciona que es Jubilado, pero la licencia no es del mismo tipo");
            }

            if(!$isPersonaJubilado && ($generoJubiladoTipoLicencia == 'j') ){
                throw new SimpleMessageException("Selecciona que NO es Jubilado, pero la licencia que intenta sacar es para Jubilados");
            }

            if($sexoCliente == 'f' && $generoJubiladoTipoLicencia != 'f'
                || ($sexoCliente == 'm' && $generoJubiladoTipoLicencia != 'm') ){
                throw new SimpleMessageException("El genero de la licencia seleccionada no corresponde con el cargado en la persona");
            }
        }
    }
    
    public function bindPersonaToLicencia(Licencia $licencia) {        
        // Saco los datos de la persona que vino en el request
        /** @var Persona $personaRequest */ 
        $personaRequest = $licencia->getPersona();
        
        // Si la licencia tiene ID de Persona, lo levanto para que Doctrine no intente
        // hacer Insert, y haga update
        if(!is_null($personaRequest) &&
            is_object($personaRequest) &&
            !is_null($personaRequest->getId()))
        {           
            // Obtengo la Persona desde la Base      
            /** @var Persona $persona */        
            $persona = $this->personaService->findById($personaRequest->getId());

            // SI existe actualizo los datos con los datos que viajaron en el request
            if(!is_null($persona)){
                $persona->copyValues($personaRequest); 
                if(!is_null($personaRequest->getLocalidad())){
                    $persona->setLocalidadOtraProvincia(null);
                }
                
                $licencia->setPersona($persona);
            }            
        }
    }

     

}

?>