<?php
use MProd\LicenciaCyPBundle\Service\IBoletaService;
use MProd\LicenciaCyPBundle\Entity\Licencia;


class BoletaServiceImpl implements IBoletaService{

	public function generarBoleta(Licencia $licencia){
			$clienteSAP= "15964";
			$letraServicio= "A";
			$importe=$licencia->getComprobante()->getMonto();
			$primerVencimiento= "00000";

			$numeroCodigoBarraUno = $clienteSAP.$letraServicio.zerofill($importe, 7).$primerVencimiento;

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
			$verificador1= 10 - intval($valor);  
			$numeroCodigoBarraUno= $numeroCodigoBarraUno.$verificador1;

			$recargo= "00000";
			$segundoVencimiento= "00";
			// 21
			// 	2 tipo licencia
			//	9 id licencia
			//    10 comprobante
			$numeroCodigoBarraDos = $recargo.$segundoVencimiento.zerofill("3", 2).zerofill("154", 9).zerofill("2351", 10);

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
			$verificador2= 10 -intval($valor2);  

			$numeroCodigoBarraDos= $numeroCodigoBarraDos.$verificador2;

			$numeroCodigoBarra= $numeroCodigoBarraUno.$numeroCodigoBarraDos;
	}
}

?>