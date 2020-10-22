<?php 
class ControladorSocios{

	/*=============================================
	MOSTRAR SOCIOS
	=============================================*/

	static public function ctrMostrarSocios($item, $valor){

		$tabla = "socios";

		$respuesta = ModeloSocios::mdlMostrarSocios($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRAR SOCIOS VALIDAR RFC EDITAR
	=============================================*/

	static public function ctrMostrarSociosRFC($item, $valor,$id){

		$tabla = "socios";

		$respuesta = ModeloSocios::mdlMostrarSociosRFC($tabla,$item,$valor,$id);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRAR MARCAS
	=============================================*/

	static public function ctrMostrarMarcas($item, $valor){

		$tabla = "marcas";

		$respuesta = ModeloSocios::mdlMostrarMarcas($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	AGREGAR SOCIOS
	=============================================*/

	static public function ctrAgregarSocios(){

		if(isset($_POST["nuevoNombre"])){

			// -----------------------------------------

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
		


			var_dump($_POST["nuevoNacimiento"]);
			// var_dump($_POST["nuevoNumero2"]);

			$respuesta = ModeloSocios::mdlCrearSocio($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "El socio ha sido guardado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "registro";

									}
								})

					</script>';

			}

			// ----------------------------------------

		}
	}


	/*=============================================
	CONFIRMAS DATOS
	=============================================*/

	static public function ctrConfirmarDatos(){

		if(isset($_GET["idSocioo"])){

			$tabla = "socios";
			
			$respuesta = ModeloSocios::mdlCambiarEstado($tabla, $_GET["idSocioo"]);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "Los datos han sido confirmados",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "registro";

									}
								})

					</script>';
			}

		}
	
	}


	/*=============================================
	ELIMINAR SOCIO
	=============================================*/

	static public function ctrEliminarDatos(){

		if(isset($_GET["idSocio"])){

			$tabla = "socios";
			
			$respuesta = ModeloSocios::mdlEliminarSocio($tabla, $_GET["idSocio"]);

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "Los datos se han eliminado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "registro";

									}
								})

					</script>';
			}

		}
	
	}

	/*=============================================
	EDITAR SOCIOS
	=============================================*/

	static public function ctrEditarSocios(){

		if(isset($_POST["editarNombre"])){

			// -----------------------------------------

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

			if($respuesta == "ok"){

				echo'<script>

					swal({
						  type: "success",
						  title: "Datos actualizados correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "registro";

									}
								})

					</script>';

			}

			// ----------------------------------------

		}
	}
}

 ?>