<?php

require_once "../controladores/autos.controlador.php";
require_once "../modelos/autos.modelo.php";

require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/combox.modelo.php";


class AjaxAutos{

	/*=============================================
	EDITAR SOCIOS
	=============================================*/	

	public $idAuto;

	public function ajaxEditarAuto(){

		$item = "id";
		$valor = $this->idAuto;

		$respuesta = ControladorAutos::ctrMostrarAutos2($item, $valor);

		echo json_encode($respuesta);

	}
	
	public $id_estado;
	public function ajaxEstado(){

		$item = "id";
		$valor = $this->id_estado;

		$respuesta = ControladorPlantilla::ctrMostrarEstados($item, $valor);

		echo json_encode($respuesta);

	}

	public $id_autos;
	public function ajaxSeguro(){

		$item = "id_auto";
		$valor = $this->id_autos;

		$respuesta = ControladorAutos::ctrMostrarSeguros($item, $valor);

		echo json_encode($respuesta);

	}

	public $id_precios;
	public function ajaxPrecios(){

		$item = "id_auto";
		$valor = $this->id_precios;

		$respuesta = ControladorAutos::ctrMostrarPrecios($item, $valor);

		echo json_encode($respuesta);

	}

	public $validarPlacas;

	public function ajaxValidarPlacas(){

		$item = "placas";
		$valor = $this->validarPlacas;

		$respuesta = ControladorAutos::ctrMostrarAutos2($item, $valor);

		echo json_encode($respuesta);

	}


	public $ValidarEditar;
	public $id_autoE;

	public function ajaxValidarPlacasEditar(){

		$item = "placas";
		$valor = $this->ValidarEditar;
		$id = $this->id_autoE;

		$respuesta = ControladorAutos::ctrMostrarValidarPlacasEditar($item, $valor,$id);

		echo json_encode($respuesta);

	}
	//AGREGAR AUTOS
	public function ajaxAgregarAutos(){

	$respuesta2 = ControladorAutos::ctrAgregarAutos();
	$test2 = intVal($respuesta2);
		
	echo json_encode($test2);
		   

	}

	
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["idAuto"])){

	$auto = new AjaxAutos();
	$auto -> idAuto = $_POST["idAuto"];
	$auto -> ajaxEditarAuto();
}


if(isset($_POST["id_estado"])){

	$estado = new AjaxAutos();
	$estado -> id_estado = $_POST["id_estado"];
	$estado -> ajaxEstado();
}

if(isset($_POST["id_autos"])){

	$estado = new AjaxAutos();
	$estado -> id_autos = $_POST["id_autos"];
	$estado -> ajaxSeguro();
}

if(isset($_POST["id_precios"])){

	$precios = new AjaxAutos();
	$precios -> id_precios = $_POST["id_precios"];
	$precios -> ajaxPrecios();
}

/*=============================================
VALIDAR NO REPETIR USUARIO
=============================================*/

if(isset( $_POST["validarPlacas"])){

	$placas = new AjaxAutos();
	$placas -> validarPlacas = $_POST["validarPlacas"];
	$placas -> ajaxValidarPlacas();

}

if(isset( $_POST["ValidarEditar"])){

	$placas2 = new AjaxAutos();
	$placas2 -> ValidarEditar = $_POST["ValidarEditar"];
	$placas2 -> id_autoE = $_POST["Id_auto_Editar"];
	$placas2 -> ajaxValidarPlacasEditar();

}
//AGREGAR AUTO
if(isset( $_POST["nuevoModelo"])){

	$AUTOS = new AjaxAutos();
	$AUTOS -> ajaxAgregarAutos();

}


