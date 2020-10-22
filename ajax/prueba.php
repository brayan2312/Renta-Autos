<?php 
require_once "../controladores/autos.controlador.php";
require_once "../modelos/autos.modelo.php";
require_once "../controladores/rentas.controlador.php";
require_once "../modelos/rentas.modelo.php";



class AjaxServicios{

	// OBTENER SERVICIOS ADICIONALES

	public function ajaxServiciosA_2(){

      $item = null;
      $valor = null;
      $tabla = "servicios_adicionales";

      $respuesta = ModeloRentas::mdlMostrarServiciosA($tabla,$item, $valor);

      echo json_encode($respuesta);
    

 }

 //EDITAR AUTOS
	public function ajaxEditarAutos(){
		
	 $respuesta3 = ControladorAutos::ctrEditarAutos();
	$test2 = intVal($respuesta3);
	
	echo json_encode($test2);
		   
    }

    public function Actualizar_Pago(){

			
	  	$respuesta = ControladorRentas::ctrActualizarPago();

     	echo json_encode($respuesta);
		

	}

}

//OBTENER SERVICIOS
if(isset($_POST["Servicios_a"])){

	$rentass = new AjaxServicios();
	$rentass -> ajaxServiciosA_2();
}


 //EDITAR AUTO
if(isset($_POST["editarMarca"])){

	$AUTOS = new AjaxServicios();
	$AUTOS -> ajaxEditarAutos();

}

if(isset($_POST["Abonos"])){

	$renta = new AjaxServicios();
	$renta -> Actualizar_Pago();
}
