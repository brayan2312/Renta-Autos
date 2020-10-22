<?php
require_once "../controladores/autos.controlador.php";
require_once "../modelos/autos.modelo.php";

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

require_once "../controladores/plantilla.controlador.php";
require_once "../modelos/combox.modelo.php";

require_once "../controladores/rentas.controlador.php";
require_once "../modelos/rentas.modelo.php";

class AjaxClientes{

	/*=============================================
	OBTENER CLIENTES
	=============================================*/	

	public $Obtener_clientes;

	public function ajaxObtenerClientes(){

		$item = null;
		$valor = null;

		$respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	OBTENER DOMICILIOS CLIENTES
	=============================================*/	

	public $id_cliente;

	public function ajaxObtenerDomicilios(){

		$item = "id_clientes";
		$valor = $this->id_cliente;

		$respuesta = ControladorClientes::ctrMostrarDomiciliosC($item, $valor);

		echo json_encode($respuesta);

	}
	/*=============================================
	AGREGAR CLIENTES NUEVOS
	=============================================*/	
	public function AgregarNuevoCliente(){

			$tabla = "clientes";

			$datos =  array("nombre"=>$_POST["nuevoNombre_C"],
						    "app"=>$_POST["nuevoApellidoP_C"],
						    "apm"=>$_POST["nuevoApellidoM_C"],
						    "correo"=>$_POST["nuevo_Corrreo_C"],
						    "rfc"=>$_POST["nuevoRFC_C"],
						    "calle"=>$_POST["nuevoCalle_C"],
						    "intt"=>$_POST["nuevoInterior_C"],
						    "ext"=>$_POST["nuevoExterior_C"],
						    "colonia"=>$_POST["nuevoColonia_C"],
						    "ciudad"=>$_POST["nuevoCiudad_C"],
						    "estado"=>$_POST["nuevoEstado_C"],
						    "codigo"=>$_POST["nuevoPostal_C"],
						    "tel1"=>$_POST["nuevoNumero1_C"],
							"tel2" => $_POST["nuevoNumero2_C"]);
			$respuesta = ModeloClientes::mdlCrearNuevoCliente($tabla, $datos);
			$tabla2 = "direccion_particular";

			$respuesta2 = ModeloClientes::mdlAgregarNuevoDomicilio($tabla2, $datos,$respuesta["id"]);

		 echo json_encode($respuesta2);
			
			

	}

	/*=============================================
	AGREGAR UN NUEVO DOMICILIO
	=============================================*/	
	public function AgregarNuevoDomicilio(){

			$tabla = "direccion_particular";

			$datos =  array("id"=>$_POST["id_cliente"],
							"calle"=>$_POST["nuevoCalle_C"],
						    "intt"=>$_POST["nuevoExterior_C"],
						    "ext"=>$_POST["nuevoInterior_C"],
						    "colonia"=>$_POST["nuevoColonia_C"],
						    "ciudad"=>$_POST["nuevoCiudad_C"],
						    "estado"=>$_POST["nuevoEstado_C"],
						    "codigo"=>$_POST["nuevoPostal_C"],
						    "tel1"=>$_POST["nuevoNumero1_C"],
							"tel2" => $_POST["nuevoNumero2_C"]);

			$respuesta = ModeloClientes::mdlAgregarNuevoDomicilio($tabla, $datos);


		 echo json_encode($respuesta);
			
			

	}

	/*=============================================
	AGREGAR UN NUEVO DOMICILIO-RFC FACTURA-MORAL
	=============================================*/	
	public function AgregarNuevoRFCFACDomicilio(){

			$tabla = "rfc_direccion_moral";

			$datos =  array("rfc"=>$_POST["NuevoRFC_R"],
							"empresa" => $_POST["nuevoEmpresa_R"],
							"correo" => $_POST["nuevo_Corrreo_R"],
							"calle"=>$_POST["nuevoCalle_R"],
						    "ext"=>$_POST["nuevoExterior_R"],
						    "intt"=>$_POST["nuevoInterior_R"],
						    "colonia"=>$_POST["nuevoColonia_R"],
						    "ciudad"=>$_POST["nuevoCiudad_R"],
						    "estado"=>$_POST["nuevoEstado_R"],
						    "codigo"=>$_POST["nuevoPostal_R"],
						    "tel1"=>$_POST["nuevoNumero1_R"],
							"tel2" => $_POST["nuevoNumero2_R"]);

			$respuesta = ModeloClientes::mdlAgregarNuevoDomicilioRFC($tabla, $datos);

		 echo json_encode($respuesta);
			
			

	}

	/*=============================================
	AGREGAR UN NUEVO DOMICILIO-RFC FACTURA-FISICA-OTRA
	=============================================*/	
	public function AgregarRfcFisicaOtra(){

			$tabla = "clientes";

			$datos =  array("rfc"=>$_POST["nuevoRFC_F"],
							"nombre" => $_POST["nuevoNombre_F"],
							"app" => $_POST["nuevoApellidoP_F"],
							"apm" => $_POST["nuevoApellidoM_F"],
							"correo" => $_POST["nuevo_Corrreo_F"],
							"calle"=>$_POST["nuevoCalle_F"],
						    "ext"=>$_POST["nuevoExterior_F"],
						    "intt"=>$_POST["nuevoInterior_F"],
						    "colonia"=>$_POST["nuevoColonia_F"],
						    "ciudad"=>$_POST["nuevoCiudad_F"],
						    "estado"=>$_POST["nuevoEstado_F"],
						    "codigo"=>$_POST["nuevoPostal_F"],
						    "tel1"=>$_POST["nuevoNumero1_F"],
							"tel2" => $_POST["nuevoNumero2_F"]);

			$respuesta = ModeloClientes::mdlAgregarClienteFisicaOtro($tabla, $datos);
			$tabla2 ="direccion_fiscal";

			$result = ModeloClientes::mdlAgregarDomicilioFisicaOtra($tabla2, $datos,$respuesta);

		 echo json_encode($result);
			
			

	}

	

	/*=============================================
	EDITAR UN NUEVO DOMICILIO-RFC FACTURA
	=============================================*/	
	public function AgregarEditarRrcMoral(){

			$tabla = "rfc_direccion_moral";

			$datos =  array("rfc"=>$_POST["EditarRFC_R"],
							"id" => $_POST["id_rfc_editar"],
							"empresa" => $_POST["editarEmpresa_R"],
							"correo" => $_POST["editarCorreo_R"],
							"calle"=>$_POST["editarCalle_R"],
						    "ext"=>$_POST["editarExterior_R"],
						    "intt"=>$_POST["editarInterior_R"],
						    "colonia"=>$_POST["editarColonia_R"],
						    "ciudad"=>$_POST["editarCiudad_R"],
						    "estado"=>$_POST["editarEstado_R"],
						    "codigo"=>$_POST["editarPostal_R"],
						    "tel1"=>$_POST["editarNumero1_R"],
							"tel2" => $_POST["editarNumero2_R"]);

			$respuesta = ModeloClientes::mdlEditarDomicilioRFC($tabla, $datos);

			 echo json_encode($respuesta);
			
			

	}

	/*=============================================
	EDITAR UN NUEVO DOMICILIO-RFC OTRO
	=============================================*/	
	public function EditarRrcOtra(){

			$tabla = "clientes";
			$tabla2 = "direccion_fiscal";

			$datos =  array("rfc"=>$_POST["editarRFC_F"],
							"id" => $_POST["editar_id_rfc"],
							"nombre" => $_POST["editarNombre_F"],
							"app" => $_POST["editarApellidoP_F"],
							"apm" => $_POST["editarApellidoM_F"],
							"correo" => $_POST["editar_Corrreo_F"],
							"calle"=>$_POST["editarCalle_F"],
						    "ext"=>$_POST["editarExterior_F"],
						    "intt"=>$_POST["editarInterior_F"],
						    "colonia"=>$_POST["editarColonia_F"],
						    "ciudad"=>$_POST["editarCiudad_F"],
						    "estado"=>$_POST["editarEstado_F"],
						    "codigo"=>$_POST["editarPostal_F"],
						    "tel1"=>$_POST["editarNumero1_F"],
							"tel2" => $_POST["editarNumero2_F"]);
			
			if($_POST["dom_regis"] == "SI"){

				$respuesta = ModeloClientes::mdlEditarOtraDirec($tabla, $tabla2, $datos);
			}else if($_POST["dom_regis"] == "NO"){
				
				$respuesta = ModeloClientes::mdlAgregarOtraDirec($tabla, $tabla2, $datos);
			}


		 echo json_encode($respuesta);
			
			

	}

	/*=============================================
	EDITAR UN NUEVO DOMICILIO-RFC OTRO
	=============================================*/	
	public function EditarRrcFiscal(){

			$tabla = "clientes";
			$tabla2 = "direccion_fiscal";

			$datos =  array("rfc"=>$_POST["editarRFC_Y"],
							"id" => $_POST["editar_id_rfc_Y"],
							"nombre" => $_POST["editarNombre_Y"],
							"app" => $_POST["editarApellidoP_Y"],
							"apm" => $_POST["editarApellidoM_Y"],
							"correo" => $_POST["editar_Corrreo_Y"],
							"calle"=>$_POST["editarCalle_Y"],
						    "ext"=>$_POST["editarExterior_Y"],
						    "intt"=>$_POST["editarInterior_Y"],
						    "colonia"=>$_POST["editarColonia_Y"],
						    "ciudad"=>$_POST["editarCiudad_Y"],
						    "estado"=>$_POST["editarEstado_Y"],
						    "codigo"=>$_POST["editarPostal_Y"],
						    "tel1"=>$_POST["editarNumero1_Y"],
							"tel2" => $_POST["editarNumero2_Y"]);
			
			if($_POST["dom_regis_Y"] == "SI"){

				$respuesta = ModeloClientes::mdlEditarOtraDirec($tabla, $tabla2, $datos);
			}else if($_POST["dom_regis_Y"] == "NO"){

				$respuesta = ModeloClientes::mdlAgregarOtraDirec($tabla, $tabla2, $datos);

			}


		 echo json_encode($respuesta);
			
			

	}

	/*=============================================
	EDITAR UN NUEVO DOMICILIO-PERSONAL
	=============================================*/	
	public function EditarRrcPersonal(){

			$tabla = "clientes";
			$tabla2 = "direccion_particular";

			$datos =  array("rfc"=>$_POST["nuevoRFC_P"],
							"id" => $_POST["id_rfc_personal"],
							"nombre" => $_POST["nuevoNombre_P"],
							"app" => $_POST["nuevoApellidoP_P"],
							"apm" => $_POST["nuevoApellidoM_P"],
							"correo" => $_POST["nuevo_Corrreo_P"],
							"calle"=>$_POST["nuevoCalle_P"],
						    "ext"=>$_POST["nuevoExterior_P"],
						    "intt"=>$_POST["nuevoInterior_P"],
						    "colonia"=>$_POST["nuevoColonia_P"],
						    "ciudad"=>$_POST["nuevoCiudad_P"],
						    "estado"=>$_POST["nuevoEstado_P"],
						    "codigo"=>$_POST["nuevoPostal_P"],
						    "tel1"=>$_POST["nuevoNumero1_P"],
							"tel2" => $_POST["nuevoNumero2_P"]);
			
			if($_POST["dom_regis_P"] == "SI"){

				$respuesta = ModeloClientes::mdlEditarOtraDirec($tabla, $tabla2, $datos);

			}else if($_POST["dom_regis_P"] == "NO"){

				$respuesta = ModeloClientes::mdlAgregarOtraDirec($tabla, $tabla2, $datos);
			}


		 echo json_encode($respuesta);
			
			

	}


	
	/*=============================================
	OBTENER DIRECCIONES DE FACTURAS MORAL
	=============================================*/	

	public $rfc_moral_2;

	public function ObtenerDirecccionRfc(){

		$item = "rfc";
		$valor = $this->rfc_moral_2;

		$respuesta = ControladorClientes::ctrEditarDomiRfc_moral($item, $valor);
		
		echo json_encode($respuesta);

	}

	/*=============================================
	OBTENER EDITAR DE FACTURAS MORAL
	=============================================*/	

	public $editar_rfc_moral;
	public $editar_id_moral;

	public function ObtenerDirecccionRfcEditarMoral(){

		$item = "rfc";
		$valor = $this->editar_rfc_moral;
		$id = $this->editar_id_moral;

		$respuesta = ControladorClientes::ctrEditarDomiRfc($item, $valor,$id);
		 // $respuesta = "CHI";

		echo json_encode($respuesta);

	}

	


	/*=============================================
	OBTENER DIRECCIONES DE FACTURAS POR ID
	=============================================*/	

	public $id_rfc;

	public function ObtenerDirecccionRfc_id(){

		$item = "id";
		$valor = $this->id_rfc;

		$respuesta = ControladorClientes::ctrMostrarDomiRfc($item, $valor);
		 // $respuesta = "CHI";

		echo json_encode($respuesta);

	}
	/*=============================================
	OBTENER DIRECCIONES FISCALES
	=============================================*/	

	public $id_clienteF;

	public function ObtenerDirecccionRfc_id_fiscales(){

		$item = "id_clientes";
		$valor = $this->id_clienteF;

		$respuesta = ControladorClientes::ctrMostrarDomiRfcFiscal($item, $valor);
		 // $respuesta = "CHI";

		echo json_encode($respuesta);

	}
	/*=============================================
	OBTENER DIRECCIONES PERSONALES
	=============================================*/	

	public $id_clienteP;

	public function ObtenerDirecccionRfc_id_personales(){

		$item = "id_clientes";
		$valor = $this->id_clienteP;

		$respuesta = ControladorClientes::ctrMostrarDomiRfCPersonal($item, $valor);
		 // $respuesta = "CHI";

		echo json_encode($respuesta);

	}

	/*=============================================
	OBTENER DIRECCIONES DE FACTURAS FISICAL
	=============================================*/	

	public $rfc_fisica;

	public function ObtenerDirecccionRfc_fisica(){

		$item = "rfc";
		$valor = $this->rfc_fisica;

		$respuesta = ControladorClientes::ctrMostrarDomiRfcFisica($item, $valor);
		 // $respuesta = "CHI";

		echo json_encode($respuesta);

	}

	
	/*=============================================
	OBTENER ESTADOS
	=============================================*/	
	public function ObtenerEstados(){

		$item = null;
		$valor = null;

		$respuesta = ControladorPlantilla::ctrMostrarEstados($item, $valor);

		echo json_encode($respuesta);

	}

	/*=============================================
	OBTENER ESTADOS
	=============================================*/	
	public function ObtenerAutosDisponibles(){

		

		$respuesta = ControladorAutos::ctrMostrarAutosDisponibles();

		echo json_encode($respuesta);

	}

	
	/*=============================================
	VALIDAR RFC FACTURAS-DOMICILIO
	=============================================*/	
	public $ValidarRfc_Fac;

	public function ajaxValidarRFC_Facturas(){

		$item = "rfc";
		$valor = $this->ValidarRfc_Fac;

		$respuesta = ControladorClientes::ctrMostrarDomiRfc($item, $valor);

		echo json_encode($respuesta);

	}


	/*=============================================
	VALIDAR RFC CLIENTE
	=============================================*/	
	public $ValidarRfc_Cliente;

	public function ajaxValidarRFC_Clientes(){

		$item = "rfc";
		$valor = $this->ValidarRfc_Cliente;

		$respuesta = ControladorClientes::ctrMostrarClientes($item, $valor);

		echo json_encode($respuesta);

	}

	public function Registrar_Pago(){

			
	  	$respuesta = ControladorRentas::ctrAgregarPago();

     	echo json_encode($respuesta);
		

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["Obtener_clientes"])){

	$clientes = new AjaxClientes();
	$clientes -> Obtener_clientes = $_POST["Obtener_clientes"];
	$clientes -> ajaxObtenerClientes();
}
// OBTENER DOMICILIOS
if(isset($_POST["id_cliente"])){

	$clientes = new AjaxClientes();
	$clientes -> id_cliente = $_POST["id_cliente"];
	$clientes -> ajaxObtenerDomicilios();
}

if(isset($_POST["nuevoNombre_C"])){

	$nuevoC = new AjaxClientes();
	$nuevoC -> AgregarNuevoCliente();
}


// OBTENER DIRECCION POR RFC

if(isset($_POST["rfc_moral_2"])){
 	

	$RFC = new AjaxClientes();
	$RFC -> rfc_moral_2 = $_POST["rfc_moral_2"];
	$RFC -> ObtenerDirecccionRfc();
}

// OBTENER ESTADOS
if(isset($_POST["ESTADOS"])){

	$estados = new AjaxClientes();
	$estados -> ObtenerEstados();
}

// OBTENER AUTOS DISPONOBLES
if(isset($_POST["AUTOS_DISP"])){

	$autos = new AjaxClientes();
	$autos -> ObtenerAutosDisponibles();
}

// VALIDAR RFC-DOMICILIO-FACTURAS

if(isset( $_POST["ValidarRfc_Fac"])){

	$rfc = new AjaxClientes();
	$rfc -> ValidarRfc_Fac = $_POST["ValidarRfc_Fac"];
	$rfc -> ajaxValidarRFC_Facturas();

}

// VALIDAR RFC-CLIENTES

if(isset( $_POST["ValidarRfc_ClienteE"])){

	$rfc_C = new AjaxClientes();
	$rfc_C -> ValidarRfc_Cliente = $_POST["ValidarRfc_ClienteE"];
	$rfc_C -> ajaxValidarRFC_Clientes();

}
//AGREGAR DOMICILIO-FACTURA RFC
if(isset($_POST["NuevoRFC_R"])){

	$nuevoR = new AjaxClientes();
	$nuevoR -> AgregarNuevoRFCFACDomicilio();
}

//EDITAR DOMICILIO-FACTURA RFC
if(isset($_POST["EditarRFC_R"])){

	$nuevoR = new AjaxClientes();
	$nuevoR -> AgregarEditarRrcMoral();
}

// EDITAR DOMICILIO-FACTURA RFC
//AGREGAR DOMICILIO-FACTURA RFC
if(isset($_POST["chec_editar"])){

	$nuevoR = new AjaxClientes();
	$nuevoR -> EditarRFCFACDomicilio();
}

// OBTENER DIRECCION POR RFC

if(isset($_POST["id_rfc"])){

	$RFC = new AjaxClientes();
	$RFC -> id_rfc = $_POST["id_rfc"];
	$RFC -> ObtenerDirecccionRfc_id();
}
//VALIDAR RFC MORAL EDITAR
if(isset( $_POST["ValidarRfcEditarMoral"])){

	$editarRFC = new AjaxClientes();
	$editarRFC -> editar_rfc_moral = $_POST["ValidarRfcEditarMoral"];
	$editarRFC -> editar_id_moral = $_POST["ValMoral"];
	$editarRFC -> ObtenerDirecccionRfcEditarMoral();

}

//AGREGAR DOMICILIO-FACTURA RFC-FISICA-OTRA
if(isset($_POST["nuevoNombre_F"])){

	$nuevoR = new AjaxClientes();
	$nuevoR -> AgregarRfcFisicaOtra();
}

//AGREGAR DOMICILIO-FACTURA RFC-FISICA-MISMO RFC
if(isset($_POST["editarRFC_Y"])){

	$nuevoR = new AjaxClientes();
	$nuevoR -> EditarRrcFiscal();
}

//EDITAR DOMICILIO-FACTURA RFC-FISICA-OTRA
if(isset($_POST["editarRFC_F"])){

	$EditarF = new AjaxClientes();
	$EditarF -> EditarRrcOtra();
}

//EDITAR DOMICILIO-PERSONAL
if(isset($_POST["nuevoRFC_P"])){

	$EditarP = new AjaxClientes();
	$EditarP -> EditarRrcPersonal();
}

// OBTENER DATOS DE CLIENTE-FISICO-OTRO

if(isset($_POST["rfc_fisica"])){

	$RFC = new AjaxClientes();
	$RFC -> rfc_fisica = $_POST["rfc_fisica"];
	$RFC -> ObtenerDirecccionRfc_fisica();
}



// OBTENER DATOS DE CLIENTE-FISICO-OTRO

if(isset($_POST["id_clienteF"])){

	$RFC = new AjaxClientes();
	$RFC -> id_clienteF = $_POST["id_clienteF"];
	$RFC -> ObtenerDirecccionRfc_id_fiscales();
}

// OBTENER DATOS DE CLIENTE-FISICO-OTRO

if(isset($_POST["id_clienteP"])){

	$RFC = new AjaxClientes();
	$RFC -> id_clienteP = $_POST["id_clienteP"];
	$RFC -> ObtenerDirecccionRfc_id_personales();
}

if(isset($_POST["Pagos"])){

	$renta = new AjaxClientes();
	$renta -> Registrar_Pago();
}

