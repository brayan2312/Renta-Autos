<?php


class ControladorClientes{

	/*=============================================
	MOSTRA CLINTES
	=============================================*/

	static public function ctrMostrarClientes($item, $valor){

		$tabla = "clientes";

		$respuesta = ModeloClientes::mdlMostrarClientes($tabla, $item, $valor);

		return $respuesta;
	
	}


	/*=============================================
	MOSTRA DOMICILIOS DE  CLINTES
	=============================================*/

	static public function ctrMostrarDomiciliosC($item, $valor){

		$tabla = "direccion_particular";

		$respuesta = ModeloClientes::mdlMostrarDomicilios($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRA DIRECCION POR RFC
	=============================================*/

	static public function ctrMostrarDomiRfcFisica($item, $valor){

		$tabla = "clientes";

		$respuesta = ModeloClientes::mdlMostrarDomiRfcFisica($tabla, $item, $valor);

		return $respuesta;
	
	}


	/*=============================================
	MOSTRA DIRECCION POR RFC
	=============================================*/

	static public function ctrMostrarDomiRfcFiscal($item, $valor){

		$tabla = "direccion_fiscal";

		$respuesta = ModeloClientes::mdlMostrarDomiFiscal($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRA DIRECCION POR RFC MORAL
	=============================================*/

	static public function ctrEditarDomiRfc_moral($item, $valor){

		$tabla = "rfc_direccion_moral";

		$respuesta = ModeloClientes::mdlMostrarDomiFiscal($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRA DIRECCION POR RFC PERSONAL
	=============================================*/

	static public function ctrMostrarDomiRfCPersonal($item, $valor){

		$tabla = "direccion_particular";

		$respuesta = ModeloClientes::mdlMostrarDomiPersonal($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRA DIRECCION EDITAR POR RFC MORAL
	=============================================*/

	static public function ctrEditarDomiRfc($item, $valor,$id){

		$tabla = "rfc_direccion_moral";

		$respuesta = ModeloClientes::mdlMostrarEditarDomiRfc($tabla, $item, $valor,$id);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRA DIRECCION EDITAR POR RFC MORAL
	=============================================*/

	static public function mdlMostrarEditarDomiRfc2($item, $valor){

		$tabla = "rfc_direccion_moral";

		$respuesta = ModeloClientes::mdlMostrarEditarDomiRfc($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	OBTENER PRECIO POR DIAS
	=============================================*/

	static public function ctrObtenerPrecioDias($valor,$id){

		$tabla = "precios";

		$respuesta = ModeloClientes::mdlObtenerPrecioDias($tabla,$valor,$id);

		return $respuesta;
	
	}



	

}


 ?>