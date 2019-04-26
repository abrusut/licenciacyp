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
    public function imprimirHtmlAction(Request $request, $licenciaId)
    {
        $this->get('logger')->info("BoletaPagoController, imprimirHtmlAction, licencia " . $licenciaId);

        $impresion = $request->query->get('impresion');

        $idLicencia = urldecode($licenciaId);
        /** @var LicenciaServiceImpl $licenciaService */
        $licenciaService = $this->get('licencia_service');

        $licencia = $licenciaService->findById($idLicencia);

        /** @var Barcode $barcodeService */
        $barcodeService = $this->get('barcode_service');

        return $this->render(
            'MProdLicenciaCyPBundle:Licencia:boleta.pago.pdf.html.twig',
            array('licencia' => $licencia,
                    'impresion' => $impresion)
        );
    }

    public function imprimirAction(Request $request, $licenciaId)
    {      
        error_reporting(E_ERROR); 
        $this->get('logger')->info("BoletaPagoController, imprimirAction, licencia " . $licenciaId);

        $idLicencia = urldecode($licenciaId);
        /** @var LicenciaServiceImpl $licenciaService */
        $licenciaService = $this->get('licencia_service');

        $licencia = $licenciaService->findById($idLicencia);
                       
        $pdf = $this->container->get("white_october.tcpdf")->create('', 
                                    PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetAuthor('Ministerio de la Producción');
        $pdf->SetTitle('Emisión de Boletas Licencias Caza y Pesca');
        $pdf->SetSubject($licencia->getTipoLicencia()->getDescripcion());
        $pdf->SetKeywords($licencia->getTipoLicencia()->getDescripcion());
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('helvetica', '', 11, '', true);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);        
        $pdf->AddPage();       


        $options = array(
            'code'   => $licencia->getComprobante()->getNumeroCodigoBarra(),
            'type'   => 'c128',
            'format' => 'png',
            'width'  => 10,
            'height' => 10,
            'color'  => array(0, 0,0)
        );
        
        $barcode =
            $this->get('sgk_barcode.generator')->generate($options);

        $savePath = $this->container->getParameter('barcode_directory');
        $fileName = 'barcode.png';
    
        file_put_contents($savePath.$fileName, base64_decode($barcode));    

        // El HTML Tiene los datos de la licencia
        $html = $this->renderView('MProdLicenciaCyPBundle:Licencia:boleta.pago.pdf.html.twig',
                                    array('licencia' => $licencia));        
        $pdf->writeHTML($html, true, false, true, false, 'J');
        
                       
        $pdf->Output($licencia->getTipoLicencia()->getDescripcion().'.pdf', 'I');        
    }

   
}
