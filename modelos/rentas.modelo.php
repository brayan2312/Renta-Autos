<?php 
require_once "conexion.php";

class ModeloRentas{

	/*=============================================
	MOSTRAR CONTRATOS
	=============================================*/

	static public function mdlMostrarContratos($tabla){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id_renta DESC");

			$stmt -> execute();

			return $stmt -> fetch();
			

		

	}

	/*=============================================
	CREAR RENTA CON FACTURA
	=============================================*/

	static public function mdlCrearRentaFactura($tabla, $datos, $tabla2){

		$id_vendedor = $_SESSION["id"];
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_vendedor,dias,num_contrato,horas, fecha_regreso, hora_regreso, fecha_salida,hora_salida,id_auto,monto,plus,iva,checking,factura,domicilio_particular,hora_extra,cobrar,cobrar_por,precio,
			total_horas)VALUES(:id_vendedor,:dias,:folio,:horas,:fecha_regreso,:hora_regreso,:fecha_salida,:hora_salida,:id_auto,:monto,
			:plus,:iva,:checking,:factura,:domicilio_particular,:hora_extra,:cobrar,:cobrar_por,:precio,:total_horas)");
		$stmt->bindParam(":id_vendedor",  $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":dias", $datos["dias"], PDO::PARAM_STR);
		$stmt->bindParam(":folio", $datos["folio"], PDO::PARAM_STR);
		$stmt->bindParam(":horas", $datos["horas"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_regreso", $datos["fecha_regreso"], PDO::PARAM_STR);
		$stmt->bindParam(":hora_regreso", $datos["hora_regreso"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_salida", $datos["fecha_salida"], PDO::PARAM_STR);

		$stmt->bindParam(":hora_salida", $datos["hora_salida"], PDO::PARAM_STR);
		$stmt->bindParam(":id_auto", $datos["id_auto"], PDO::PARAM_STR);
		$stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_STR);
		$stmt->bindParam(":plus", $datos["plus"], PDO::PARAM_STR);
		$stmt->bindParam(":iva", $datos["iva"], PDO::PARAM_STR);
		$stmt->bindParam(":checking", $datos["check"], PDO::PARAM_STR);
		$stmt->bindParam(":factura", $datos["factura"], PDO::PARAM_STR);
		$stmt->bindParam(":domicilio_particular", $datos["domicilio"], PDO::PARAM_STR);
		$stmt->bindParam(":hora_extra", $datos["hora_extra"], PDO::PARAM_STR);
		$stmt->bindParam(":cobrar", $datos["cobrar"], PDO::PARAM_STR);
		$stmt->bindParam(":cobrar_por", $datos["cobrar_por"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":total_horas", $datos["total_horas"], PDO::PARAM_STR);
		if($stmt->execute()){
			$stmt2 = Conexion::conectar()->prepare("SELECT MAX(id_renta) AS id_renta FROM $tabla");
			$stmt2 -> execute();
			$id_renta = $stmt2 -> fetch();
			$stmt3 = Conexion::conectar()->prepare("INSERT INTO $tabla2(id_renta, tipo_factura, datos_factura)VALUES
				(:id_renta,:tipo_factura,:datos_factura)");

			$stmt3->bindParam(":id_renta", $id_renta["id_renta"], PDO::PARAM_STR);
			$stmt3->bindParam(":tipo_factura", $datos["tipo_factura"], PDO::PARAM_STR);
			$stmt3->bindParam(":datos_factura", $datos["datos_factura"], PDO::PARAM_STR);
			if($stmt3->execute()){
				return "ok";
			}else{
				return "error en segun insercion";
			}
		}else{
			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
	/*=============================================
	CREAR RENTA
	=============================================*/

	static public function mdlCrearRentaSinFactura($tabla, $datos){

		
		
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_vendedor,dias, num_contrato, horas, fecha_regreso, hora_regreso, fecha_salida,hora_salida,id_auto,monto,plus,iva,checking,factura,domicilio_particular,hora_extra,cobrar,cobrar_por,precio,total_horas)VALUES(:id_vendedor,:dias,:folio,:horas,:fecha_regreso,:hora_regreso,:fecha_salida,:hora_salida,:id_auto,:monto,:plus,:iva,:checking,:factura,:domicilio_particular,:hora_extra,:cobrar,:cobrar_por,:precio,:total_horas)");

		$stmt->bindParam(":id_vendedor", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":dias", $datos["dias"], PDO::PARAM_STR);
		$stmt->bindParam(":folio", $datos["folio"], PDO::PARAM_STR);
		$stmt->bindParam(":horas", $datos["horas"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_regreso", $datos["fecha_regreso"], PDO::PARAM_STR);
		$stmt->bindParam(":hora_regreso", $datos["hora_regreso"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_salida", $datos["fecha_salida"], PDO::PARAM_STR);

		$stmt->bindParam(":hora_salida", $datos["hora_salida"], PDO::PARAM_STR);
		$stmt->bindParam(":id_auto", $datos["id_auto"], PDO::PARAM_STR);
		$stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_STR);
		$stmt->bindParam(":plus", $datos["plus"], PDO::PARAM_STR);
		$stmt->bindParam(":iva", $datos["iva"], PDO::PARAM_STR);
		$stmt->bindParam(":checking", $datos["check"], PDO::PARAM_STR);
		$stmt->bindParam(":factura", $datos["factura"], PDO::PARAM_STR);
		$stmt->bindParam(":domicilio_particular", $datos["domicilio"], PDO::PARAM_STR);
		$stmt->bindParam(":hora_extra", $datos["hora_extra"], PDO::PARAM_STR);
		$stmt->bindParam(":cobrar", $datos["cobrar"], PDO::PARAM_STR);
		$stmt->bindParam(":cobrar_por", $datos["cobrar_por"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":total_horas", $datos["total_horas"], PDO::PARAM_STR);



		if($stmt->execute()){

			return "ok";
			

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
	// 
	/*=============================================
	OBTENER SERVICIOS ADICIONALES
	=============================================*/

	static public function mdlMostrarServiciosA($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlMostrarRentaT($valor){

		$stmt = Conexion::conectar()->prepare("SELECT R.id_auto,R.dias,R.monto,R.plus,R.iva,R.factura,
			R.total_horas,R.domicilio_particular,S.servicios,S.total,F.tipo_factura,F.datos_factura
			 FROM renta_autos as R LEFT JOIN factura_renta as F ON R.id_renta = F.id_renta LEFT JOIN
			  renta_servicios_adicionales as S ON R.id_renta = S.id_renta WHERE R.id_renta = :id_renta");

			$stmt -> bindParam(":id_renta", $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
	}

	static public function mdlMostrarModelo($valor){

		$stmt = Conexion::conectar()->prepare("SELECT A.modelo,A.placas,A.color,A.id_marca,M.nombre FROM autos AS A INNER JOIN marcas AS M WHERE A.id = :id_auto AND M.id = A.id_marca");

			$stmt -> bindParam(":id_auto", $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
	}

	static public function mdlMostrarContrato($valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM renta_autos WHERE num_contrato = :folio");

			$stmt -> bindParam(":folio", $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
	}

	static public function mdlMostrarPagos($valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM pagos_renta WHERE id_renta = :id_renta");

			$stmt -> bindParam(":id_renta", $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
	}


	/*=============================================
	OBTENER SERVICIOS ADICIONALES
	=============================================*/

	static public function mdlObtenerIdRenta($tabla, $id_auto, $fecha){
		

		$stmt = Conexion::conectar()->prepare("SELECT id_renta FROM $tabla WHERE fecha_salida = :fecha AND id_auto = :id_auto");

		$stmt -> bindParam(":fecha", $fecha, PDO::PARAM_STR);
		$stmt -> bindParam(":id_auto", $id_auto, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();


	}

	/*=============================================
	AGREGA SERVICIOS ADICIONALES
	=============================================*/

	static public function mdlAgregarServiciosA($tabla,$id,$servicios,$total){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_renta, servicios, total)VALUES(:id_renta,:servicios,:total)");

		$stmt->bindParam(":id_renta", $id, PDO::PARAM_STR);
		$stmt->bindParam(":servicios", $servicios, PDO::PARAM_STR);
		$stmt->bindParam(":total", $total, PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";
			

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}
	/*=============================================
	DESACTIVAR AUTO A RENTADO
	=============================================*/

	static public function mdlDesactivarAutoRentado($tabla,$id_auto){
		
		$desac = 1;

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET rentado = :rentado WHERE id_auto= :id_auto");

		$stmt -> bindParam(":id_auto", $id_auto, PDO::PARAM_STR);
		$stmt -> bindParam(":rentado", $desac, PDO::PARAM_STR);
	
		$stmt -> execute();

		return $stmt -> fetch();


	}

	/*=============================================
	CHECAR SI ESTA RENTADO UN AUTO
	=============================================*/

	static public function mdlChecarAuto($tabla, $id_auto){
		

		$stmt = Conexion::conectar()->prepare("SELECT rentado FROM $tabla WHERE id_auto = :id_auto");
		$stmt -> bindParam(":id_auto", $id_auto, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();


	}

	/*=============================================
	AGREGA SERVICIOS ADICIONALES
	=============================================*/

	static public function mdlAgregarPago($tabla,$datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_renta, total, pagos)VALUES(:id_renta,:total,:pagos)");

		$stmt->bindParam(":id_renta", $datos["id_renta"], PDO::PARAM_STR);
		$stmt->bindParam(":total", $datos["total"], PDO::PARAM_STR);
		$stmt->bindParam(":pagos", $datos["pagos"], PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";
			

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	static public function mdlActualizarPago($tabla,$datos){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET pagos = :pagos WHERE id_renta= :id_renta");

		$stmt -> bindParam(":id_renta", $datos["id_renta"], PDO::PARAM_STR);
		$stmt -> bindParam(":pagos", $datos["pagos"], PDO::PARAM_STR);
	
		$stmt -> execute();




	}


}
 ?>
