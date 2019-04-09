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
use MProd\LicenciaCyPBundle\Service\Barcode\Barcode;
use Symfony\Component\HttpFoundation\Response;

class BoletaPagoController extends Controller
{
    public function imprimirAction(Request $request, $licenciaId)
    {
        $this->get('logger')->info("BoletaPagoController, imprimirAction, licencia " . $licenciaId);

        $idLicencia = urldecode($licenciaId);
        /** @var LicenciaServiceImpl $licenciaService */
        $licenciaService = $this->get('licencia_service');

        $licencia = $licenciaService->findById($idLicencia);

        /** @var Barcode $barcodeService */
        $barcodeService = $this->get('barcode_service');

        return $this->render(
            'MProdLicenciaCyPBundle:Licencia:boleta.pago.html.twig',
            array('licencia' => $licencia)
        );
    }

    public function imprimirPdfAction(Request $request, $licenciaId)
    {      
        error_reporting(E_ERROR); 
        $this->get('logger')->info("BoletaPagoController, imprimirAction, licencia " . $licenciaId);

        $idLicencia = urldecode($licenciaId);
        /** @var LicenciaServiceImpl $licenciaService */
        $licenciaService = $this->get('licencia_service');

        $licencia = $licenciaService->findById($idLicencia);

        /** @var Barcode $barcodeService */
        $barcodeService = $this->get('barcode_service');

        $pdf = $this->container->get("white_october.tcpdf")->create('HORIZONTAL', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetAuthor('Ministerio de la Producción');
        $pdf->SetTitle('Emisión de Boletas Licencias Deportivas');
        $pdf->SetSubject($licencia->getTipoLicencia()->getDescripcion());
        $pdf->SetKeywords($licencia->getTipoLicencia()->getDescripcion());
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 11, '', true);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();
        $html = $this->renderView('MProdLicenciaCyPBundle:Licencia:boleta.pago.pdf.html.twig',
                                    array('licencia' => $licencia));
        $pdf->writeHTML($html);
        echo $html;
        die();
        $pdf->Output("example.pdf", 'I');        
    }

   
}
