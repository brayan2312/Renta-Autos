<?php 
require_once "../modelos/rentas.modelo.php";

require_once "../controladores/clientes.controlador.php";
require_once "../modelos/clientes.modelo.php";

require_once "../controladores/rentas.controlador.php";
require_once "../modelos/rentas.modelo.php";

class AjaxRentas{

	public function Registrar_Renta(){
	 	
	  $respuesta = ControladorRentas::ctrAgregarRentaAuto();
      echo json_encode($respuesta);

	}

	// OBTENER SERVICIOS ADICIONALES

	public function ajaxObtenerServiciosA(){

      $item = null;
      $valor = null;
      $tabla = "servicios_adicionales";

      $respuesta = ModeloRentas::mdlMostrarServiciosA($tabla,$item, $valor);

      echo json_encode($tabla);
    

  }
  public $nombreServicios;
  public function ajaxObtenerServicios2(){

     
      $item = "servicio";
      $valor = $this->nombreServicios;

      
      $tabla = "servicios_adicionales";
      
      $respuesta = ModeloRentas::mdlMostrarServiciosA($tabla,$item, $valor);

      echo json_encode($respuesta);
    

  }

  /*=============================================
	OBTENER TIPO DE PRECIO DE TENTA
	=============================================*/	

	public $id_auto_tipo;
	public $Tipo;

	public function ObtenerTipoPrecio(){

		
	 $valor = $this->Tipo;
	 $id = $this->id_auto_tipo;
	 $tabla = "precios";

	$respuesta = ModeloClientes::mdlObtenerPrecioDias($tabla,$valor,$id);
	

	 echo json_encode($respuesta);

	}

	public function ObtenerRentas(){

	 	$id = $_POST["id_renta"];
	

		$respuesta = ModeloRentas::mdlMostrarRentaT($id);
	

	 	echo json_encode($respuesta);

	}

	public function ObtenerModelo(){

	 	$id = $_POST["id_auto"];
	

		$respuesta = ModeloRentas::mdlMostrarModelo($id);
	

	 	echo json_encode($respuesta);

	}

	public function ObtenerContrato(){

	 	$folio = $_POST["folio"];
	

		$respuesta = ModeloRentas::mdlMostrarContrato($folio);
	
	 	// $respuesta = "CHI";
	 	echo json_encode($respuesta);

	}

	public function ObtenerPagos(){

	 	$id_renta = $_POST["id_renta_pagos"];
	

		$respuesta = ModeloRentas::mdlMostrarPagos($id_renta);
	
	 	// $respuesta = "CHI";
	 	echo json_encode($respuesta);

	}

	

	

}

//REGISTRAR RENTA DE AUTO
if(isset($_POST["num_dias"])){

	$renta = new AjaxRentas();
	$renta -> Registrar_Renta();
}


if(isset($_POST["nombreServicios"])){

  $traerProductos = new AjaxRentas();
  $traerProductos -> nombreServicios = $_POST["nombreServicios"];
  $traerProductos -> ajaxObtenerServicios2();

}

//OBTENER PRECIO DE DIAS
if(isset($_POST["id_auto_tipo"])){

	$ObtenerTipo = new AjaxRentas();
	$ObtenerTipo -> id_auto_tipo = $_POST["id_auto_tipo"];
	$ObtenerTipo -> Tipo = $_POST["Tipo"];
	$ObtenerTipo -> ObtenerTipoPrecio();
}



if(isset($_POST["id_renta"])){

	$Renta = new AjaxRentas();
	$Renta -> ObtenerRentas();
}

if(isset($_POST["id_auto"])){

	$Renta = new AjaxRentas();
	$Renta -> ObtenerModelo();
}

if(isset($_POST["folio"])){

	$Renta = new AjaxRentas();
	$Renta -> ObtenerContrato();
}

if(isset($_POST["id_renta_pagos"])){

	$Renta = new AjaxRentas();
	$Renta -> ObtenerPagos();
}

