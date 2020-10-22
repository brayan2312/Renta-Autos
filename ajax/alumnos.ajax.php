<?php

require_once "../controladores/alumnos.controlador.php";
require_once "../modelos/alumnos.modelo.php";

class AjaxAlumnos{

	/*=============================================
	Obtener Nombres
	=============================================*/	

	public $idGrupo;
	public $Matricula;
	public $valMatricula;

	public function ajaxObtenerNombre(){

		$item = "id_grupo";
		$valor = $this->idGrupo;
		$tabla = "alumnos";


		$respuesta = ModeloAlumnos::mdlMostrarAlumnosCombo($tabla, $item, $valor);
		// $respuesta = "Verga";
		echo json_encode($respuesta);

	}

	public function ajaxObtenerMatricula(){

		$item = "Matricula";
		$valor = $this->Matricula;
		$tabla = "alumnos";


		$respuesta = ModeloAlumnos::mdlMostrarAlumnos($tabla, $item, $valor);
		// $respuesta = "Verga";
		echo json_encode($respuesta);

	}

	public function ajaxObtenerMatriculaVal(){

		$item = "Matricula";
		$valor = $this->valMatricula;
		$tabla = "alumnos";


		$respuesta = ModeloAlumnos::mdlMostrarAlumnos($tabla, $item, $valor);
		
		echo json_encode($respuesta);

	}
}

/*=============================================

=============================================*/	
if(isset($_POST["idGrupo"])){

	$alumnos = new AjaxAlumnos();
	$alumnos -> idGrupo = $_POST["idGrupo"];
	$alumnos -> ajaxObtenerNombre();
}

if(isset($_POST["Matricula"])){

	$matricula = new AjaxAlumnos();
	$matricula -> Matricula = $_POST["Matricula"];
	$matricula -> ajaxObtenerMatricula();
}

if(isset($_POST["valMatricula"])){

	$matriculaVal = new AjaxAlumnos();
	$matriculaVal -> valMatricula = $_POST["valMatricula"];
	$matriculaVal -> ajaxObtenerMatriculaVal();
}