<?php

namespace MProd\LicenciaCyPBundle\Controller;

use MProd\LicenciaCyPBundle\Entity\Licencia;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MProd\LicenciaCyPBundle\Form\LicenciaType;
use MProd\LicenciaCyPBundle\Service\LicenciaServiceImpl;
use MProd\LicenciaCyPBundle\Exception\SimpleMessageException;
use MProd\LicenciaCyPBundle\Service\BoletaServiceImpl;
use MProd\LicenciaCyPBundle\Service\ComprobanteServiceImpl;

class BoletaPagoController extends Controller
{
    public function imprimirAction(Request $request, $licenciaId) {
        $this->get('logger')->info("BoletaPagoController, imprimirAction, licencia ".$licenciaId);

        $idLicencia = urldecode($licenciaId);
        /** @var LicenciaServiceImpl $licenciaService */
        $licenciaService = $this->get('licencia_service');

        $licencia = $licenciaService->findById($idLicencia);

        return $this->render('MProdLicenciaCyPBundle:Licencia:boleta.pago.html.twig', 
                                array('licencia' => $licencia));                    
    }

}




?>