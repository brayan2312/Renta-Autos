<div id="contenedor">
<img id="background_imagen" src="vistas/img/imagenes/portada12.jpg" alt="title">
    <!-- Cabecera -->
    <br>
    <br>
    <header id="cabecera_1">
    </header>
    <!-- Menu -->
    <nav id="menu_3">
        <ul class="ult">

            <!-- <li class="lis"><a class="aa" href="#">
                <div id="ico1"></div>
                RENTAR AUTO
            </a></li> -->
            <li class="lis"><button class="aa" data-toggle="modal" data-target="#modalAgregarCliente"><div id="ico1"></div>RENTAR AUTO</button></li>
<!-- 
            <li class="lis"><a class="aa" href="#">
                <div id="ico2"></div>
                PAGAR RENTA
            </a></li> -->
            <li class="lis"><button class="aa" data-toggle="modal" data-target="#modalPagos"><div id="ico2"></div>PAGAR RENTA</button></li>

             <!-- <li class="lis"><a class="aa" href="#">
                <div id="ico3"></div>
                REPORTE
            </a></li>

             <li class="lis"><a class="aa" href="#">
                <div id="ico4"></div>
                DEVOLUCIÓN
            </a></li> -->
        </ul>
    </nav>
</div>

<?php 
include "modales/Modal_Agregar_Cliente.php";
  include "modales/Modal_Nuevo_Cliente.php";
  include "modales/Modal_Nuevo_Domicilio.php";
  include "modales/Modal_Nuevo_Rfc_Domicilio_Moral.php";
  include "modales/Modal_Editar_Rfc_Domicilio_Moral.php";
  include "modales/Modal_Nuevo_Rfc_Domicilio_Fisica_Otra.php";
  include "modales/Modal_Editar_Rfc_Domicilio_Fisica_Otra.php";
  include "modales/Modal_Clientes_Personal.php";
  include "modales/Modal_Editar_Rfc_Domicilio_Fiscal.php";
  include "modales/Modal_Pagos.php";

 ?>