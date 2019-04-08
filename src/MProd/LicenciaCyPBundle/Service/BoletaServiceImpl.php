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

		$clienteSAP = $comprobante->getClienteSap();
		$letraServicio = $comprobante->getLetraServicio();

		// Importe
		$importe = $licencia->getComprobante()->getMonto();

		// Primer Vencimiento
		$primerVencimiento = "00000";
		if (!is_null($comprobante->getPrimerVencimiento())) {
			$anio =	$comprobante->getPrimerVencimiento()->format('y');
			$dias =	$comprobante->getPrimerVencimiento()->format('d');
			$primerVencimiento = $anio . $dias;
		}

		$numeroCodigoBarraUno = $clienteSAP . $letraServicio . $this->zerofill($importe, 7) . $primerVencimiento;

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

		$valor = substr($temporal, -1, 1);
		$verificador1 = 10 - intval($valor);
		$numeroCodigoBarraUno = $numeroCodigoBarraUno . $verificador1;

		// Segundo Vencimiento
		$segundoVencimiento = "00";
		$recargoSegundoVencimiento = "00000";
		if (!is_null($comprobante->getSegundoVencimiento())) {
			$anio =	$comprobante->getSegundoVencimiento()->format('y');
			$dias =	$comprobante->getSegundoVencimiento()->format('d');
			$segundoVencimiento = $anio . $dias;
			$recargoSegundoVencimiento = $comprobante->getRecargoSegundoVencimiento();
		}

		// 21
		// 	2 tipo licencia
		//	9 id licencia
		//    10 comprobante
		$numeroCodigoBarraDos = $recargoSegundoVencimiento .
			$segundoVencimiento .
			$this->zerofill($licencia->getTipoLicencia()->getId(), 2) .
			$this->zerofill($licencia->getId(), 9) .
			$this->zerofill($comprobante->getId(), 10);

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

		$valor2 = substr($temporal, -1, 1);
		$verificador2 = 10 - intval($valor2);

		$numeroCodigoBarraDos = $numeroCodigoBarraDos . $verificador2;

		$numeroCodigoBarra = $numeroCodigoBarraUno . $numeroCodigoBarraDos;
		
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
