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
use MProd\LicenciaCyPBundle\Twig\BarcodeTwigExtension;

class BoletaPagoController extends Controller
{
    public function imprimirAction(Request $request, $licenciaId)
    {
        $this->get('logger')->info("BoletaPagoController, imprimirAction, licencia " . $licenciaId);

        $impresion = $request->query->get('impresion');

        $idLicencia = urldecode($licenciaId);
        /** @var LicenciaServiceImpl $licenciaService */
        $licenciaService = $this->get('licencia_service');

        $licencia = $licenciaService->findById($idLicencia);

        /** @var Barcode $barcodeService */
        $barcodeService = $this->get('barcode_service');

        return $this->render(
            'MProdLicenciaCyPBundle:Licencia:boleta.pago.html.twig',
            array('licencia' => $licencia,
                    'impresion' => $impresion)
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
       

        $twigExtBarCode = $this->container->get('twig')->getExtension(BarcodeTwigExtension::class);

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


        // El HTML Tiene los datos de la licencia
        $html = $this->renderView('MProdLicenciaCyPBundle:Licencia:boleta.pago.pdf.sinbarcode.html.twig',
                                    array('licencia' => $licencia));        
        $pdf->writeHTML($html, true, false, true, false, 'J');

        // Example of Image from data stream ('PHP rules')
        $barcode =$twigExtBarCode->getBarCodeGif($licencia->getComprobante()->getNumeroCodigoBarra(),'pdf');
        // The '@' character is used to indicate that follows an image data stream and not an image file name
        $pdf->Image($barcode);
        /** $pdf->Image('@'.$barcode,10,10,130,55);        
        // Codigo de Barras
        //$pdf->Write(0, $licencia->getComprobante()->getNumeroCodigoBarra(), '', 0, 'J', true, 0, false, true, 0);        
                
        $html = $this->renderView('MProdLicenciaCyPBundle:Licencia:boleta.pago.pdf.sinbarcode.html.twig',
                                array('licencia' => $licencia));        
        $pdf->writeHTML($html, true, false, true, false, 'J');
        $pdf->Image($barcode);
            **/
        $pdf->Output("example.pdf", 'I');        
    }

   
}
