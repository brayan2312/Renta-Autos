<?php

require_once "../controladores/socios.controlador.php";
require_once "../modelos/socios.modelo.php";

require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/combox.modelo.php";


class AjaxSocios{

	/*=============================================
	EDITAR SOCIOS
	=============================================*/	

	public $idSocio;

	public function ajaxEditarSocio(){

		$item = "id";
		$valor = $this->idSocio;

		$respuesta = ControladorSocios::ctrMostrarSocios($item, $valor);

		echo json_encode($respuesta);

	}
	
	public $id_estado;
	public function ajaxEstado(){

		$item = "id";
		$valor = $this->id_estado;

		$respuesta = ControladorPlantilla::ctrMostrarEstados($item, $valor);

		echo json_encode($respuesta);

	}


	public $id_marca;
	public function ajaxMarca(){

		$item = "id";
		$valor = $this->id_marca;

		$respuesta = ControladorSocios::ctrMostrarMarcas($item, $valor);

		echo json_encode($respuesta);

	}

	public $ValidarRfc;


	public function ajaxValidarRFC(){

		$item = "rfc";
		$valor = $this->ValidarRfc;

		$respuesta = ControladorSocios::ctrMostrarSocios($item, $valor);

		echo json_encode($respuesta);

	}


	public $ValidarRfcEditar;
	public $id_autoS;

	public function ajaxValidarRFCEditar(){

		$item = "rfc";
		$valor = $this->ValidarRfcEditar;
		$id = $this->id_autoS;

		$respuesta = ControladorSocios::ctrMostrarSociosRFC($item, $valor,$id);

		echo json_encode($respuesta);

	}

	public function ajaxAgregarSocios(){

		$tabla = "socios";

		$datos =  array("folio"=>$_POST["nuevoFolio"],
						"nombre"=>$_POST["nuevoNombre"],
					    "app"=>$_POST["nuevoApellidoP"],
					    "apm"=>$_POST["nuevoApellidoM"],
					    "ine"=>$_POST["nuevoIdentificacion"],
					    "num_ine"=>$_POST["nuevoNumIdentificacion"],
						"sexo" => $_POST["nuevoSexo"],
						"fecha" => $_POST["nuevoNacimiento"],
						"rfc" => $_POST["NuevoRFC"],
						"calle" => $_POST["nuevoCalle"],
						"exterior" => $_POST["nuevoExterior"],
						"interior" => $_POST["nuevoInterior"],
						"colonia" => $_POST["nuevoColonia"],
						"ciudad" => $_POST["nuevoCiudad"],
						"estado" => $_POST["nuevoEstado"],
						"postal" => $_POST["nuevoPostal"],
						"tel1" => $_POST["nuevoNumero1"],
						"tel2" => $_POST["nuevoNumero2"],
						"correo" => $_POST["nuevoCorreo"],
						"tipo" => $_POST["nuevoTipoSocio"],
						"banco" => $_POST["nuevoBanco"],
						"cuenta" => $_POST["nuevoCuentaB"],
						"inter" => $_POST["nuevoClaveI"]);
		


		

		$respuesta = ModeloSocios::mdlCrearSocio($tabla, $datos);

			
		echo json_encode($respuesta);

	}

	public function ajaxEditarSocios(){
		$tabla = "socios";
		$datos =  array("id"=>$_POST["idSocio"],
			            "nombre"=>$_POST["editarNombre"],
					    "app"=>$_POST["editarApellidoP"],
					    "apm"=>$_POST["editarApellidoM"],
					    "ine"=>$_POST["editarIdentificacion"],
					    "num_ine"=>$_POST["editarNumIdentificacion"],
						"sexo" => $_POST["editarSexo"],
						"fecha" => $_POST["editarNacimiento"],
						"rfc" => $_POST["editarRFC"],
						"calle" => $_POST["editarCalle"],
						"exterior" => $_POST["editarExterior"],
						"interior" => $_POST["editarInterior"],
						"colonia" => $_POST["editarColonia"],
						"ciudad" => $_POST["editarCiudad"],
						"estado" => $_POST["editarEstado"],
						"postal" => $_POST["editarPostal"],
						"tel1" => $_POST["editarNumero1"],
						"tel2" => $_POST["editarNumero2"],
						"correo" => $_POST["editarCorreo"],
						"tipo" => $_POST["editarTipoSocio"],
						"banco" => $_POST["editarBanco"],
						"cuenta" => $_POST["editarCuentaB"],
						"inter" => $_POST["editarClaveI"]);
		

		$respuesta = ModeloSocios::mdlActualizarDatos($tabla, $datos);

		echo json_encode($respuesta);

	}

}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["idSocio"])){

	$socio = new AjaxSocios();
	$socio -> idSocio = $_POST["idSocio"];
	$socio -> ajaxEditarSocio();
}


if(isset($_POST["id_estado"])){

	$estado = new AjaxSocios();
	$estado -> id_estado = $_POST["id_estado"];
	$estado -> ajaxEstado();
}

if(isset($_POST["id_marca"])){

	$marca = new AjaxSocios();
	$marca -> id_marca = $_POST["id_marca"];
	$marca -> ajaxMarca();
}

if(isset( $_POST["ValidarRfc"])){

	$rfc = new AjaxSocios();
	$rfc -> ValidarRfc = $_POST["ValidarRfc"];
	$rfc -> ajaxValidarRFC();

}

if(isset( $_POST["ValidarRfcEditar"])){

	$editarRFC = new AjaxSocios();
	$editarRFC -> ValidarRfcEditar = $_POST["ValidarRfcEditar"];
	$editarRFC -> id_autoS = $_POST["ValSocio"];
	$editarRFC -> ajaxValidarRFCEditar();
}
//AGREGAR SOCIO
if(isset( $_POST["nuevoNombre"])){

	$rfc = new AjaxSocios();
	$rfc -> ajaxAgregarSocios();

}
//EDITAR SOCIO
if(isset( $_POST["editarNombre"])){

	$rfc = new AjaxSocios();
	$rfc -> ajaxEditarSocios();

}