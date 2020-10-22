<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF();
// Definimos el tamaño y orientación del papel que queremos.
$pdf->set_paper("letter");

$html = '<!DOCTYPE html>
<html>
<head>
 <title>PDF_Totalcar</title>
<meta charset="utf-8">
<!------------------------------------HOJA DE ESTILOS------------------------------------------------------------------------>
<style>

body {
  font-family: "Arial",sans-serif;
}

input[type=checkbox] {
 -webkit-transform: scale(1.5);
 vertical-align: top; margin-top: 1px;

}
hr{
	page-break-after: always;
	border: none;
	margin: 0;
	padding: 0;
}

	.MsoNormal span, label
	{
		font-family:"Arial";
		font-size:10.0pt;
	}
	

	</style>
<!----------------------------------------------ANEXO AL CONTRATO-------------------------------------------------------------------------->

</head>
<body>
<div>
	<img class="img" src="logo1.png" style="position: absolute;opacity: 0.2;top: 360px;left: 30px;">
<p style="text-align:center;background:#DEEAF6;font-size:10.0pt;color:#323E4F"><b>ANEXO 1 AL CONTRATO DE ASOCIACIÓN EN PARTICIPACIÓN.</b></p>
<p style="text-align:center;line-height:normal;font-size:10.0pt;">DATOS DE <b>"EL ASOCIADO"</b></p>

<p><pre style="font-size:7.0pt;margin-bottom: -20.9999pt;">                            
Apellido Paterno         Apellido Materno          Nombre(s)</pre></span></p>

<TABLE  class="contrato1" border=0 cellspacing=0 cellpadding=0 width=588 style="width:441.35pt;margin-bottom:-23.9999pt;">
	<TR style="height:14.45pt">
		<TD width=170 valign=top style="width:112.6pt;padding:0cm 5.4pt 0cm -0.6pt;height:14.45pt"><P style="font-size:10.0pt;line-height:115%;">NOMBRE COMPLETO:</P></TD>
		<TD><P style="font-size:10.0pt;line-height:115%,sans-serif;background:yellow"><U>'.mb_strtoupper($socios["apellido_p"]).'</U></P></TD>
		<TD><P style="font-size:10.0pt;line-height:115%,sans-serif;background:yellow"><U>'.mb_strtoupper($socios["apellido_m"]).'</U></P></TD>
		<TD><P style="font-size:10.0pt;line-height:115%,sans-serif;background:yellow"><U>'.mb_strtoupper($socios["nombres"]).'</U></P></TD>
	</TR>
</TABLE>

<p class=MsoNormal style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:115%;"><span >DOMICILIO: CALLE:<span><u style="background:
yellow">'.mb_strtoupper($socios["calle"]).'</u></span> NUM EXTERIOR:<span><u style="background:
yellow">'.mb_strtoupper($socios["num_ext"]).'</u></span> NUM INTERIOR:<span><u style="background:yellow">'.mb_strtoupper($socios["num_int"]).'</u></span>
COLONIA:<span><u style="background:yellow">'.mb_strtoupper($socios["colonia"]).'</u></span> MUNICIPIO:<span><u style="background:yellow">'.mb_strtoupper($socios["ciudad_municipio"]).'</u></span>ESTADO:<span><u style="background:yellow">'.mb_strtoupper($estados_socio["nombre"]).'</u></span> C.P.:<span><u style="background:yellow">'.mb_strtoupper($socios["codigo_postal"]).'</u></span></span><br>

<span lang=ES 
style="font-size:10.0pt;line-height:115%;">SEXO:</span>
<label style="font-size:10.0pt;line-height:115%;">FEMENINO</label> <input type="checkbox"disabled="" checked>
<label style="font-size:10.0pt;line-height:115%;">MASCULINO</label> <input type="checkbox"disabled="">
<br>
<span lang=ES style="font-size:10.0pt;line-height:115%;">SE IDENTIFICA CON:</span>
<label style="font-size:10.0pt;line-height:115%;">INE/IFE</label> <input type="checkbox"disabled="">
<label style="font-size:10.0pt;line-height:115%;">PASAPORTE</label> <input type="checkbox"disabled="">
<label style="font-size:10.0pt;line-height:115%;">CEDULA PROFESIONAL</label> <input type="checkbox"disabled=""><br>

<span>NO. IDENTIFICACION:<span><u style="background:yellow">'.mb_strtoupper($socios["num_identificacion"]).'</u></span></span><br>
<SPAN>FECHA DE NACIMIENTO (DD/MM/AAAA):<SPAN><u style="background:yellow">'.mb_strtoupper($fnc).'</u></SPAN><SPAN> RFC:<SPAN><u style="background:yellow">'.mb_strtoupper($socios["rfc"]).'</u></SPAN></SPAN></SPAN><br>
<SPAN>TELÉFONO DE CONTACTO 1:<SPAN><u style="background:yellow">'.mb_strtoupper($socios["tel_1"]).'</u></SPAN><SPAN>TELÉFONO DE CONTACTO 2:<SPAN><u style="background:yellow">'.mb_strtoupper($socios["tel_2"]).'</u></SPAN></SPAN></SPAN><br>
<span>CORREO ELECTRÓNICO:<span><u style="background:yellow">'.$socios["correo"].'</u></span></span></p>

<p class=MsoNormal align=center style="font-size:10.0pt;">DATOS DEL VEHÍCULO DE "EL ASOCIADO"</p>
<p class=MsoNormal style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:115%"><span >MARCA/LÍNEA/SUBLÍNEA:<span><u style="background:yellow">'.mb_strtoupper($marcas["nombre"]." ".$autos["modelo"]).'</u></span> AÑO:<span><u style="background:yellow">'.mb_strtoupper($autos["temporada"]).'</u></span> COLOR:<span><u style="background:yellow">'.mb_strtoupper($autos["color"]).'</u></span> PLACAS:<span><u style="background:yellow">'.mb_strtoupper($autos["placas"]).'</u></span> ESTADO DE PROCEDENCIA DE LAS PLACAS:<span><u style="background:yellow">'.mb_strtoupper($estados_auto["nombre"]).'</u></span> TIPO DE VERIFICACIÓN <span><u style="background:yellow">'.mb_strtoupper($autos["tipo_verificacion"]).'</u></span></span> / VIGENCIA DE VERIFICACÍON:<span><u style="background:yellow">'.mb_strtoupper($autos["vigencia_verificacion"]).'</u></span></span><BR>
<SPAN>MEDIDA DE LLANTAS:<span><u style="background:yellow">'.mb_strtoupper($autos["medida_llantas"]).'</u></span> KILOMETRAJE:<span><u style="background:yellow">'.number_format($autos["kilometraje"]).'</u></span>Km</SPAN><BR>
<SPAN>ÚLTIMO SERVICIO:<span><u style="background:yellow">'.number_format($autos["ultimo_servicio"]).'</u></span>Km (+/- 1.2Km) PRÓXIMO SERVICIO:<span><u style="background:yellow">'.number_format($autos["proximo_servicio"]).'</u></span>Km (+/- 1.2Km)</SPAN><br>
<SPAN>PERIOCIDAD DE SERVICIOS:<span><u style="background:yellow">'.number_format($autos["periodo_servicio"]).'</u></span>Km (+/- 1.2Km)</SPAN>
</p>

<p class=MsoNormal align=center style="font-size:10.0pt;">DATOS DEL SEGURO DEL VEHÍCULO</p>
<p class=MsoNormal style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:115%"><SPAN>ASEGURADORA:<span><u style="background:yellow">'.mb_strtoupper($seguros["aseguradora"]).'</u></span> TIPO DE COBERTURA:<span><u style="background:yellow">AMPLIA</u></span></SPAN><BR>
<SPAN>NO. POLIZA:<span><u style="background:yellow">'.mb_strtoupper($seguros["num_poliza"]).'</u></span> VIGENCIA:<span><u style="background:yellow">'.mb_strtoupper($seguros["vigencia"]).'</u></span> NO. DE EMERGENCIA:<span><u style="background:yellow">'.mb_strtoupper($seguros["num_emergencia"]).'</u></span></SPAN>	
</p>
<p class=MsoNormal align=center style="font-size:10.0pt;">PAGOS A "EL ASOCIADO"</p>
<p class=MsoNormal style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:115%">
	<SPAN>TIPO DE PAGO A "EL ASOCIADO":<span><u style="background:yellow">72%</u></span></SPAN><BR>
	<SPAN>CRITERIO DE TIEMPOS PARA PAGO:<SPAN>RENTAS PAGADAS AL MIERCOLES ANTERIOR DEL 1ER Y 3ER VIERNES DE CADA MES</SPAN></SPAN>
</p>
<p class=MsoNormal style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:115%">
<label style="font-size:10.0pt;line-height:115%;">DEPÓSITO O TRANSFERENCIA</label> <input type="checkbox"disabled=""><br>
<SPAN>BANCO:<span><u style="background:yellow">'.mb_strtoupper($socios["banco"]).'</u></span> NO. CUENTA:<span><u style="background:yellow">'.mb_strtoupper($socios["cuenta_ban"]).'</u></span></SPAN><BR>
<SPAN>CLAVE INTERBANCARIA:<SPAN><u style="background:yellow">'.mb_strtoupper($socios["clave_inte"]).'</u></SPAN></SPAN>
</p><BR>

<table style="width:450.6pt;border-collapse:collapse;border:none; margin: 0 auto;">
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt; text-align: center;"><b>EL ASOCIANTE</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt; text-align: center;"><b>EL ASOCIADO</b></p>
  </td>
 </tr>
 <tr>
  <td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p><b><span>&nbsp;</span></b></p>
  </td>
<td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p><b><span>&nbsp;</span></b></p>
  <p><b><span>&nbsp;</span></b></p>
  </td>
 </tr>
</table>

<hr> <!------------------TABLA DE AUTORIZACION DE PRECIOS-----------------------SALTO DE PAGINA-------------------------------------------->

<center><img width=292 height=116 id="Imagen 1"src="logo1.png"></center><BR>
<center><p align=center style="font-size:10.0pt"><b>TABLA DE AUTORIZACIÓN DE PRECIOS.</b></p></center>

<table  style="border-collapse:collapse;border:none; margin: 0 auto;">
 <tr>
  <td  style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>ASOCIADO:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;">'.mb_strtoupper($socios["nombres"]." ".$socios["apellido_p"]." ".$socios["apellido_m"]).'</p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>AUTOMOVIL:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;">'.mb_strtoupper($marcas["nombre"]." ".$autos["modelo"]).'</p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>MODELO:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;">'.mb_strtoupper($autos["temporada"]).'</p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>PLACAS:</b></p>
  </td>
  <td style="width:342.4pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;">'.mb_strtoupper($autos["placas"]).'</p>
  </td>
 </tr>
</table><BR>
<p style="text-align:center;font-size:10.0pt"><b>LISTA DE PRECIOS CONVENIDA PARA RENTA DE LA UNIDAD.</b></p>
<table style="border-collapse:collapse;border:none; margin: 0 auto;">
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt; text-align: center;"><b>PRECIO REGULAR</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt; text-align: center;"><b>PRECIO MINIMO</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt; text-align: center;"><b>PLAZO DE RENTA</b></p>
  </td>
 </tr>
 <tr>
  <td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">$'.number_format($precios[0]["regular"],2,'.','').'</p>
  </td>
<td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">$'.number_format($precios[0]["minimo"],2,'.','').'</p>
  </td>
  <td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">DE 1 A 6 DÍAS</p>
  </td>
 </tr>
 <tr>
  <td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">$'.number_format($precios[1]["regular"],2,'.','').'</p>
  </td>
<td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">$'.number_format($precios[1]["minimo"],2,'.','').'</p>
  </td>
  <td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">DE 7 A 14 DÍAS</p>
  </td>
 </tr>
 <tr>
  <td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">$'.number_format($precios[2]["regular"],2,'.','').'</p>
  </td>
<td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">$'.number_format($precios[2]["minimo"],2,'.','').'</p>
  </td>
  <td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="text-align: center;">DE 15 A 30 DÍAS</p>
  </td>
 </tr>
</table><br>

<p style="text-align:justify;font-size:10.0pt">EL ASOCIADO AUTORIZA EL USO DE ESTOS PRECIOS DE RENTA PARA
SU UNIDAD A GRUPO MAGNAM INTERNACIONAL S.A. DE C.V.</p>

<p style="text-align:center;font-size:10.0pt">FECHA DE AUTORIZACIÓN: <u>'.mb_strtoupper(fechaCastellano($nuevaFecha)).'</u></p><br>

<p style="text-align:center"><b><u>'.mb_strtoupper($socios["nombres"]." ".$socios["apellido_p"]." ".$socios["apellido_m"]).'</u></b><br>
<span style="text-align:center">ASOCIADO</span></p>



<hr> <!----------------------------CHEK LIST--------------------------------SALTO DE PAGINA-------------------------------------------->

<div style="width:500px;height:935px;padding-left:50px;padding-right:50px;margin-left:auto;margin-right:auto;border:3px solid black">
<img class="img3" src="logo1.png" style="position: absolute;opacity: 0.2;top: 36%; left: 30px">
<p style="text-align:center;font-size: 14.0pt;line-height: 107%">CHECK LIST DE USO INTERNO</p><br>
<table  style="border-collapse:collapse;border:none; margin: 0 auto">
 <tr>
  <td colspan="2" style="text-align: center;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>DOCUMENTOS ANEXADOS EN COPIA:</b></p>
  </td>
 </tr>
 <tr>
  <td  style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>IDENTIFICACIÓN:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox10" disabled=""><label for="cbox10"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt"><b>COMPROBANTE DE DOMICILIO:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox11" disabled=""><label for="cbox11"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>COMPROBANTE DE CUENTA PARA PAGO:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox12" disabled=""><label for="cbox12"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>FACTURA/CARTA FACTURADA:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox13" disabled=""><label for="cbox13"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>TARJETA DE CIRCULACIÓN:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox14" disabled=""><label for="cbox14"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>VERIFICACIÓN:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox15" disabled=""><label for="cbox15"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>PÓLIZA DE SEGURO:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox16" disabled=""><label for="cbox16"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>TENENCIA:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox17" disabled=""><label for="cbox17"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>CONTAR CON 2 JUEGOS DE LLAVES:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox18" disabled=""><label for="cbox18"></label></p>
  </td>
 </tr>
 <tr>
  <td colspan="2" style="text-align: center;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt"><b>A LA FIRMA DEL CONTRATO</b></p>
  </td>
  
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>VALIDACIÓN DE IDENTIFICACIÓN:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox19" disabled=""><label for="cbox19"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt;"><b>REPORTE DE NO ROBO:</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox20" disabled=""><label for="cbox20"></label></p>
  </td>
 </tr>
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt"><b>TOMAR 8 FOTOGRAFÍAS DEL VEHÍCULO:</b></p>
  </td>
  <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="cbox21" disabled=""><label for="cbox21"></label></p>
  </td>
 </tr>
</table>
</div>


<hr><!------------------CONTRATO CON EL ASOCIADO----------------------------SALTO DE PAGINA-------------------------------------------->
<div> 
<p style="text-align:center;background:#DEEAF6;font-size:10.0pt;color:#323E4F"><b>CONTRATO DE ASOCIACIÓN EN PARTICIPACIÓN</b></p>
<img class="img3" src="logo1.png" style="position: absolute;opacity: 0.2;top: 37%; left: 30px;">

<table border=1 cellspacing=0 cellpadding=0 style="margin-left:5.4pt;border-collapse:collapse;border:none">
 <tr>
  <td width=626 valign=top style="width:469.25pt;border:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-top:6.0pt;margin-right:3.95pt;margin-bottom:
  6.0pt;margin-left:0cm;text-align:justify;font-size:10.0pt"><b>CONTRATO DE ASOCIACIÓN EN PARTICIPACIÓN</b>, QUE CELEBRAN DE UNA PARTE COMO
  ASOCIANTE LA PERSONA MORAL DENOMINADA <b>GRUPO MAGNAM INTERNACIONAL S.A. de C.V.</b>, REPRESENTADA EN ESTE ACTO POR SU APODERADO GENERAL EL <b>C. CESAR TABARES CASTELLANOS</b>, A QUIEN EN LO SUCESIVO Y PARA LOS EFECTOS DEL PRESENTE CONTRATO SE LE REFERIRA COMO <b>"EL ASOCIANTE"</b>, Y POR LA OTRA PARTE LA <b style="background:yellow">C. '.mb_strtoupper($socios["nombres"]." ".$socios["apellido_p"]." ".$socios["apellido_m"]).'</b>, A QUIÉN EN LO SUCESIVO SE LE REFERIRÁ COMO <b>"EL ASOCIADO"</b>, CONTRATO QUE CELEBRAN DE CONFORMIDAD CON LAS DECLARACIONES Y CLAUSULAS SIGUIENTES:---------<b>
  </b></p>
  </td>
 </tr>
</table>

<p style="text-align:center;background:#DEEAF6;font-size:10.0pt;color:#323E4F"><b>D E C L A R A C I O N E S</b></p>

<p style="margin-top:6.0pt;margin-bottom:6.0pt;font-size:10.0pt"><b>I.- DEL ASOCIANTE:</b></p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;font-size:10.0pt">a)&nbsp;&nbsp;&nbsp;Manifiesta <b>"EL ASOCIANTE"</b>”, que su representada es una empresa legalmente constituida conforme a las leyes mexicanas, según consta en la escritura pública número 40567, de fecha 24 de mayo del año 2017, pasada ante la Fe del Notario Titular Licenciado Santos Jesús Martínez Reséndiz de la Notaría Pública número 20 de la Ciudad de Santiago de Querétaro, Estado de Querétaro, cuyo ejemplar de Ley quedó inscrito bajo el Folio Mercantil Electrónico N-2017053080, de fecha 03 de julio de 2017, en el Registro Público de la Propiedad y del Comercio de la Ciudad de Querétaro, Estado de Querétaro.</p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;font-size:10.0pt">b)&nbsp;&nbsp;&nbsp;Así mismo su representante legal manifiesta que cuenta con todas las facultades necesarias para la celebración y suscripción del presente instrumento, agregando que la personalidad que ostenta, no le ha sido revocada, ni modificadas o limitadas en manera alguna</p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;font-size:10.0pt">c)&nbsp;&nbsp;&nbsp;Continúa manifestando<b>"EL ASOCIANTE"</b>como domicilio procesal el ubicado en Camino Real de Carretas número 139, interior 1, en la colonia Milenio III, Querétaro, Querétaro, C.p.76060 contando con su Registro Federal de Contribuyentes: GMI170524Q87</p>


<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;font-size:10.0pt
">d)&nbsp; Finalmente, manifiesta que actualmente su negocio está dedicado a la renta a terceros de vehículos exclusivamente de su propiedad, sin embargo y dada la demanda que existe en el mercado ha diseñado un esquema a través del cual personas físicas o morales puedan aportar uno o varios vehículos de su propiedad y/o posesión a un negocio común que sería la renta de el o los vehículos en favor de terceros y bajo las condiciones que previamente tiene establecidas<b>"EL ASOCIANTE"</b>para sus clientes.</p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:0cm;text-align:justify;font-size:
10.0pt"><b>II.- DEL ASOCIADO:</b></p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;font-size:
10.0pt">e)&nbsp;&nbsp;&nbsp;Manifiesta <b>"EL ASOCIADO"</b>, ser mexicano por nacimiento y contar con los datos de identificación que se detallan en el “ANEXO 1 AL CONTRATO DE ASOCIACIÓN EN PARTICIPACIÓN”</p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;font-size:10.0pt
">f)&nbsp;&nbsp;&nbsp;&nbsp;Igualmente, manifiesta ser propietario del vehículo que se detalla en el anexo identificado como “ANEXO 1 AL CONTRATO DE ASOCIACIÓN EN PARTICIPACIÓN” según lo acredita con los documentos respectivos mismos que exhibe en este acto en original y que solicita le sean devueltos como lo es, con excepción de la tarjeta de circulación del vehículo, del comprobante correspondiente a la verificación vehicular y a la póliza del seguro, por ser indispensables para el uso que se pretenda dar al mismo.</p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;
font-size:10.0pt">g)&nbsp;Continúa manifestando<b>"EL ASOCIADO"</b>como
domicilio procesal el ubicado en:<b style="background:yellow">'.mb_strtoupper($socios["calle"]." ".$socios["num_ext"]." ".$socios["colonia"].", ".$socios["ciudad_municipio"].", ".$estados_socio["nom_abr"]." ".$socios["codigo_postal"]).'</b>contando con su Registro Federal de Contribuyentes:<b style="background:yellow">'.mb_strtoupper($socios["rfc"]).'</b></p>


<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:0cm;text-align:justify;font-size:
10.0pt"><b>III.- DE AMBOS:</b></p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;font-size:10.0pt"><b>a)&nbsp;&nbsp;</b>Manifiestan que se reconocen mutua y recíprocamente la personalidad con que se ostentan para todos los efectos legales y contractuales a que haya lugar; anexando la documentación a que se refieren las declaraciones que anteceden al presente instrumento</p>

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:36.0pt;text-align:justify;text-indent:-18.0pt;font-size:10.0pt"><b>b)&nbsp;&nbsp;&nbsp;</b>Declaran que no existe dolo, lesión, error, violencia o algún otro vicio de la voluntad que influya en la celebración de este contrato; por lo cual las partes acuerdan obligarse al tenor de las siguientes:</p>

<p class=MsoNormal style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:
6.0pt;margin-left:0cm;text-align:justify"><span lang=ES-MX style="font-size:
10.0pt">&nbsp;</span></p>

<p style="text-align:center;background:#DEEAF6;font-size:10.0pt;color:#323E4F"><b>C L A U S U L A S</b></p><br>
<img class="img3" src="logo1.png" style="position: absolute;opacity: 0.2;top: 37%; left: 30px;">

<p style="margin-top:6.0pt;margin-right:4.0pt;margin-bottom:6.0pt;margin-left:0cm;text-align:justify;font-size:
10.0pt"><b>PRIMERA.-DE LA ASOCIACIÓN</b> La persona moral denominada<b> GRUPO MAGNAM INTERNACIONAL, SOCIEDAD
ANONIMA DE CAPITAL VARIABLE</b>, representada en este acto por su apoderado legal el<b> C.CESAR TABARES CASTELLANOS</b>, constituye una Asociación en Participación con EL ASOCIANTE<b> </b>enfocado al negocio de <b>RENTA DE VEHÍCULOS AUTOMOTORES</b> denominado para este contexto como<b>"TOTALCAR RENT"</b>, y que tendrá la finalidad que se señala en la cláusula siguiente, y que será regulada por lo establecido en este contrato.<br><br>
<b>SEGUNDA.-OBJETO.</b>La finalidad de esta Asociación en Participación será la renta a terceros de toda clase de vehículos automotores.<br><br>
<b>TERCERA.- APORTACIONES.</b> Ambas partes están de acuerdo en aportar para la Asociación en Participación lo siguiente:<br>
EL ASOCIADO, aportará el uso y disfrute del vehículo que se detalla en el anexo identificado como “ANEXO 1 AL CONTRATO DE ASOCIACIÓN EN PARTICIPACIÓN” quedando claro que mantendrá su propiedad sobre el mismo en todo momento.<br>
EL ASOCIANTE,<b> aportará</b> su esquema de ventas, administración, forma de contratación, forma de facturación y representación ante los terceros conocidos como clientes además del manejo general del negocio.<br><br>
<b>CUARTA.- DEL VEHICULO.</b>EL ASOCIADO manifiesta, que el vehículo que aporta para el presente negocio, cuenta con seguro de renta diario y/o de cobertura amplia  (ampara: Daños materiales del vehículo, Robo total del vehículo, Responsabilidad civil a terceros en sus bienes y personas (LUC: límite único y combinado), Gastos médicos a los ocupantes del vehículo (LUC: límite único y combinado), Defensa legal y fianza, Servicio de asistencia, uso de renta) cuyos datos de identificación han quedado detallados en el “ANEXO 1 AL CONTRATO DE ASOCIACIÓN EN PARTICIPACIÓN”, obligándose a mantenerla en vigencia y al corriente de sus pagos mientras el presente contrato esté en vigor; de igual manera manifiesta que el vehículo en comento cuenta con un sistema de localización satelital (GPS) que permite la localización del vehículo en caso de ser necesario y tener en su poder un segundo juego de llaves del propio vehículo, así mismo EL ASOCIADO se compromete a realizar y/o pagar los servicios preventivos, correctivos y cambio de piezas de desgaste como parte del uso natural del vehículo.<br>
En caso de alguna eventualidad donde por causas imputables a EL ASOCIADO en caso de no cumplir con el seguro mencionado y/o darle el mantenimiento adecuado al vehículo como se menciona anteriormente, y por esto el seguro del vehículo no se pueda hacer responsable, será EL ASOCIADO el encargado al 100% de reparar daños y perjuicios causados a los terceros quienes se vieron afectados por dicha eventualidad, dejando a salvo a EL ASOCIANTE de toda responsabilidad económica y/o jurídica.<br><br>
<b>QUINTA.-DE LAS UTILIDADES Y/O PÉRDIDAS.</b> Los contratantes están de acuerdo en que las utilidades y en su caso las pérdidas que arroje la presente asociación “TOTALCAR RENT” se repartirán en las proporciones siguientes respecto al monto cobrado por rentas del vehículo:<br>72% EL ASOCIADO, 28% EL ASOCIANTE<br>Las partes quedan perfectamente enteradas de que dichas utilidades o pérdidas serán única y exclusivamente sobre las ganancias y/o pérdidas que arroje la negociación, después de impuestos, entendiéndose como tal el importe final del precio fijado por EL ASOCIANTE para la renta del vehículo a terceros.<br>EL ASOCIADO declara que conoce ampliamente la forma de operar del negocio, de la forma de administrar, negociar y rentar, así como conocer y estar de acuerdo con los documentos utilizados para la realización del negocio.<br>Entrega EL ASOCIADO al EL ASOCIANTE todas las facultades para actuar en su nombre y en nombre de la asociación, de acuerdo a lo que mejor convenga a los intereses colectivos, considerando en estos actos, el celebrar contratos de arrendamiento con los terceros pudiendo firmarlos a su nombre y por su cuenta, por lo que será EL ASOCIANTE el obligado a expedir la factura correspondiente sobre el servicio al tercero.<br>
<img class="img3" src="logo1.png" style="position: absolute;opacity: 0.2;top: 37%; left: 30px;">

EL ASOCIADO manifiesta que autoriza a EL ASOCIANTE a realizarle los pagos por las utilidades generadas sobre esta asociación de manera directa o por medio de un tercero designado por EL ASOCIANTE por medio de depósito, transferencia electrónica y/o pago en efectivo en la cuenta que mencione EL ASOCIADO, quedado bajo su responsabilidad el realizar el pago de sus impuestos. Así mismo estos pagos se realizarán en el tiempo y forma plasmados en el "ANEXO 1 AL CONTRATO DE ASOCIACIÓN EN PARTICIPACIÓN tomando en cuenta que EL ASOCIANTE tendrá 48 horas después del pago del tercero para realizar el pago a EL ASOCIADO.<br>En caso de mora en el pago por parte del tercero EL ASOCIANTE dará aviso a EL ASOCIADO y hará lo que crea necesario y esté dentro de sus posibilidades por cobrar dicha cantidad. En caso de falta de pago total, una vez agotadas todas las instancias para cobro, EL ASOCIANTE dará
aviso a EL ASOCIADO y se considerará como perdida para ambos por lo que EL ASOCIADO no podrá solicitar que EL ASOCIANTE pague la cantidad debida por el tercero.<br><br>
<b>SEXTA.- DE LA RESPONSABILIDAD.</b> Para el caso de robo total o parcial del vehículo aportado por EL ASOCIADO, o en su caso de alguna eventualidad que haga necesario el uso del seguro con que cuenta el vehículo, ambas partes convienen en que habrán de someterse a los procedimientos legales necesarios a fin de resarcir el daño causado, en estos casos EL ASOCIANTE queda facultado por EL ASOCIADO para presentar quejas, querellas y/o denuncias tendientes a la recuperación del vehículo o en su caso a realizar cualquier gestión necesaria para lograr la recuperación del mismo, por lo que desde ahora EL ASOCIADO manifiesta su conformidad para el caso de ser necesario en otorgar en favor de EL ASOCIANTE y/o de la persona física o moral que éste designe un poder general para pleitos y cobranzas, en los términos de las disposiciones civiles vigentes al momento de la eventualidad, esto con la finalidad de coadyuvar de manera directa en la recuperación del vehículo.<br>Todos los gastos que se generen con motivo a eventualidades imputables al tercero deberán de ser cubiertas en primera instancia por el mismo en los términos del contrato de arrendamiento que fuese celebrado entre éste y EL ASOCIANTE. En caso de que dicho tercero no pueda hacerse responsable serán en primera instancia responsabilidad de EL ASOCIANTE y de EL ASOCIADO en proporción a sus aportaciones a dicha asociación en el entendido de que dicha circunstancia no exime al tercero de la responsabilidad civil, penal o de cualquier índole legal, al igual que de su responsabilidad final de pago que le concierne por el uso que hizo del vehículo en términos del contrato de arrendamiento por él suscrito.<br>
En caso de la pérdida parcial o total de la aportación mencionada en clausulas anteriores por EL ASOCIADO, siendo este el vehículo, EL ASOCIANTE no podrá ser responsable de este, por lo que dicha asociación en participación será disuelta por no poder cumplir con el Objeto de la misma. Dejando EL ASOCIADO libre de toda responsabilidad jurídica y/o económica a EL ASOCIANTE.<br><br>
<b>SÉPTIMA.-VIGENCIA.</b> El contrato aquí estipulado tendrá una vigencia de un año contado a partir de la fecha de su firma.<br><br>
<b>OCTAVA.- RECISIÓN.</b> En caso de que las condiciones del vehículo hayan variado y no se encuentre al corriente en el pago de sus contribuciones y demás papeleo que le permita circular, se dará por rescindido el presente contrato de manera automática.<br>
Ambas partes podrán en cualquier momento dar por rescindido el presente contrato ya sea por incumplimiento a algunas de las cláusulas plasmadas en el presente documento o por cuestiones personales, previa notificación que por escrito haga a su contraparte cuando menos con 30 (treinta) días naturales de anticipación a efecto de preparar todo lo concerniente a su liquidación la cual estará sujeta a las siguientes bases:<br>a). - Los bienes que se hayan aportado para la realización del presente negocio quedarán en beneficio de quién los aportó, no teniendo la contraparte el derecho a exigir pago alguno por concepto de indemnización causado por el uso continuo de los mismos.<br>

<img class="img3" src="logo1.png" style="position: absolute;opacity: 0.2;top: 37%; left: 30px;">

b). - Si hubiese utilidades pendientes de repartir, estas se repartirán en términos de lo dispuesto por la cláusula quinta del presente contrato.<br>c). - Las mejoras que se hayan hecho al vehículo quedarán en beneficio de “EL ASOCIADO”, salvo pacto en contrario expresado por escrito por ambas partes.<br>
El contrato no podrá rescindirse si el vehículo aportado por EL ASOCIADO se encuentra en renta a un tercero, en cuyo caso tendrá que esperar a que venza el plazo de arrendamiento del mismo, sobre el cual EL ASOCIADO no podrá solicitar indemnización alguna por el atraso que esto pueda producir en la entrega del vehículo aportado.<br><br>
<b>NOVENA.- MODIFICACIONES.</b> El presente Convenio sólo podrá ser modificado y/o adicionado mediante la firma del Convenio Modificatorio correspondiente, firmadas por los representantes legales de ambas partes.<br><br>
<b>DÉCIMA.- CASO FORTUITO O FUERZA MAYOR:</b> Ninguna de las partes será responsable del incumplimiento a los compromisos derivados de este contrato que resulte de caso fortuito o fuerza mayor, lo cual tendrá que ser demostrado para evitar la rescisión del presente contrato y/o el pago de daños y perjuicios.<br><br>
<b>DÉCIMA PRIMERA.- CESIÓN DE DERECHOS:</b> Ninguna de las partes podrá ceder en forma parcial ni total a favor de cualquier otra persona, los derechos y obligaciones que se deriven de la presente asociación en participación.<br><br>
<b>DÉCIMA SEGUNDA.-ANEXOS.-</b>Todos los documentos adjuntos al presente instrumento tendrán la misma validez y serán parte complementaria del mismo.<br><br>
<b>DÉCIMA TERCERA.-CONFIDENCIALIDAD.-</b> Las partes reconocen que, con motivo del presente convenio, cada una de las partes dará o será posible que dé acceso a cierta “Información Confidencial” de su propiedad y por lo tanto, las partes acuerdan que en caso de que se presente dicho supuesto, no la revelarán a terceros, por ningún medio, así como también se comprometen a no usarla para ningún propósito distinto al cumplimiento del presente Contrato, salvo autorización previa y por escrito de la parte que haya entregado la “Información Confidencial”.<br>Las Partes acuerdan que, para efectos del presente Convenio el término “Información Confidencial” significa aquella información escrita, oral, gráfica o contenida en medios electromagnéticos propiedad de cada una de las partes o de las subsidiarias y/o afiliadas de<b>"GRUPO MAGNAM INTERNACIONAL S.A. de C.V."</b> incluyendo, de manera enunciativa más no limitativa; información comercial, financiera técnica, industrial, de mercado, de negocios, información relativa a nombres de clientes o socios potenciales, ofertas de negocios, diseños, marcas, <i>know-how,</i> invenciones (patentables o no), fórmulas, dibujos y datos técnicos, nombres, papeles, figuras, estudios, sistemas de producción, análisis, ideas, creaciones, presupuestos, campañas, reportes, planos, planes, proyecciones, documentos de trabajo, compilaciones, comparaciones, estudios u otros documentos preparados por cada una de las partes (o sus socios, empleados o agentes), que contengan o reflejen dicha información y cualquier otra información directa o indirectamente relacionada con los negocios y las operaciones de las partes, a la que cada una de ellas o sus representantes tengan o pudieran tener acceso en virtud de la celebración y ejecución de este Convenio.<br>A su vez, no se considera como "Información Confidencial", aquella información que <i>(i)</i> haya sido revelada a alguna de las partes independientemente por terceras personas, siempre y cuando dicha "Información Confidencial" le sea revelada a través de una fuente lícita, <i>(ii)</i> dicha "Información Confidencial" se convierta del dominio público lícitamente, <i>(iii)</i>
la parte reveladora de información haya otorgado su consentimiento para la divulgación de la “Información Confidencial” a la parte receptora de la “Información Confidencial”, (iv) toda información que se encuentre en el dominio público con independencia de las actividades objeto de este instrumento, y (v) deba ser divulgada por disposición legal o por autoridad competente (en el entendido que la información divulgada de esta forma no se considerará públicamente conocida o en el dominio público). Para este caso la parte que deba de revelar la información a las autoridades se obliga a notificarle a la parte propietaria de la información de dicho requerimiento de la autoridad con por lo menos setenta y dos horas antes de dar a conocer la “Información Confidencial” solicitada.<br>

<img class="img3" src="logo1.png" style="position: absolute;opacity: 0.2;top: 36%; left: 30px;">

Las partes convienen (i) en mantener en estricto secreto la “Información Confidencial”, obligándose a no divulgarla o revelarla, por sí o a través de sus representantes o cualquier tercero excepto a los funcionarios, empleados, representantes, contratistas y/o agentes de cada parte, que requieran conocer la “Información Confidencial”, siempre y cuando dichos funcionarios, empleados, representantes, contratistas y/o agentes se encuentren obligados a mantener la “Información Confidencial” en términos del presente Convenio, (ii) conservar la “Información Confidencial” como secreto industrial en términos de los artículos 82, 83, 85 y 86 de la Ley de la Propiedad Industrial vigente en México, así como por los demás artículos que resulten aplicables de dicho ordenamiento legal y otros concurrentes o supletorios, y (iii) a no usar la “Información Confidencial” para ningún propósito distinto al cumplimiento del presente Convenio.<br>Cualquier “Información Confidencial” proporcionada por la parte reveladora a la parte receptora seguirá siendo propiedad exclusiva de la parte reveladora y la parte receptora no tendrá ningún derecho de propiedad sobre la misma. A solicitud de la parte reveladora, la parte receptora destruirá inmediatamente o regresará a la parte reveladora cualquier “Información Confidencial” que se le haya proporcionado, ya sea antes o después de la fecha del presente Convenio, sin conservar copias de la misma.<br>Cualquier “Información Confidencial” que le haya proporcionado la parte reveladora a la parte receptora con anterioridad a la firma del presente Convenio, recibirá el mismo tratamiento que en el presente se establece para la “Información Confidencial”.<br>Las partes se abstendrán, salvo que obtenga autorización previa y por escrito de la otra parte, de usar, parcial o totalmente, cualquiera de las marcas y/o avisos comerciales propiedad o licencia de la otra parte, sus subsidiarias y/o afiliadas.<br>Las disposiciones de confidencialidad y de no uso de la “Información Confidencial” subsistirán durante y con posterioridad a la terminación del presente Convenio por cualquier causa y permanecerán en vigor por un plazo de 4 (cuatro) años contados a partir de la fecha de terminación del presente Convenio.<br><br>
<b>DÉCIMA CUARTA. JURISDICCIÓN -</b>Ambas partes se someten expresamente a los tribunales de Querétaro, Querétaro, para el caso de cualquier controversia que pueda llegar a suscitarse en relación con la interpretación, cumplimiento o rescisión de este contrato, renunciando en este momento al fuero que pudiere corresponderles por sus domicilios presentes o futuros.<br><br>
<b>DÉCIMA QUINTA. CONDICIONES Y PRIVACIDAD.</b>A la firma del presente contrato EL ASOCIADO manifiesta haber leído los Términos y Condiciones por los que se rige el negocio, así como haber leído el aviso de privacidad y estar de acuerdo con ambos documentos, los cuales se encuentran a su disposición en la página web.<a href="http://www.totalcar.rent"><span lang=ES-TRAD style="font-size:10.0pt">www.totalcar.rent</span></a><br><br>Leído que fue y enteradas de su contenido y alcances legales, se firma por duplicado en Querétaro, Querétaro, el día<span style="background:yellow">'.mb_strtoupper(fechaCastellano($nuevaFecha)).'</span>, al margen y calce para mejor constancia.
</p><br>

<table style="width:450.6pt;border-collapse:collapse;border:none; margin: 0 auto;">
 <tr>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt; text-align: center;"><b>EL ASOCIANTE</b></p>
  </td>
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="font-size:11.0pt; text-align: center;"><b>EL ASOCIADO</b></p>
  </td>
 </tr>
 <tr>
  <td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p><b><span>&nbsp;</span></b></p>
  </td>
<td style="width:147.15pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p><b><span>&nbsp;</span></b></p>
  <p><b><span>&nbsp;</span></b></p>
  </td>
 </tr>
</table>
</div>

<hr> <!--------------------------RECIBO DE GPS--------------------------------SALTO DE PAGINA-------------------------------------------->

<div style="width:500px;height:935px;padding-left:50px;padding-right:50px;margin-left:auto;margin-right:auto;border:3px solid black;">
 <img class="img3" src="logo1.png" style="position: absolute;opacity: 0.2;top: 36%; left: 30px;"><br><br>
  <p style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal"><b>RECIBO DE PAGO GPS</b></p><br><br>
  
  <p style="margin-top:0cm;margin-bottom:0cm;margin-left:0cm;margin-bottom:.0001pt;text-align:right;text-indent:43.8pt;line-height:normal">FECHA: 03/02/2020</p><br><br>
  
  <p style="margin-bottom:0cm;margin-bottom:-15.9999pt;text-indent:0.75pt;line-height:normal;margin-bottom: -17.9999pt">RECIBI DE:</p>
  
  <table style="width:374.6pt;border-collapse:collapse;border:none;margin-left:69.75pt;height:10px">
   <tr style="height:20.6pt">
    <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.6pt">
    <p style="margin-bottom:0cm;margin-bottom:.0001pt;text-indent:6.8pt;line-height:normal;margin-bottom: 1.0001pt;margin-top: 2px">'.mb_strtoupper($socios["nombres"]." ".$socios["apellido_p"]." ".$socios["apellido_m"]).'</p>
    </td>
   </tr>
  </table><br><br><br>
  
  <p style="text-align: center;margin-bottom:0cm;margin-bottom:.0001pt;text-indent:71.8pt;line-height:normal"><b>TIPO DE PAGO:</b></p>
  

  <label style="font-size:10.0pt;line-height:115%;margin-right: 2%">EFECTIVO</label> 
      <input type="checkbox"style="margin-right: 15%" disabled="">
      <label style="font-size:10.0pt;line-height:115%;margin-right: 2%">TERMINAL</label> 
      <input type="checkbox"style="margin-right: 15%" disabled="">
      <label style="font-size:10.0pt;line-height:115%;margin-right: 2%">TRANSFERENCIA</label> 
      <input type="checkbox" disabled="">
<br><br><br>

	<p style="margin-bottom:0cm;margin-bottom:.0001pt;text-indent:0.75pt;line-height:normal">TOTAL A PAGAR: <u>$ 3,600 MXN</u></p><br>
  	<p style="margin-bottom:0cm;margin-bottom:-17.9999pt;line-height:normal;text-indent:0.75pt">CANTIDAD PAGADA: $</p>
  <table style="width:374.6pt;border-collapse:collapse;border:none;margin-left:137.75pt">
   <tr style="height:20.6pt">
    <td  style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.6pt">$'.number_format($gps["gps"],2,'.','').'</td>
   </tr>
  </table><br><br>
  <p style="margin-bottom:0cm;margin-bottom:-16.9999pt;text-indent:0.75pt;line-height:normal">RESTO A PAGAR: $</p>
  <table style="width:374.6pt;border-collapse:collapse;border:none;margin-left:117.75pt">
   <tr style="height:20.6pt">
    <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:20.6pt">$'.number_format($gps["monto"],2,'.','').'</td>
   </tr>
  </table><br><br><br><br><br><br><br><br><br><br>
  <p style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal"><b><u>'.mb_strtoupper($socios["nombres"]." ".$socios["apellido_p"]." ".$socios["apellido_m"]).'</u></b><br>ASOCIADO</p>
  </td>
 </tr>
</div>

<hr> <!----------------------------INFORMACION DEL ASOCIADO---------------------------SALTO DE PAGINA------------------------------------->
<DIV>
<img class="img7" src="logo1.png" style="position: absolute;opacity: 0.1;top: 40%;left: 95px;width: 75%;">
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
<table border=1 cellspacing=0 cellpadding=0 style="border-collapse:collapse;border:none;margin: 0 auto;">
 <tr style="height:35.25pt">
  <td width=434 colspan=2 valign=top style="width:325.8pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:35.25pt">
  <p style="margin-bottom:0cm;margin-bottom:.0001pt;text-align:center;line-height:normal"><b>DATOS DEL ASOCIADO</b></p>
 </td>
 </tr>
 <tr style="height:31.75pt">
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom: 11.0001pt">FOLIO:</p>
  </td>
  <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;">
  <p style="margin-bottom: 11.0001pt"><b>'.mb_strtoupper($autos["folio"]).'</b></p>
  </td>
 </tr>
 <tr style="height:13.75pt">
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom: 11.0001pt">NOMBRE_SOCIO:</p>
  </td>
  <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom: 11.0001pt">'.mb_strtoupper($socios["nombres"]." ".$socios["apellido_p"]." ".$socios["apellido_m"]).'</p>
  </td>
 </tr>
 <tr style="height:15.3pt">
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom: 11.0001pt">COCHE:</p>
  </td>
  <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom: 11.0001pt">'.mb_strtoupper($marcas["nombre"]." ".$autos["modelo"]).'</p>
  </td>
 </tr>
 <tr style="height:13.5pt">
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom: 11.0001pt">PLACAS:</p>
  </td>
  <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;height:13.5pt">
  <p style="margin-bottom: 11.0001pt">'.mb_strtoupper($autos["placas"]).'</p>
  </td>
 </tr>
 <tr style="height:13.9pt">
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom:11.0001pt">MODELO:</p>
  </td>
  <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom: 11.0001pt">'.mb_strtoupper($autos["temporada"]).'</p>
  </td>
 </tr>
 
 <tr style="height:13.3pt">
  <td style="border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom:11.0001pt">COLOR:</p>
  </td>
  <td style="border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt">
  <p style="margin-bottom: 11.0001pt">'.mb_strtoupper($autos["color"]).'</p>
  </td>
 </tr>
</table>
</DIV>
</div>
</body>
</html>';

// Cargamos el contenido HTML.
$pdf->load_html(($html));

// Renderizamos el documento PDF.
$pdf->render();
 
// Enviamos el fichero PDF al navegador.
$pdf->stream('FicheroEjemplo.pdf',["Attachment" => false]);

?>
