<?php 
class ControladorRentas{

	/*=============================================
	MOSTRAR RENTAS
	=============================================*/

	static public function ctrMostrarRentas($item, $valor){

		$tabla = "renta_autos";

		$respuesta = ModeloRentas::mdlMostrarServiciosA($tabla, $item, $valor);

		return $respuesta;
	
	}
	/*=============================================
	MOSTRA RENTA
	=============================================*/

	static public function ctrAgregarRentaAuto(){
	//.................................................estatus_auto
	// $ChecarRenta = ModeloRentas::mdlChecarAuto("estatus_auto",$_POST["id_auto"]);
		$tabla = "renta_autos";

		$contratos = ModeloRentas::mdlMostrarContratos($tabla);

		$folio = 0;
		if(!$contratos){
			$folio = 1;
		 }else{
		 	$folio = intval($contratos["num_contrato"])+ 1;
		 }
		$ser = 1;
		$servicios = $_POST["Servicios_Adicionales"];
		if($servicios == "" || $servicios == null || $servicios == "[]" ){
			$ser = 0;

		} 
		$por = 0;
		$precioH = 0;

		if(isset($_POST["Por"]) && isset($_POST["input_precio"])){
			$por = $_POST["Por"];
			$precioH = $_POST["input_precio"];
		}
		$tabla2 ="factura_renta";

		if($_POST["nuevoFactura"] == 1){


			$datos = array("id" => $_POST["id_user"],
					   "dias" => $_POST["num_dias"],
					   "folio" => $folio,
					   "horas" => $_POST["num_horas"],
					   "fecha_regreso" => $_POST["fecha_regreso"],
					   "hora_regreso" => $_POST["hora_regreso"],
					   "fecha_salida" => $_POST["fecha_salida"],
					   "hora_salida" => $_POST["hora_salida"],
					   "hora_extra" => $_POST["DiaE"],
					   "id_auto" => $_POST["id_auto"],
					   "monto" => $_POST["input_monto"],
					   "plus" => $_POST["input_plus"],
					   "factura" => $_POST["nuevoFactura"],
					   "iva" => $_POST["radio_iva"],
					   "check" => $_POST["che"],
					   "domicilio" => $_POST["direccion_particular"],
					   "tipo_factura" => $_POST["nuevoTipoFac"],
					   "cobrar" => $_POST["Cobrar"],
					   "cobrar_por" => $por,
					   "precio" => $precioH,
					   "total_horas" => $_POST["TotalHoras"],
					   "datos_factura" => $_POST["direccion_fiscal"]);

			$respuesta = ModeloRentas::mdlCrearRentaFactura($tabla, $datos,$tabla2);
			
			$res = ModeloRentas::mdlObtenerIdRenta($tabla,$_POST["id_auto"],$_POST["fecha_salida"]);
			
			if($ser==1){
				$tabla_ser = "renta_servicios_adicionales";
				$id_renta = $res["id_renta"];
				$serVi = ModeloRentas::mdlAgregarServiciosA($tabla_ser,$id_renta,$servicios,$_POST["TotalServi"]);

			}
			$tablaStatus = "estatus_auto";
			$desactivar = ModeloRentas::mdlDesactivarAutoRentado($tablaStatus,$_POST["id_auto"]);
			return $res["id_renta"];
			

		}else{

			$datos = array("id" => $_POST["id_user"],
					   "dias" => $_POST["num_dias"],
					   "folio" => $folio,
					   "horas" => $_POST["num_horas"],
					   "fecha_regreso" => $_POST["fecha_regreso"],
					   "hora_regreso" => $_POST["hora_regreso"],
					   "fecha_salida" => $_POST["fecha_salida"],
					   "hora_salida" => $_POST["hora_salida"],
					   "hora_extra" => $_POST["DiaE"],
					   "id_auto" => $_POST["id_auto"],
					   "monto" => $_POST["input_monto"],
					   "plus" => $_POST["input_plus"],
					   "factura" => $_POST["nuevoFactura"],
					   "iva" => $_POST["radio_iva"],
					   "check" => $_POST["che"],
					   "domicilio" => $_POST["direccion_particular"],
					   "cobrar" => $_POST["Cobrar"],
					   "cobrar_por" => $por,
					   "precio" => $precioH,
					   "total_horas" => $_POST["TotalHoras"]);
			$respuesta = ModeloRentas::mdlCrearRentaSinFactura($tabla, $datos);

			$res = ModeloRentas::mdlObtenerIdRenta($tabla,$_POST["id_auto"],$_POST["fecha_salida"]);

			if($ser==1){
				$tabla_ser = "renta_servicios_adicionales";
				$id_renta = $res["id_renta"];
				$serVi = ModeloRentas::mdlAgregarServiciosA($tabla_ser,$id_renta,$servicios,$_POST["TotalServi"]);

			}
			$tablaStatus = "estatus_auto";
			$desactivar = ModeloRentas::mdlDesactivarAutoRentado($tablaStatus,$_POST["id_auto"]);
			return $res["id_renta"];

			
	
		}
		

	//.................................................	
	}

	static public function ctrAgregarPago(){
		
		if(isset($_POST["Pagos"])){
			$tabla = "pagos_renta";
			$datos = array("id_renta" => $_POST["id_renta"],
					   "total" => $_POST["Total"],
					   "pagos" => $_POST["Pagos"]);
			
	  		$respuesta = ModeloRentas::mdlAgregarPago($tabla,$datos);

     		 return $respuesta;
		}

	}

	static public function ctrActualizarPago(){
		
		if(isset($_POST["Abonos"])){
			$tabla = "pagos_renta";
			$datos = array("id_renta" => $_POST["id_renta"],
					   "pagos" => $_POST["Abonos"]);
			
	  		$respuesta = ModeloRentas::mdlActualizarPago($tabla,$datos);

     		 return $respuesta;
		}

	}
}
 ?>
