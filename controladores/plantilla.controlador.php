<?php

class ControladorPlantilla{

	static public function ctrPlantilla(){

		include "vistas/plantilla.php";

	}	

	/*=============================================
	MOSTRAR ESTADOS
	=============================================*/

	static public function ctrMostrarEstados($item, $valor){

		$tabla = "estado";

		$respuesta = ModeloCombox::MdlObtenerEstados($tabla, $item, $valor);

		return $respuesta;
	
	}


}