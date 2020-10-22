<?php 
require_once "conexion.php";

class ModeloAutos{


	/*=============================================
	MOSTRAR AUTOS
	=============================================*/

	static public function mdlMostrarAutos($tabla, $item, $valor,$id){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_socio = $id ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	static public function mdlMostrarAutos2($tabla, $item, $valor){

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
	MOSTRAR PRECIOS
	=============================================*/

	static public function mdlMostrarPrecios($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	MOSTRAR NÚMERO DE AUTOS
	=============================================*/

	static public function mdlMostrarNumCoches($tabla, $item, $valor){

		

		$stmt = Conexion::conectar()->prepare("SELECT count(folio) FROM $tabla WHERE $item = :id");

		$stmt -> bindParam(":id", $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetch();

		

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	AGREGAR AUTO
	=============================================*/

	static public function mdlCrearAuto($tabla, $datos){

		date_default_timezone_set("America/Mexico_City");
        $hoy = date("Y-m-d");
		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (folio, id_socio, id_estado, id_marca, modelo,
		 temporada, color, placas, tipo_verificacion, vigencia_verificacion, medida_llantas, kilometraje,
		  ultimo_servicio, proximo_servicio, periodo_servicio, pasajeros, transmision, cilindros, vestiduras,
		   segunda_llave, ultima_tenencia, combustible,fecha)VALUES(:folio,:id_socio,:id_estado,:id_marca,:modelo,
		   :temporada,:color,:placas,:tipo_veri,:vigencia_veri,:llantas,:km,:ultimo,:proximo,:periodo,:pasajeros,
		    :transmision,:cilindros,:vestiduras,:llave,:tenencia,:combustible,:fecha)");

		$stmt->bindParam(":folio", $datos["folio"], PDO::PARAM_STR);
		$stmt->bindParam(":id_socio", $datos["id_socio"], PDO::PARAM_STR);
		$stmt->bindParam(":id_estado", $datos["id_estado"], PDO::PARAM_STR);
		$stmt->bindParam(":id_marca", $datos["id_marca"], PDO::PARAM_STR);
		$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$stmt->bindParam(":temporada", $datos["temporada"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
		$stmt->bindParam(":placas", $datos["placas"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_veri", $datos["tipo_veri"], PDO::PARAM_STR);
		$stmt->bindParam(":vigencia_veri", $datos["vigencia_veri"], PDO::PARAM_STR);
		$stmt->bindParam(":llantas", $datos["llantas"], PDO::PARAM_STR);
		$stmt->bindParam(":km", $datos["km"], PDO::PARAM_STR);
		$stmt->bindParam(":ultimo", $datos["ultimo"], PDO::PARAM_STR);
		$stmt->bindParam(":proximo", $datos["proximo"], PDO::PARAM_STR);
		$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_STR);
		$stmt->bindParam(":pasajeros", $datos["pasajeros"], PDO::PARAM_STR);
		$stmt->bindParam(":transmision", $datos["transmision"], PDO::PARAM_STR);
		$stmt->bindParam(":cilindros", $datos["cilindros"], PDO::PARAM_STR);
		$stmt->bindParam(":vestiduras", $datos["vestiduras"], PDO::PARAM_STR);
		$stmt->bindParam(":llave", $datos["llave"], PDO::PARAM_STR);
		$stmt->bindParam(":tenencia", $datos["tenencia"], PDO::PARAM_STR);
		$stmt->bindParam(":combustible", $datos["combustible"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha", $hoy, PDO::PARAM_STR);
	

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	EDITAR AUTO
	=============================================*/

	static public function mdlEditarAuto($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET id_estado = :id_estado, id_marca = :id_marca, modelo = :modelo, temporada = :temporada, color = :color, placas = :placas, tipo_verificacion = :tipo_veri, vigencia_verificacion = :vigencia_veri, medida_llantas = :llantas, kilometraje = :km, ultimo_servicio = :ultimo, proximo_servicio = :proximo, periodo_servicio = :periodo, pasajeros = :pasajeros, transmision = :transmision, cilindros = :cilindros, vestiduras = :vestiduras, segunda_llave = :llave, ultima_tenencia = :tenencia, combustible = :combustible WHERE id= :id");

		$stmt->bindParam(":id_estado", $datos["id_estado"], PDO::PARAM_STR);
		$stmt->bindParam(":id_marca", $datos["id_marca"], PDO::PARAM_STR);
		$stmt->bindParam(":modelo", $datos["modelo"], PDO::PARAM_STR);
		$stmt->bindParam(":temporada", $datos["temporada"], PDO::PARAM_STR);
		$stmt->bindParam(":color", $datos["color"], PDO::PARAM_STR);
		$stmt->bindParam(":placas", $datos["placas"], PDO::PARAM_STR);
		$stmt->bindParam(":tipo_veri", $datos["tipo_veri"], PDO::PARAM_STR);
		$stmt->bindParam(":vigencia_veri", $datos["vigencia_veri"], PDO::PARAM_STR);
		$stmt->bindParam(":llantas", $datos["llantas"], PDO::PARAM_STR);
		$stmt->bindParam(":km", $datos["km"], PDO::PARAM_STR);
		$stmt->bindParam(":ultimo", $datos["ultimo"], PDO::PARAM_STR);
		$stmt->bindParam(":proximo", $datos["proximo"], PDO::PARAM_STR);
		$stmt->bindParam(":periodo", $datos["periodo"], PDO::PARAM_STR);
		$stmt->bindParam(":pasajeros", $datos["pasajeros"], PDO::PARAM_STR);
		$stmt->bindParam(":transmision", $datos["transmision"], PDO::PARAM_STR);
		$stmt->bindParam(":cilindros", $datos["cilindros"], PDO::PARAM_STR);
		$stmt->bindParam(":vestiduras", $datos["vestiduras"], PDO::PARAM_STR);
		$stmt->bindParam(":llave", $datos["llave"], PDO::PARAM_STR);
		$stmt->bindParam(":tenencia", $datos["tenencia"], PDO::PARAM_STR);
		$stmt->bindParam(":combustible", $datos["combustible"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id_auto"], PDO::PARAM_INT);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	ELIMINAR AUTO
	=============================================*/

	static public function mdlEliminarAuto($tabla, $datos){

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
	ELIMINAR PRECIOS
	=============================================*/

	static public function mdlEliminarPrecios($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_auto = :id");

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
	ELIMINAR PRECIOS
	=============================================*/

	static public function mdlEliminarSeguro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id_auto = :id");

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
	MOSTRAR AUTOS
	=============================================*/

	static public function mdlMostrarAutosId($tabla,$valor,$id){

		if($valor != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE folio = :folio && id_socio = :socio");

			$stmt -> bindParam(":folio", $valor, PDO::PARAM_STR);
			$stmt -> bindParam(":socio", $id, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_socio = $id ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	AGREGAR SEGURO
	=============================================*/

	static public function mdlAgregarSeguro($tabla, $datos){
	
	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (id_auto, aseguradora, num_poliza, vigencia, num_emergencia)VALUES(:id_auto,:nombre,:poliza,:vigencia,:numero)");

		$stmt->bindParam(":id_auto", $datos["id_auto"], PDO::PARAM_STR);
		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":poliza", $datos["poliza"], PDO::PARAM_STR);
		$stmt->bindParam(":vigencia", $datos["vigencia"], PDO::PARAM_STR);
		$stmt->bindParam(":numero", $datos["numero"], PDO::PARAM_STR);



		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	MOSTRAR SEGUROS
	=============================================*/

	static public function mdlMostrarSeguros($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE id_socio = $id ORDER BY id ASC");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	EDITAR AUTO
	=============================================*/

	static public function mdlEditarSeguro($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET aseguradora = :nombre, num_poliza = :poliza, vigencia = :vigencia, num_emergencia = :numero WHERE id= :id");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":poliza", $datos["poliza"], PDO::PARAM_STR);
		$stmt->bindParam(":vigencia", $datos["vigencia"], PDO::PARAM_STR);
		$stmt->bindParam(":numero", $datos["numero"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	EDITAR PRECIOS mdlAgregarPrecios
	=============================================*/

	static public function mdlEditarPrecios($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET regular = :regular, minimo = :minimo WHERE id= :id");

		$stmt->bindParam(":regular", $datos["regular"], PDO::PARAM_STR);
		$stmt->bindParam(":minimo", $datos["minimo"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id_precio"], PDO::PARAM_INT);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}

	/*=============================================
	EDITAR PRECIOS mdlAgregarPrecios
	=============================================*/

	static public function AgregarGPS($tabla,$id_auto,$tipo,$monto,$debe){
	
	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_auto,gps,tipo,monto)VALUES(:id_auto,:gps,:tipo,:monto)");
	

		$stmt->bindParam(":id_auto", $id_auto, PDO::PARAM_INT);
		$stmt->bindParam(":gps", $monto, PDO::PARAM_INT);
		$stmt->bindParam(":tipo", $tipo, PDO::PARAM_STR);
		$stmt->bindParam(":monto", $debe, PDO::PARAM_STR);
		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}


	/*=============================================
	EDITAR PRECIOS mdlAgregarPrecios
	=============================================*/

	static public function mdlAgregarPrecios($tabla, $id,$id_auto,$plazo,$tipo,$regular,$minimo){
	
	$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id_socio,id_auto,plazo,tipo,regular,minimo)VALUES(:id_socio,:id_auto,:plazo,:tipo,:regular,:minimo)");
	

		$stmt->bindParam(":id_socio", $id, PDO::PARAM_INT);
		$stmt->bindParam(":id_auto", $id_auto, PDO::PARAM_INT);
		$stmt->bindParam(":plazo", $plazo, PDO::PARAM_STR);
		$stmt->bindParam(":tipo", $tipo, PDO::PARAM_STR);
		$stmt->bindParam(":regular", $regular, PDO::PARAM_STR);
		$stmt->bindParam(":minimo", $minimo, PDO::PARAM_STR);


		

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		$stmt = null;

	}




	// /*=============================================
	static public function mdlValidarPlacas($tabla, $item, $valor,$id){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item AND id != :id");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> bindParam(":id", $id, PDO::PARAM_STR);

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
	AGREGAR ARCHIVOS A LA DB
	=============================================*/
	function mdlAgregarArchivos($id_auto,$img,$tipo,$size,$ruta){

		$stmt = Conexion::conectar()->prepare("INSERT INTO archivos(id_auto,nombre,tipo,size,ruta) VALUES (:id,:nombre,:tipo,:size,:ruta)");

		$stmt -> bindParam(":id",$id_auto,PDO::PARAM_INT);
		$stmt -> bindParam(":nombre",$img,PDO::PARAM_STR);
		$stmt -> bindParam(":tipo",$tipo,PDO::PARAM_STR);
		$stmt -> bindParam(":size",$size,PDO::PARAM_STR);
		$stmt -> bindParam(":ruta",$ruta,PDO::PARAM_STR);
		

		if($stmt -> execute()){
			
			
		}

		
	}

	static public function AgregarEstatus($tabla,$tabla2, $item, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT id FROM $tabla WHERE $item = :$item");

		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

		$stmt -> execute();

		$id_auto  = $stmt -> fetch();

		$stmt2 = Conexion::conectar()->prepare("INSERT INTO $tabla2(id_auto,rentado,activo) VALUES (:id,:rentado,:activo)");
		
		$rentado = 0;
		$activo = 1;

		$stmt2 -> bindParam(":id",$id_auto["id"],PDO::PARAM_INT);

		$stmt2 -> bindParam(":rentado",$rentado,PDO::PARAM_INT);

		$stmt2 -> bindParam(":activo",$activo,PDO::PARAM_INT);

		$stmt2 -> execute();

	}

	static public function MdlObtenerAutosDisponibles(){


//SELECT * FROM autos INNER JOIN estatus_auto ON autos.id = estatus_auto.id_auto WHERE estatus_auto.rentado = 0 AND estatus_auto.activo =1

		$stmt = Conexion::conectar()->prepare("SELECT A.id,M.nombre,A.modelo,A.color,A.placas FROM  autos as A INNER JOIN estatus_auto as E ON A.id = E.id_auto INNER JOIN marcas as M ON A.id_marca = M.id WHERE  E.rentado = 0 AND E.activo =1");

		$stmt -> execute();

		return $stmt -> fetchAll();

		

		$stmt -> close();

		$stmt = null;
	}



}

 ?>