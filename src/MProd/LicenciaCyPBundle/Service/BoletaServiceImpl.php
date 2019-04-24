<?php
namespace MProd\LicenciaCyPBundle\Service;

use MProd\LicenciaCyPBundle\Service\IBoletaService;
use MProd\LicenciaCyPBundle\Entity\Licencia;
use Psr\Log\LoggerInterface;


class BoletaServiceImpl implements IBoletaService
{

	private $logger;
	private $comprobanteService;

	public function __construct(
		LoggerInterface $logger,
		IComprobanteService $comprobanteService
	) {
		$this->logger = $logger;
		$this->comprobanteService = $comprobanteService;
	}

	public function generarBoleta(Licencia $licencia, $output)
	{
	}

	public function generarCodigoBarras(Licencia $licencia)
	{		
		$comprobante = $licencia->getComprobante();
		$tipoLicencia = $licencia->getTipoLicencia();

		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".
					 $licencia->getId(). 
					" Comprobante: ".
					$comprobante->getId().
					" Tipo Licencia: ".$tipoLicencia->getId() . " - " . $tipoLicencia->getDescripcion());

		// 5 Digitos Codigo Cliente (Ministerio)
		$clienteSAP = $this->zerofill($comprobante->getClienteSap(),5);
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" ClienteSAP(5): ".$clienteSAP. "(". strlen($clienteSAP) .")" );

		// 1 Digito Importe
		$letraServicio = $comprobante->getLetraServicio();
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" letraServicio(1): ".$letraServicio. "(". strlen($letraServicio) .")");

		// 7 Digitos Importe 
		$importe = $this->zerofill($licencia->getComprobante()->getMonto(),7);
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" importe(7): ".$importe. "(". strlen($importe) .")");

		// Primer Dia año corriente
		$firstDayCurrentYear = new \DateTime('first day of January');
				
		$diasPrimerVencimiento = "000";
		$anioPrimerVenciemiento = "00";

		// 5 Digitos Primer Vencimiento
		$primerVencimiento = $this->zerofill($anioPrimerVenciemiento.$diasPrimerVencimiento,5);		

		if (!is_null($comprobante->getPrimerVencimiento())) {
			$anioPrimerVenciemiento =	$comprobante->getPrimerVencimiento()->format('y');
			
			//Diferencia en dias del primer vencimiento contra el año actual
			$interval = $firstDayCurrentYear->diff($comprobante->getPrimerVencimiento());			
			$diasPrimerVencimiento = $interval->format('%a');

			//Armo string final
			$primerVencimiento = $this->zerofill($anioPrimerVenciemiento,2) . $this->zerofill($diasPrimerVencimiento, 3);
		}
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" primerVencimiento(5): ".$primerVencimiento. "(". strlen($primerVencimiento) .")");

		$numeroCodigoBarraUno = $this->zerofill($clienteSAP,5) .
								$letraServicio . 
								$this->zerofill($importe, 7) . 
								$this->zerofill($primerVencimiento,5);
		
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" numeroCodigoBarraUno: ".$numeroCodigoBarraUno. "(". strlen($numeroCodigoBarraUno) .")");
		// Aplicar algoritmo clave 10 con ponderador 3179							
		$temporal = 0;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 0, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 1, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 2, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 3, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 4, 1) * 3;		
		$temporal = $temporal + substr($numeroCodigoBarraUno, 5, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 6, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 7, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 8, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 9, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 10, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 11, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 12, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 13, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 14, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 15, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 16, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraUno, 17, 1) * 1;

		// Calculo de Digito Verificador
		$valor = substr($temporal, -1, 1);
		$verificador1 = 10 - intval($valor);

		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" verificador1: ".$verificador1);
		$numeroCodigoBarraUno = $numeroCodigoBarraUno . $verificador1;

		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" numeroCodigoBarraUno: ".$numeroCodigoBarraUno. "(". strlen($numeroCodigoBarraUno) .")");

		$numeroCodigoBarraDos = "";
		// 2 Digitos Segundo Vencimiento
		$segundoVencimiento = "00";		
		if (!is_null($comprobante->getSegundoVencimiento()) && !is_null($tipoLicencia->getDiasSegundoVencimiento())) {			
			$segundoVencimiento =	$this->zerofill($tipoLicencia->getDiasSegundoVencimiento(),2);
		}
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" segundoVencimiento(2): ".$segundoVencimiento. "(". strlen($segundoVencimiento) .")");
		// 5 Digitos recargo
		$recargo = "00000";
		if(!is_null($comprobante->getRecargoPrimerVencimiento())){
			$recargo = $this->zerofill($comprobante->getRecargoPrimerVencimiento(),5);
		}
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
									" recargo(5): ".$recargo. "(". strlen($recargo) .")");

		$numeroCodigoBarraDos = $recargo.$segundoVencimiento;

		// 21 Digitos Total para identificar la licencia
		// 	2 tipo licencia
		//	9 id licencia
		//    10 id comprobante
		$numeroCodigoBarraDos .= 
			$this->zerofill($licencia->getTipoLicencia()->getId(), 2) .
			$this->zerofill($licencia->getId(), 9) .
			$this->zerofill($comprobante->getId(), 10);

		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
			" numeroCodigoBarraDos: ".$numeroCodigoBarraDos. "(". strlen($numeroCodigoBarraDos) .")");

		// Aplicar algoritmo clave 10 con ponderador 3179
		$temporal = 0;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 20, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 21, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 22, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 23, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 24, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 25, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 26, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 27, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 28, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 29, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 30, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 31, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 32, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 33, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 34, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 35, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 36, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 37, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 38, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 39, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 40, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 41, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 42, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 43, 1) * 9;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 44, 1) * 3;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 45, 1) * 1;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 46, 1) * 7;
		$temporal = $temporal + substr($numeroCodigoBarraDos, 47, 1) * 9;

		// Calculo de Digito Verificador
		$valor2 = substr($temporal, -1, 1);
		$verificador2 = 10 - intval($valor2);
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
			" verificador2: ".$verificador2);

		$numeroCodigoBarraDos = $numeroCodigoBarraDos . $verificador2;

		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
			" numeroCodigoBarraDos: ".$numeroCodigoBarraDos . "(". strlen($numeroCodigoBarraDos) .")");

		$numeroCodigoBarra = $numeroCodigoBarraUno . $numeroCodigoBarraDos;
		
		$this->logger->info("BoletaServiceImpl, generarCodigoBarras licencia :".$licencia->getId().
			" numeroCodigoBarra FINAL: ".$numeroCodigoBarra. "(". strlen($numeroCodigoBarra) .")");

		return $numeroCodigoBarra;
	}

	public function zerofill($entero, $largo)
	{

		$entero = (int)$entero;
		$largo = (int)$largo;
		$relleno = '';
		if (strlen($entero) < $largo) {

			$relleno = str_repeat('0', $largo - strlen($entero));
		}
		return $relleno . $entero;
	}
}
