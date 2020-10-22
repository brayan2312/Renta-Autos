<?php 
require_once "../rentas.controlador.php";
require_once "../../modelos/rentas.modelo.php";

require_once "../autos.controlador.php";
require_once "../../modelos/autos.modelo.php";

require_once "../plantilla.controlador.php";
require_once "../../modelos/combox.modelo.php";

$id = $_GET["codigo"];
$renta = ControladorRentas::ctrMostrarRentas("id_renta", $id);
$folio = strlen($renta["num_contrato"]);
$ceros = "";
if($folio == 1){
	$ceros = "0000";
}else if($folio == 2){
	$ceros = "000";

}else if($folio == 3){
	$ceros = "00";

}else if($folio == 4){
	$ceros = "0";

}

$rentaP = intval($renta["monto"]) + intval($renta["plus"]);
$rentaT = intval($rentaP) * intval($renta["dias"]); 
$id_auto=$renta["id_auto"];
$auto = ControladorAutos::ctrMostrarAutos2("id", $id_auto);
$id_marca = $auto["id_marca"];
$marca = ControladorAutos::ctrMostrarMarcas("id", $id_marca);
$domicilio = json_decode($renta["domicilio_particular"], true);
$nombre = ""; $app = ""; $apm = ""; $calle = ""; $ext = "";
$intt = ""; $colonia = ""; $ciudad = ""; $id_estado = ""; 
$codigo = ""; $tel1 = ""; $tel2 = "";$correo = "";
foreach ($domicilio as $key => $value) {
	$nombre = $value["nombres"];
	$app = $value["app"];
	$apm = $value["apm"];
	$calle = $value["calle"]; 
	$ext = $value["num_ext"]; 
	$intt = $value["num_int"];
	$colonia = $value["colonia"];
	$ciudad = $value["ciudad"]; 
	$id_estado = $value["id_estado"];
	$codigo = $value["codigo"];
	$tel1 = $value["tel_1"];
	$tel2 = $value["tel_2"];
	$correo = $value["correo"];
}
$estado = ControladorPlantilla::ctrMostrarEstados("id", $id_estado);
$fs = new DateTime($renta["fecha_salida"]);
$fechaSalida = $fs->format('d-m-Y'); // imprime 29/03/2018
$fr = new DateTime($renta["fecha_regreso"]);
$fechaRegreso = $fr->format('d-m-Y'); // imprime 29/03/2018

$hora_salida = date("g:i a",strtotime($renta["hora_salida"]));
$hora_regreso = date("g:i a",strtotime($renta["hora_regreso"]));

$tabla_serv = "renta_servicios_adicionales";
$totalServA = 0;
$serv=ModeloRentas::mdlMostrarServiciosA($tabla_serv,"id_renta",$id);
if($serv != false){
	$totalServA = $serv["total"]; 
$Servicios = json_decode($serv["servicios"], true);
}else{
	$totalServA = 0; 
}

$SubTotal = intval($rentaT) + intval($totalServA) + intval($renta["total_horas"]) ;
$totalPagar= 0;
if($renta["iva"] == 1){
  $totalPagar = ($SubTotal * 0.16) + $SubTotal;
}else{

  $totalPagar = $SubTotal;

}

$siFac = "";
$noFac = "";

if($renta["factura"] ==  "1"){
	$siFac = "SI";
}else{
	$noFac = "NO";

}
//FACTURA
$NombreFac = "";
$RfcFac = "";
$CorreoFac = "";
if($renta["factura"] ==  "1"){
	$factura = ControladorAutos::ctrMostrarFacturas("factura_renta","id_renta",$id);
	// var_dump($factura);
	$domicilioFac = json_decode($factura["datos_factura"], true);

	$tipoFac =  $factura["tipo_factura"];
	$tipoFactura = "";

	if($tipoFac == 1){

		$tipoFactura = "MORAL";

		foreach ($domicilioFac as $key => $valueF) {
			$NombreFac= $valueF["empresa"];
			$RfcFac= $valueF["rfc"];
			$CorreoFac = $valueF["correo"];
			
		}

	}else{
		$tipoFactura = "FISICA";
		foreach ($domicilioFac as $key => $valueF) {
			$NombreFac= $valueF["nombres"]." ".$valueF["app"]." ".$valueF["apm"];
			$RfcFac= $valueF["rfc"];
			$CorreoFac = $valueF["correo"];

		}
	}

	echo $NombreFac."<br>";
	echo $RfcFac."<br>";
}	
 include 'renta.php';
 ?>
// <!-- <?php echo mb_strtoupper($auto["placas"]); ?> 
<?php echo ($vacio); ?>
 // $<?php echo number_format($renta["monto"],2,'.',''); ?> -->

