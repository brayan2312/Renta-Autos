<?php 
require_once "conexion.php";
class ModeloSalida{

	static public function mdlMostrarSalida($tabla, $item, $valor){

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

	static public function mdlIngresarSalida($tabla,$datos){

		$stmt =  Conexion::conectar()->prepare("INSERT INTO salida (monto,razon,entregado_por)VALUES(:monto,:razon,:por)");

		$stmt -> bindParam(":monto",$datos["monto"],PDO::PARAM_STR);
		$stmt -> bindParam(":razon",$datos["razon"],PDO::PARAM_STR);
		$stmt -> bindParam(":por",$datos["provedor"],PDO::PARAM_STR);

		if($stmt->execute()){
			 return "ok";

		}

		$stmt -> close();
		$stmt = null;

	}

	static public function mdlEditarSalida($tabla,$datos){

		$stmt =  Conexion::conectar()->prepare("UPDATE $tabla SET monto= :monto, razon= :razon,entregado_por= :entrega WHERE id= :id");

		$stmt -> bindParam(":id",$datos["id"],PDO::PARAM_INT);
		$stmt -> bindParam(":monto",$datos["monto"],PDO::PARAM_STR);
		$stmt -> bindParam(":razon",$datos["razon"],PDO::PARAM_STR);
		$stmt -> bindParam(":entrega",$datos["provedor"],PDO::PARAM_STR);

		if($stmt->execute()){
			 return "ok";

		}

		$stmt -> close();
		$stmt = null;

	}

	static public function mdlEliminarSalida($tabla,$datos){

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


}


