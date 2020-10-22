<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/socios.controlador.php";
require_once "controladores/autos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/rentas.controlador.php";


require_once "modelos/usuarios.modelo.php";
require_once "modelos/combox.modelo.php";
require_once "modelos/socios.modelo.php";
require_once "modelos/autos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/rentas.modelo.php";





$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();