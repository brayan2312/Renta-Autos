<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
// Instanciamos un objeto de la clase DOMPDF.
$pdf = new DOMPDF();
// Definimos el tamaño y orientación del papel que queremos.
$pdf->set_paper("letter");

$html = '<html>

<head>
<meta charset="utf-8">
<style>
body{
  font-family:"Arial";
}
</style>

</head>

<body>

<div>
<img src="image001.jpg">
<p align="center"style="font-size:18.0pt;line-height:107%;margin-top: -3%"><b>RECIBO DE PAGO</b></p>

<p align="right" style="font-size:12.0pt;line-height:107%;color:red"><b>No.89898989</b></p>

<p align=right style="font-size:12.0pt;line-height:107%"><b>Fecha:</b><span>05/07/2020</span></p>
<div style="background-color: #C0C0C0; height: 18%">
  <div style="padding-top: 6px">
<p><span>Días: <span
style="background:yellow">30</span>                    Fecha de salida: <span
style="background:yellow">05/07/2020</span>                 Fecha de regreso: <span
style="background:yellow">05/07/2020</span></span></p>

<p><span >Modelo:
<span style="background:yellow">NISSAN</span>      Hora de salida: <span
style="background:yellow">04:00 pm</span>                      Hora de regreso:
<span style="background:yellow">04:00 pm</span></span></p>

<p><span>Placas:
<span style="background:yellow">39403VDCEFCC</span></span></p>
</div>
</div>


<div style="background-color: #C0C0C0; margin-top: 3%">
<div style="padding-top: 6px">
<p><span lang=ES style="font-size:12.0pt;line-height:107%">Nombre: <span style="background:yellow">Brayan Fernando Antunez Nava</span></span></p>

<p><span lang=ES style="font-size:12.0pt;line-height:107%">RFC: <span style="background:yellow">9VR943FEE3FF</span></span></p>

<p><span lang=ES style="font-size:12.0pt;line-height:107%">Teléfono: 74256678            Correo electrónico:
<a>fjfjff-.@gmail.com</a></span></p>

<p align=right style="text-align:right;font-size:12.0pt;line-height:107%"><b>Total a pagar: $</b><span style="background:yellow">20000</span></span></p>
</div>
</div>

<br>
<table align="center" border=1 cellspacing=0 cellpadding=0 style="border-collapse:collapse;border:none;font-size:12.0pt;width: 100%; height:1px">
 <tr style="background-color: bisque;height:1px">
  <td style="width:110.35pt;border:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt;font-size:12.0pt">
  <p align=center>No.</p>
  </td>
  <td style="width:110.35pt;border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p align=center>TIPO</p>
  </td>
  <td style="width:110.35pt;border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p align=center>FECHA</p>
  </td>
  <td  style="width:110.35pt;border:solid windowtext 1.0pt;border-left:none;padding:0cm 5.4pt 0cm 5.4pt">
  <p align=center>MONTO</p>
  </td>
 </tr>
 <tr>
  <td style="width:110.35pt;border:solid windowtext 1.0pt;border-top:none;padding:0cm 5.4pt 0cm 5.4pt"align="center">
  <p align="center">1</p>
  </td>
  <td  style="width:110.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt"align="center">
  <p>tarjeta</p>
  </td>
  <td  style="width:110.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt"align="center">
  <p>4555</p>
  </td>
  <td style="width:110.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt"align="center">
  <p>454545</p>
  </td>
 </tr>
 <tr>
  <td style="width:110.35pt;border:none;padding:0cm 5.4pt 0cm 5.4pt"align="center">
  <p></p>
  </td>
  <td style="width:110.35pt;border:none;padding:0cm 5.4pt 0cm 5.4pt"align="center">
  <p></p>
  </td>
  <td style="width:110.35pt;border:none;border-right:solid windowtext 1.0pt;padding:0cm 5.4pt 0cm 5.4pt"align="center">
  <p></p>
  </td>
  <td style="width:110.35pt;border-top:none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt"align="center">
  <p>$</p>
  </td>
 </tr>
</table>
</div>

</body>

</html>

   ';
// Cargamos el contenido HTML.
$pdf->load_html(($html));

// Renderizamos el documento PDF.
$pdf->render();
 
// Enviamos el fichero PDF al navegador.
$pdf->stream('FicheroEjemplo.pdf',["Attachment" => false]);

?>