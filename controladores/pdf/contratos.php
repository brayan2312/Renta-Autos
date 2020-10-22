<?php

require_once "../autos.controlador.php";
require_once "../../modelos/autos.modelo.php";

require_once "../socios.controlador.php";
require_once "../../modelos/socios.modelo.php";

require_once "../plantilla.controlador.php";
require_once "../../modelos/combox.modelo.php";


$id = $_GET["codigo"];
$autos = ControladorAutos::ctrMostrarAutos2("id", $id);
$gps = ControladorAutos::GPS("id_auto",$id);
$socios = ControladorSocios::ctrMostrarSocios("id",$autos["id_socio"]);

$estados_socio = ControladorPlantilla::ctrMostrarEstados("id", $socios["id_estado"]);

$estados_auto = ControladorPlantilla::ctrMostrarEstados("id", $autos["id_estado"]);

$marcas = ControladorAutos::ctrMostrarMarcas("id",$autos["id_marca"]);

$seguros = ControladorAutos::ctrMostrarSeguros("id_auto", $id);

$precios = ControladorAutos::ctrMostrarPrecios("id_auto", $id);

$dt = new DateTime($autos["fecha"]);
$nc = new DateTime($socios["nacimiento"]);

$nuevaFecha = $dt->format('d-m-Y'); // imprime 29/03/2018
$fnc = $nc->format('d-m-Y'); // imprime 29/03/2018
// print $dt->format('H:i:s'); // imprime 15:20:40




function fechaCastellano ($fecha) {
  $fecha = substr($fecha, 0, 10);
  $numeroDia = date('d', strtotime($fecha));
  $dia = date('l', strtotime($fecha));
  $mes = date('F', strtotime($fecha));
  $anio = date('Y', strtotime($fecha));
  $dias_ES = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");
  $dias_EN = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
  $nombredia = str_replace($dias_EN, $dias_ES, $dia);
$meses_ES = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
  $meses_EN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
  $nombreMes = str_replace($meses_EN, $meses_ES, $mes);
  return $nombredia." ".$numeroDia." de ".$nombreMes." del ".$anio;
}





setlocale(LC_MONETARY, 'en_US');


 include 'dompdf.php';
 // include 'contratoss1.php';

 echo "<script>
 window.print();

 </script>";

?>
