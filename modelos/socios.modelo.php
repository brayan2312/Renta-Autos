<?php 
require_once "conexion.php";

class ModeloSocios{

	/*=============================================
	MOSTRAR SOCIOS
	=============================================*/

	static public function mdlMostrarSocios($tabla, $item, $valor){

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
	MOSTRAR SOCIOS RFC EDITAR
	=============================================*/

	static public function mdlMostrarSociosRFC($tabla, $item, $valor,$id){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND id != :id");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> bindParam(":id", $id, PDO::PARAM_STR);

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
	MOSTRAR SOCIOS
	=============================================*/

	static public function mdlMostrarMarcas($tabla, $item, $valor){

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

	/*=============================================
	CREAR SOCIO
	=============================================*/

	static public function mdlCrearSocio($tabla, $datos){


		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(folio, nombres, apellido_p, apellido_m,identificacion, num_identificacion, genero, nacimiento, rfc, calle, num_ext, num_int, colonia, ciudad_municipio, id_estado, codigo_postal, tel_1, tel_2, correo, tipo_socio, banco, cuenta_ban, clave_inte,foto)VALUES(:folio,:nombre,:app,:apm,:identificacion,:num_ine,:sexo,:fecha,:rfc,:calle,:exterior,:interior,:colonia,:ciudad,:estado,:postal,:tel1,:tel2,:correo,:tipo,:banco,:cuenta,:inter,:foto)");

		$stmt->bindParam(":folio", $datos["folio"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":app", $datos["app"], PDO::PARAM_STR);
		$stmt->bindParam(":apm", $datos["apm"], PDO::PARAM_STR);
		$stmt->bindParam(":identificacion",$datos["ine"], PDO::PARAM_STR);
		$stmt->bindParam(":num_ine",$datos["num_ine"], PDO::PARAM_STR);
		$stmt->bindParam(":sexo", $datos["sexo"], PDO::PARAM_INT);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
		$stmt->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
		$stmt->bindParam(":exterior", $datos["exterior"], PDO::PARAM_INT);
		$stmt->bindParam(":interior", $datos["interior"], PDO::PARAM_INT);
		$stmt->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":postal", $datos["postal"], PDO::PARAM_INT);
		$stmt->bindParam(":tel1", $datos["tel1"], PDO::PARAM_STR);
		$stmt->bindParam(":tel2", $datos["tel2"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":banco", $datos["banco"], PDO::PARAM_STR);
		$stmt->bindParam(":cuenta", $datos["cuenta"], PDO::PARAM_STR);
		$stmt->bindParam(":inter", $datos["inter"], PDO::PARAM_STR);
		$stmt->bindParam(":foto", $datos["correo"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	CONFIRMAS DATOS
	=============================================*/

	static public function mdlCambiarEstado($tabla, $datos){
		 $con = 1;


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET confirmar = :confirmar WHERE id = :id");

		$stmt -> bindParam(":confirmar", $con, PDO::PARAM_STR);
		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	ELIMINAR SOCIO
	=============================================*/

	static public function mdlEliminarSocio($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	ACTUALIZAR DATOS DEL SOCIO
	=============================================*/

	static public function mdlActualizarDatos($tabla, $datos){
		 


		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombres = :nombre, apellido_p = :app, apellido_m = :apm, identificacion = :identificacion, num_identificacion = :num_ine, genero = :sexo, nacimiento = :fecha, rfc = :rfc, calle = :calle, num_ext = :exterior, num_int = :interior, colonia = :colonia, ciudad_municipio = :ciudad, id_estado = :estado, codigo_postal = :postal, tel_1 = :tel1, tel_2 = :tel2, correo = :correo, tipo_socio = :tipo,banco = :banco, cuenta_ban = :cuenta, clave_inte = :inter  WHERE id = :id");


		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":app", $datos["app"], PDO::PARAM_STR);
		$stmt->bindParam(":apm", $datos["apm"], PDO::PARAM_STR);
		$stmt->bindParam(":identificacion",$datos["ine"], PDO::PARAM_STR);
		$stmt->bindParam(":num_ine",$datos["num_ine"], PDO::PARAM_STR);
		$stmt->bindParam(":sexo", $datos["sexo"], PDO::PARAM_INT);
		$stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
		$stmt->bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
		$stmt->bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
		$stmt->bindParam(":exterior", $datos["exterior"], PDO::PARAM_INT);
		$stmt->bindParam(":interior", $datos["interior"], PDO::PARAM_INT);
		$stmt->bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
		$stmt->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
		$stmt->bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
		$stmt->bindParam(":postal", $datos["postal"], PDO::PARAM_INT);
		$stmt->bindParam(":tel1", $datos["tel1"], PDO::PARAM_STR);
		$stmt->bindParam(":tel2", $datos["tel2"], PDO::PARAM_STR);
		$stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $datos["tipo"], PDO::PARAM_STR);
		$stmt->bindParam(":banco", $datos["banco"], PDO::PARAM_STR);
		$stmt->bindParam(":cuenta", $datos["cuenta"], PDO::PARAM_STR);
		$stmt->bindParam(":inter", $datos["inter"], PDO::PARAM_STR);

		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}



}

 ?>