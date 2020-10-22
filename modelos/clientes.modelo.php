<?php 
require_once "conexion.php";

class ModeloClientes{

	/*=============================================
	MOSTRAR CLIENTES mdlMostrarDomiRfc
	=============================================*/

	static public function mdlMostrarClientes($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR CLIENTES
	=============================================*/

	static public function mdlMostrarDomicilios($tabla, $item, $valor){

		

		

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR DOMICILIO FACTURAS 
	=============================================*/

	static public function mdlMostrarDomiRfc($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================

	MOSTRAR DOMICILIO EDITAR FACTURAS 

	=============================================*/

	static public function mdlMostrarEditarDomiRfc($tabla, $item, $valor,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND id != :id");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> bindParam(":id", $id, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
	}

	/*=============================================

	MOSTRAR DOMICILIO EDITAR FACTURAS 

	=============================================*/

	static public function mdlMostrarEditarDomiRfc2($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			

			$stmt -> execute();

			return $stmt -> fetch();
	}

	/*=============================================
	OBTENER PRECIO POR DIAS
	=============================================*/

	static public function mdlObtenerPrecioDias($tabla,$valor,$id){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE tipo = :tipo AND id_auto = :id_auto");

			$stmt -> bindParam(":tipo", $valor, PDO::PARAM_STR);
			$stmt -> bindParam(":id_auto", $id, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();
	}

	/*=============================================
	CREAR NUEVO CLIENTE
	=============================================*/

	static public function mdlCrearNuevoCliente($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, app, apm, correo, rfc)VALUES(:nombre,:app,:apm,:correo,:rfc)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":app", $datos["app"], PDO::PARAM_STR);
		$stmt->bindParam(":apm", $datos["apm"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);		

		if($stmt->execute()){

			$stmt2 = Conexion::conectar()->prepare("SELECT id FROM $tabla WHERE rfc = :rfc");

			$stmt2 -> bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);

			$stmt2 -> execute();

			return $stmt2 -> fetch();

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	CREAR NUEVO DOMICILIO CLIENTE
	=============================================*/

	static public function mdlAgregarNuevoDomicilio($tabla, $datos,$id){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_clientes, calle, num_int, num_ext, colonia, municipio, id_estado, codigo_postal, tel_1, tel_2)VALUES(:id,:calle,:intt,:ext,:colonia,:ciudad,:estado,:codigo,:tel1,:tel2)");

		$stmt->bindParam(":id", $id, PDO::PARAM_INT);
		$stmt->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
		$stmt->bindParam(":intt", $datos["intt"], PDO::PARAM_STR);
		$stmt->bindParam(":ext", $datos["ext"], PDO::PARAM_STR);		
		$stmt->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);		
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);		
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);		
		$stmt->bindParam(":tel1", $datos["tel1"], PDO::PARAM_STR);		
		$stmt->bindParam(":tel2", $datos["tel2"], PDO::PARAM_STR);		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	CREAR DOMICILIO RFC-FACTURA MORAL
	=============================================*/

	static public function mdlAgregarNuevoDomicilioRFC($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(rfc,nombre_empresa, correo, calle, num_int, num_ext, colonia, municipio, id_estado, codigo_postal, tel_1, tel_2)VALUES(:rfc,:empresa, :correo,:calle,:intt,:ext,:colonia,:ciudad,:estado,:codigo,:tel1,:tel2)");

		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
		$stmt->bindParam(":empresa", $datos["empresa"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
		$stmt->bindParam(":intt", $datos["intt"], PDO::PARAM_STR);
		$stmt->bindParam(":ext", $datos["ext"], PDO::PARAM_STR);		
		$stmt->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);		
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);		
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);		
		$stmt->bindParam(":tel1", $datos["tel1"], PDO::PARAM_STR);		
		$stmt->bindParam(":tel2", $datos["tel2"], PDO::PARAM_STR);		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	CREAR CLIENTE  FISICA OTRA
	=============================================*/

	static public function mdlAgregarClienteFisicaOtro($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, app, apm, correo, rfc)VALUES(:nombre,:app,:apm,:correo,:rfc)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":app", $datos["app"], PDO::PARAM_STR);
		$stmt->bindParam(":apm", $datos["apm"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);		

		if($stmt->execute()){

			$stmt2 = Conexion::conectar()->prepare("SELECT id FROM $tabla WHERE rfc = :rfc");

			$stmt2 -> bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);

			$stmt2 -> execute();

			return $stmt2 -> fetch();

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;


	}

	/*=============================================
	CREAR DOMICILIO RFC-FACTURA FISICA-OTRA
	=============================================*/

	static public function mdlAgregarDomicilioFisicaOtra($tabla, $datos,$id){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(	id_clientes, calle, num_int, num_ext, colonia, municipio, id_estado, codigo_postal, tel_1, tel_2)VALUES(:id_clientes,:calle,:intt,:ext,:colonia,:ciudad,:estado,:codigo,:tel1,:tel2)");

		
		$stmt->bindParam(":id_clientes",$id["id"], PDO::PARAM_STR);
		$stmt->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
		$stmt->bindParam(":intt", $datos["intt"], PDO::PARAM_STR);
		$stmt->bindParam(":ext", $datos["ext"], PDO::PARAM_STR);		
		$stmt->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);		
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);		
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);		
		$stmt->bindParam(":tel1", $datos["tel1"], PDO::PARAM_STR);		
		$stmt->bindParam(":tel2", $datos["tel2"], PDO::PARAM_STR);		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	EDITAR DOMICILIO RFC-FACTURA
	=============================================*/

	static public function mdlEditarDomicilioRFC($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre_empresa = :nombre_empresa, correo = :correo, calle = :calle, num_int = :intt, num_ext = :ext, colonia = :colonia, municipio = :ciudad, id_estado = :estado, codigo_postal = :codigo, tel_1 = :tel1, tel_2 = :tel2 WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre_empresa", $datos["empresa"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
		$stmt->bindParam(":intt", $datos["intt"], PDO::PARAM_STR);
		$stmt->bindParam(":ext", $datos["ext"], PDO::PARAM_STR);		
		$stmt->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);		
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);		
		$stmt->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);		
		$stmt->bindParam(":tel1", $datos["tel1"], PDO::PARAM_STR);		
		$stmt->bindParam(":tel2", $datos["tel2"], PDO::PARAM_STR);		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR ID RFC-FISICA
	=============================================*/

	static public function mdlMostrarDomiRfcFisica($tabla, $item, $valor){

	

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		

		

	}

	/*=============================================
	MOSTRAR DOMICILIO RFC-FISCAL
	=============================================*/

	static public function mdlMostrarDomiFiscal($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

	}

	/*=============================================
	MOSTRAR DOMICILIO RFC-PERSONAL
	=============================================*/

	static public function mdlMostrarDomiPersonal($tabla, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

	}


	/*=============================================
	EDITAR DOMICILIO RFC-FACTURA-OTRA
	=============================================*/

	static public function mdlEditarOtraDirec($tabla, $tabla2, $datos){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, app = :app, apm = :apm, correo = :correo, rfc = :rfc WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":app", $datos["app"], PDO::PARAM_STR);
		$stmt->bindParam(":apm", $datos["apm"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);			

		if($stmt->execute()){

			//******************************************************
			$stmt2 = Conexion::conectar()->prepare("UPDATE $tabla2 SET calle = :calle, num_int = :intt, num_ext = :ext, colonia = :colonia, municipio = :ciudad, id_estado = :estado, codigo_postal = :codigo, tel_1 = :tel1, tel_2 = :tel2 WHERE id_clientes = :id");

			$stmt2->bindParam(":id", $datos["id"], PDO::PARAM_STR);
			$stmt2->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
			$stmt2->bindParam(":intt", $datos["intt"], PDO::PARAM_STR);
			$stmt2->bindParam(":ext", $datos["ext"], PDO::PARAM_STR);	
			$stmt2->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
			$stmt2->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);		
			$stmt2->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);		
			$stmt2->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);		
			$stmt2->bindParam(":tel1", $datos["tel1"], PDO::PARAM_STR);		
			$stmt2->bindParam(":tel2", $datos["tel2"], PDO::PARAM_STR);		

			if($stmt2->execute()){

				return "ok";

			}else{

				return "error2";
			
			}
		//******************************************************

		}else{

			return $tabla;
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR-AGREGAR DOMICILIO PERSONAL
	=============================================*/

	static public function mdlAgregarOtraDirec($tabla, $tabla2, $datos){


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, app = :app, apm = :apm, correo = :correo, rfc = :rfc WHERE id = :id");

		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":app", $datos["app"], PDO::PARAM_STR);
		$stmt->bindParam(":apm", $datos["apm"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);			

		if($stmt->execute()){

			//******************************************************
			$stmt2 = Conexion::conectar()->prepare("INSERT INTO $tabla2(	id_clientes, calle, num_int, num_ext, colonia, municipio, id_estado, codigo_postal, tel_1, tel_2)VALUES(:id_clientes,:calle,:intt,:ext,:colonia,:ciudad,:estado,:codigo,:tel1,:tel2)");

			$stmt2->bindParam(":id_clientes", $datos["id"], PDO::PARAM_STR);
			$stmt2->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
			$stmt2->bindParam(":intt", $datos["intt"], PDO::PARAM_STR);
			$stmt2->bindParam(":ext", $datos["ext"], PDO::PARAM_STR);	
			$stmt2->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
			$stmt2->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);		
			$stmt2->bindParam(":estado", $datos["estado"], PDO::PARAM_INT);		
			$stmt2->bindParam(":codigo", $datos["codigo"], PDO::PARAM_STR);		
			$stmt2->bindParam(":tel1", $datos["tel1"], PDO::PARAM_STR);		
			$stmt2->bindParam(":tel2", $datos["tel2"], PDO::PARAM_STR);		

			if($stmt2->execute()){

				return "ok chi";

			}else{

				return "error2";
			
			}
		//******************************************************

		}else{

			return $tabla;
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	CREAR RENTA
	=============================================*/

	static public function dlCrearRentaFactura2($tabla, $datos, $tabla2){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(dias, horas, fecha_regreso, hora_regreso, fecha_salida,hora_salida,hora_extra,id_auto,monto,plus,iva,factura,domicilio_particular)VALUES(:dias,:horas,:fecha_regreso,:hora_regreso,:fecha_salida,:hora_salida,:hora_extra,:id_auto,:monto,:plus,:iva,:factura,:domicilio_particular)");

		$stmt->bindParam(":dias", $datos["dias"], PDO::PARAM_STR);
		$stmt->bindParam(":horas", $datos["horas"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_regreso", $datos["fecha_regreso"], PDO::PARAM_STR);
		$stmt->bindParam(":hora_regreso", $datos["hora_regreso"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_salida", $datos["fecha_salida"], PDO::PARAM_STR);

		$stmt->bindParam(":hora_salida", $datos["hora_salida"], PDO::PARAM_STR);
		$stmt->bindParam(":hora_extra", $datos["hora_extra"], PDO::PARAM_STR);
		$stmt->bindParam(":id_auto", $datos["id_auto"], PDO::PARAM_STR);
		$stmt->bindParam(":monto", $datos["monto"], PDO::PARAM_STR);
		$stmt->bindParam(":plus", $datos["plus"], PDO::PARAM_STR);
		$stmt->bindParam(":iva", $datos["iva"], PDO::PARAM_STR);
		$stmt->bindParam(":factura", $datos["factura"], PDO::PARAM_STR);
		$stmt->bindParam(":domicilio_particular", $datos["domicilio"], PDO::PARAM_STR);


		if($stmt->execute()){

			$stmt2 = Conexion::conectar()->prepare("SELECT MAX(id_renta) AS id_renta FROM $tabla");

			$stmt2 -> execute();

			$id_renta = $stmt2 -> fetch();

			$stmt3 = Conexion::conectar()->prepare("INSERT INTO $tabla2(id_renta, tipo_factura, datos_factura)VALUES(:id_renta,:tipo_factura,:datos_factura)");

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


} 

 ?>