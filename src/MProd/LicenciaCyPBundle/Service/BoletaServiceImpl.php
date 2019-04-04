<?php

//////////////////////////////////
// INICIO DEL PROGRAMA PRINCIPAL//
//////////////////////////////////

// Incluyo las librerias que necesito para parsear la pagina

include_once("seguridad.php");
include_once("cabecera.php");
include_once("funciones.php");

$error = "";
$archivo = "reimprimir48.php";

$tpl->loadTemplatefile("impresion_boleta48.htm", true, true);

$tpl->setCurrentBlock("fila");

// TOMO LOS DATOS QUE VOY A MOSTRAR DE LA BASE DE DATOS
$sqlSalida = "SELECT *
              FROM licencia
              WHERE  `l_id` =$l_id";


// GENERO LAS CONSULTAS DE DATOS Y CONTADOR PARA PAGINAR RESULTADOS
$arrMostrar = $conn->getRow($sqlSalida);

if(MDB2::isError($arrMostrar)) 
   $error = "No se puede establecer la conexi�n a la Base de Datos";
else
{   
	$l_id = $arrMostrar["l_id"];
    $l_nombre = $arrMostrar["l_nombre"];
   	$l_apellido = $arrMostrar["l_apellido"];
  	$l_fnac = $arrMostrar["l_fnac"];
  	$l_nacion = $arrMostrar["l_nacion"];
 	  $l_tdoc = $arrMostrar["l_tdoc"];
  	$l_ndoc = $arrMostrar["l_ndoc"];
  	$l_domicilio = $arrMostrar["l_domicilio"];
  	$l_localidad = $arrMostrar["l_localidad"];
   	$l_provincia = $arrMostrar["l_provincia"];
   	$l_pais = $arrMostrar["l_pais"];
   	$l_tipo = $arrMostrar["l_tipo"];
   	$l_fvto = $arrMostrar["l_fvto"];
   	$l_bid = $arrMostrar["l_bid"];
   	$l_emisor = $arrMostrar["l_emisor"];
   	$l_idboleta = $arrMostrar["l_idboleta"];
    $l_sexo = $arrMostrar["l_sexo"];
    $l_jubilado = $arrMostrar["l_jubilado"];
	
	$sqlB = "SELECT *
              FROM boleta
              WHERE  `b_id` =$l_bid";


	// CONSULTO LA BOLETA YA GENERADA
	$arrB = $conn->getRow($sqlB);

	if(MDB2::isError($arrB)) 
   		$error = "No se puede establecer la conexi�n a la Base de Datos";
   	
   	$b_pagado = $arrB["b_importe"];
   	$id= $arrB["b_usu"];
	
	$tpl->setVariable("hoy", date("d/m/Y"));
	$tpl->setVariable("l_id",  $l_id);
  $tpl->setVariable("l_nombre",  $l_nombre);
	$tpl->setVariable("l_apellido", $l_apellido);
	$tpl->setVariable("l_fnac", $l_fnac);
	$tpl->setVariable("l_nacion", $l_nacion);
	$tpl->setVariable("l_tdoc", cargar_tipo_doc($conn,"l_tdoc", $l_tdoc));
	$tpl->setVariable("l_ndoc", $l_ndoc);
	$tpl->setVariable("l_domicilio", $l_domicilio);
	$tpl->setVariable("l_provincia", $l_provincia);
	$tpl->setVariable("l_pais", $l_pais);
	$tpl->setVariable("l_tipo", cargar_tipo_caza($conn,"l_tipo", $l_tipo));
	
	$tpl->setVariable("tipo", tipo_caza($conn, $l_tipo));
		
	$tpl->setVariable("precio", sin_cero($b_pagado)) ;
	 
 	$tpl->setVariable("edad", edad($l_fnac));
	
	$tpl->setVariable("nom_emisor", "Ministerio de la Producción");
	
	$tpl->setVariable("tipo_doc", tipo_doc($conn, $l_tdoc));
		
	$tpl->setVariable("l_fvto", dd_mm_yyyy($l_fvto));
	$tpl->setVariable("l_bid", zerofill($l_bid,6) );
	$tpl->setVariable("l_emisor", zerofill($l_emisor, 3));

	$tpl->setVariable("l_localidad", $l_localidad);
	
	$tpl->setVariable("usuario", usuario($conn, $id)) ;
	
		
  $venci = date("Y");
  
  if($l_tdoc==4)
  	$nd=0;
   else
  	$nd=$l_ndoc;
  	
//$numeroCodigoBarra = '00003971'.zerofill($arrS['l_id'], 5).zerofill($arrS['l_tipo'], 2).$arrS['l_tdoc'].zerofill($nd, 8).zerofill($arrS['l_emisor'], 3).zerofill($l_bid, 6).$venci.'12'.'31'.zero($b_pagado, 8); 
$clienteSAP= "15964";
$letraServicio= "A";
$importe="30000";
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

 session_start(); 
 
 
 $_SESSION["imp"]=$numeroCodigoBarra;

    $tpl->setVariable("xx", $_SESSION["imp"]); 
    
/***************************************************************************/

    $tpl->parseCurrentBlock("fila");

   
} //fin else

// Antes de comenzar la carga, muestro el error ocurrido en caso de haber
// uno. Si no hay error, pasa de largo la instruccion y sigue con la carga
$tpl->setCurrentBlock("alerta");

if(!empty($error))
   $tpl->setVariable("mensaje", $error);

  
$tpl->parseCurrentBlock("alerta");

// TODO PARSEADO CON EXITO
$tpl->show();
$conn->disconnect();

?>