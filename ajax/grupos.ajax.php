<?php

require_once "../controladores/grupos.controlador.php";
require_once "../modelos/grupos.modelo.php";

class AjaxGrupos{

	/*=============================================
	EDITAR CATEGORÍA
	=============================================*/	

	public $idSemestre;

	public function ajaxObtenerGrupos(){

		$item = "id_semestre";
		$valor = $this->idSemestre;

		$respuesta = ControladorGrupos::ctrMostrarGrupos2($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["idSemestre"])){

	$carrera = new AjaxGrupos();
	$carrera -> idSemestre = $_POST["idSemestre"];
	$carrera -> ajaxObtenerGrupos();
}
