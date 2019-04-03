<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Persona;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use MProd\LicenciaCyPBundle\Form\PersonaType;

class PersonaController extends Controller
{    
    public function findByAction(Request $request) {
        $this->get('logger')->info("Entro en PersonaController findByAction ");

        $data = json_decode($request->getContent());
        $personaJson = $this->get('persona_service')
                            ->findBySexoAndTipoDocumentoAndNumeroDocumento($data->sexo,
                                                                            $data->tipoDocumento,
                                                                            $data->numeroDocumento);

        
        $this->get('logger')->info("Result: ".$personaJson);                                                                            
        return new Response($personaJson,Response::HTTP_OK, array('content-type'=> 'application/json'));
    }
}
