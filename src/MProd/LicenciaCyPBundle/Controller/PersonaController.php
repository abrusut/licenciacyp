<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Persona;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use MProd\LicenciaCyPBundle\Form\PersonaType;
use MProd\LicenciaCyPBundle\Service\JsonServiceImpl;

class PersonaController extends Controller
{    
    public function findByAction(Request $request) {
        $this->get('logger')->info("Entro en PersonaController findByAction ");

        $data = json_decode($request->getContent());
        
        $persona = $this->get('persona_service')
                            ->findBySexoAndTipoDocumentoAndNumeroDocumento($data->sexo,
                                                                            $data->tipoDocumento,
                                                                            $data->numeroDocumento);

        /** @var JsonServiceImpl $jsonService */
        $jsonService = $this->get('json_service');          
        $jsonService->setArrayIgnoredAttributes(array('licencias'));

        $personaJson = $jsonService->transformToJson($persona);
                     

        $this->get('logger')->info("Persona: ".$personaJson);  

        return new Response($personaJson,Response::HTTP_OK, array('content-type'=> 'application/json'));
    }
}
