<?php 
class ControladorAutos{

	/*=============================================
	MOSTRAR PRECIOS
	=============================================*/

	static public function ctrMostrarPrecios($item, $valor){

		$tabla = "precios";

		$respuesta = ModeloAutos::mdlMostrarPrecios($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRAR NUMERO DE COCHES
	=============================================*/

	static public function ctrMostrarNumCoches($item, $valor){

		$tabla = "autos";

		$respuesta = ModeloAutos::mdlMostrarNumCoches($tabla, $item, $valor);

		return $respuesta;
	
	}



	/*=============================================
	MOSTRAR SEGUROS
	=============================================*/

	static public function ctrMostrarSeguros($item, $valor){

		$tabla = "seguro_automovil";

		$respuesta = ModeloAutos::mdlMostrarSeguros($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRAR AUTOS
	=============================================*/

	static public function ctrMostrarAutos($item, $valor,$id){

		$tabla = "autos";

		$respuesta = ModeloAutos::mdlMostrarAutos($tabla, $item, $valor,$id);

		return $respuesta;
	
	}


	

	static public function ctrMostrarAutos2($item, $valor){

		$tabla = "autos";

		$respuesta = ModeloAutos::mdlMostrarAutos2($tabla, $item, $valor);

		return $respuesta;
	
	}

	static public function GPS($item, $valor){

		$tabla = "gps";

		$respuesta = ModeloAutos::mdlMostrarAutos2($tabla, $item, $valor);

		return $respuesta;
	
	}


	static public function ctrMostrarValidarPlacasEditar($item, $valor,$id){

		$tabla = "autos";

		$respuesta = ModeloAutos::mdlValidarPlacas($tabla, $item, $valor,$id);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRAR MARCAS
	=============================================*/

	static public function ctrMostrarMarcas($item, $valor){

		$tabla = "marcas";

		$respuesta = ModeloAutos::mdlMostrarAutos2($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRAR FACTURAS
	=============================================*/

	static public function ctrMostrarFacturas($tabla,$item, $valor){

		

		$respuesta = ModeloAutos::mdlMostrarAutos2($tabla, $item, $valor);

		return $respuesta;
	
	}

	/*=============================================
	MOSTRAR AUTOS DISPONIBLES
	=============================================*/

	static public function ctrMostrarAutosDisponibles(){



		$respuesta = ModeloAutos::MdlObtenerAutosDisponibles();

		return $respuesta;
	
	}


	/*=============================================
	AGREGAR AUTO
	=============================================*/

	static public function ctrAgregarAutos(){

		if(isset($_POST["nuevoModelo"])){

			// ---------------------------
			$id = $_POST["nuevoId"];
			$tabla = "autos";

			$datos =  array("folio"=>$_POST["nuevoFolio"],
							"id_socio"=>$_POST["nuevoId"],
						    "id_estado"=>$_POST["nuevoEstado"],
						    "id_marca"=>$_POST["nuevoMarca"],
							"modelo" => $_POST["nuevoModelo"],
							"temporada" => $_POST["nuevoTemporada"],
							"color" => $_POST["nuevoColor"],
							"placas" => $_POST["nuevoPlacas"],
							"tipo_veri" => $_POST["nuevoVerificacion"],
							"vigencia_veri" => $_POST["nuevoFechaV"],
							"llantas" => $_POST["nuevoLlantas"],
							"km" => $_POST["nuevoKilometraje"],
							"ultimo" => $_POST["nuevoUltimo"],
							"proximo" => $_POST["nuevoProximo"],
							"periodo" => $_POST["nuevoPeriodo"],
							"pasajeros" => $_POST["nuevoPasajeros"],
							"transmision" => $_POST["nuevoTransmision"],
							"cilindros" => $_POST["nuevoCilindros"],
							"vestiduras" => $_POST["nuevoVestiduras"],
							"llave" => $_POST["nuevoLlaves"],
							"tenencia" => $_POST["nuevoTenencia"],
							"combustible" => $_POST["nuevoGas"]);
			

			 $respuesta = ModeloAutos::mdlCrearAuto($tabla, $datos);

			$respuesta2 = ModeloAutos::mdlMostrarAutosId("autos",$_POST["nuevoFolio"],$_POST["nuevoId"]);

				

			if($respuesta == "ok"){

				$estatus = ModeloAutos::AgregarEstatus($tabla,"estatus_auto","placas",$_POST["nuevoPlacas"]);

				$id_autos = $respuesta2["id"];
				$tipoG = $_POST["Tipo_Pago_Gps"];
				$mont = $_POST["Gps"];
				$debe = $_POST["monto_Gps"];
				$gps =  ModeloAutos::AgregarGPS("gps",$id_autos,$tipoG,$mont,$debe);

				$datos2 =  array("id_auto"=>$id_autos,
							"nombre"=>$_POST["nuevoAseguradora"],
						    "poliza"=>$_POST["nuevoPoloza"],
						    "vigencia"=>$_POST["nuevoVigencia"],
							"numero" => $_POST["nuevoNumEmergencia"]);
			 
			    $aseguradora =ModeloAutos::mdlAgregarSeguro("seguro_automovil",$datos2);

			    $plazo1 = "1-6";
			    $tipo1 = "A";
				$plazo2 = "7-14";
			    $tipo2 = "B";
				$plazo3 = "15-30";	
			    $tipo3 = "C";

			
				$respuesta3 = ModeloAutos::mdlAgregarPrecios("precios", $id,$id_autos,$plazo1,$tipo1,$_POST["nuevoRegular_1"],$_POST["nuevoPrecioMinimi_1"]);

				if($respuesta3 == "ok"){

					 $respuesta4 = ModeloAutos::mdlAgregarPrecios("precios", $id,$id_autos,$plazo2,$tipo2,$_POST["nuevoRegular_2"],$_POST["nuevoPrecioMinimi_2"]);

					 if($respuesta4 == "ok"){

					$respuesta5 = ModeloAutos::mdlAgregarPrecios("precios", $id,$id_autos,$plazo3,$tipo3,$_POST["nuevoRegular_2"],$_POST["nuevoPrecioMinimi_2"]);

						 if($respuesta5 == "ok"){

						 	$ruta = "vistas/img/Autos/".$_POST["nuevoPlacas"];
							return $_POST["nuevoId"];
							mkdir($ruta, 0777);
						 	
						 // 	echo'<script>

							// 	var id_var  = "';echo $id;echo'";


							// 		swal({
							// 			  type: "success",
							// 			  title: "El Automovil ha sido guardado correctamente",
							// 			  showConfirmButton: true,
							// 			  confirmButtonText: "Cerrar"
							// 			  }).then(function(result){
							// 					if (result.value) {

							// 					window.location = "index.php?ruta=registro-autos&id="+id_var;
													

							// 					}
							// 				})

							// </script>';
	
						

						 }

					 }

				}


				
				

			}


			// ----------------------------------------

		}
	}




	/*=============================================
	AGREGAR AUTO
	=============================================*/

	static public function ctrEditarAutos(){

		if(isset($_POST["editarMarca"])){

			$id = $_POST["editarId"];
			$tabla = "autos";
			

			$datos =  array("id_auto"=>$_POST["Id_auto"],
							"id_socio"=>$_POST["editarId"],
						    "id_estado"=>$_POST["editarEstado"],
						    "id_marca"=>$_POST["editarMarca"],
							"modelo" => $_POST["editarModelo"],
							"temporada" => $_POST["editarTemporada"],
							"color" => $_POST["editarColor"],
							"placas" => $_POST["editarPlacas"],
							"tipo_veri" => $_POST["editarVerificacion"],
							"vigencia_veri" => $_POST["editarFechaV"],
							"llantas" => $_POST["editarLlantas"],
							"km" => $_POST["editarKilometraje"],
							"ultimo" => $_POST["editarUltimo"],
							"proximo" => $_POST["editarProximo"],
							"periodo" => $_POST["editarPeriodo"],
							"pasajeros" => $_POST["editarPasajeros"],
							"transmision" => $_POST["editarTransmision"],
							"cilindros" => $_POST["editarCilindros"],
							"vestiduras" => $_POST["editarVestiduras"],
							"llave" => $_POST["editarLlaves"],
							"tenencia" => $_POST["editarTenencia"],
							"combustible" => $_POST["editarGas"]);
			
				

			$respuesta = ModeloAutos::mdlEditarAuto($tabla, $datos);

			if($respuesta == "ok"){

				$datos2 =  array("id"=>$_POST["id_seguro"],
							"nombre"=>$_POST["editarAseguradora"],
						    "poliza"=>$_POST["editarPoloza"],
						    "vigencia"=>$_POST["editarVigencia"],
							"numero" => $_POST["editarNumEmergencia"]);
			 
			    $aseguradora = ModeloAutos::mdlEditarSeguro("seguro_automovil", $datos2);

			    $datos3 =  array("id_precio"=>$_POST["id_precios"],
						    "regular"=>$_POST["editarRegular_1"],
							"minimo" => $_POST["editarPrecioMinimi_1"]);

				$datos4 =  array("id_precio"=>$_POST["id_precios2"],
						    "regular"=>$_POST["editarRegular_2"],
							"minimo" => $_POST["editarPrecioMinimi_2"]);

				$datos5 =  array("id_precio"=>$_POST["id_precios3"],
						    "regular"=>$_POST["editarRegular_3"],
							"minimo" => $_POST["editarPrecioMinimi_3"]);
				

				$respuesta2 = ModeloAutos::mdlEditarPrecios("precios", $datos3);
				
				if($respuesta2 == "ok"){

					$respuesta3 = ModeloAutos::mdlEditarPrecios("precios", $datos4);

					if($respuesta3 == "ok"){
						$respuesta4 = ModeloAutos::mdlEditarPrecios("precios", $datos5);
						
						 if($respuesta4 == "ok"){

							return $_POST["editarId"];
							

						 }

					}


				}

				
			}


			// ----------------------------------------

		}
	}


	/*=============================================
	CONFIRMAS DATOS
	=============================================*/

	static public function ctrConfirmarDatos(){

		if(isset($_GET["idAuto"]) && isset($_GET["ids"])){

			$tabla = "autos";
			$id = $_GET["ids"];

			
			$respuesta = ModeloSocios::mdlCambiarEstado($tabla, $_GET["idAuto"]);

			if($respuesta == "ok"){

			$matricula = ModeloAutos::mdlMostrarAutos2($tabla,"id",$_GET["idAuto"]); 

				$ruta = "vistas/img/Autos/".$matricula["placas"];
				
				mkdir($ruta, 0777);
						 	
				echo'<script>

					var id_var  = "';echo $id;echo'";

					swal({
						  type: "success",
						  title: "Los datos del auto se han confirmado",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "index.php?ruta=registro-autos&id="+id_var;
									}
								})

					</script>';
			}

		}
	
	}

	/*=============================================
	CONFIRMAS DATOS
	=============================================*/

	static public function ctrEliminarAuto(){

		if(isset($_GET["idAutoo"]) && isset($_GET["id"])){

			$tabla = "autos";
			$id = $_GET["id"];

			
			$respuesta = ModeloAutos::mdlEliminarAuto($tabla, $_GET["idAutoo"]);
			ModeloAutos::mdlEliminarPrecios("precios", $_GET["idAutoo"]);
			ModeloAutos::mdlEliminarSeguro("seguro_automovil", $_GET["idAutoo"]);


			if($respuesta == "ok"){

				echo'<script>

					var id_var  = "';echo $id;echo'";

					swal({
						  type: "success",
						  title: "Los datos se han eliminado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "index.php?ruta=registro-autos&id="+id_var;
									}
								})

					</script>';
			}

		}
	
	}

	
	/*=============================================
	SUBIR ARCHIVOS
	=============================================*/

	static public function subirArchivos(){
		

		if (isset($_POST["btn_subir"]) && isset($_FILES['archivossubidos'])) {
			$tabla = "autos";
			$id_auto = $_POST["id"];
			$id = $_POST["id_socio"];

			$datos = ModeloAutos::mdlMostrarAutos2($tabla, "id", $id_auto);

			$ruta = "vistas/img/Autos/".$datos["placas"];
				
			mkdir($ruta, 0777);
						 	

			$direc = "vistas/img/Autos/".$datos["placas"]."/";

			$x = ControladorAutos::guardarFiles($_FILES['archivossubidos'],$direc,$id_auto);
			if ($x == "Ok") {

				$respuesta = ModeloSocios::mdlCambiarEstado($tabla,$id_auto);

				echo'<script>

					var id_var  = "';echo $id;echo'";


						swal({
							  type: "success",
							  title: "Los archivos fueron guardados corectamente",
							  showConfirmButton: true,
							  confirmButtonText: "Cerrar"
							  }).then(function(result){
									if (result.value) {

									window.location = "index.php?ruta=registro-autos&id="+id_var;
										

									}
								})

				</script>';
			}
		}

	}


	/*=============================================
	GUARDAR ARCHIVOS
	=============================================*/

	function guardarFiles($file_post,$dir,$id_auto) {
	// function guardarFiles($matricula,$repo,$file_post,$dir) {
		$file_count = count($file_post['name']);
		$ruta ="";
		for ($i=0; $i<$file_count; $i++) {
			$ruta= $dir;
			$arc= $file_post["tmp_name"][$i];
			$img = $file_post["name"][$i];
			$tipo = $file_post["type"][$i];
			$size = $file_post["size"][$i];
			$ruta = $ruta.$img;//imagenes/nombre.jpg
			// $ruta = $ruta."/".$img;//imagenes/nombre.jpg
			ModeloAutos::mdlAgregarArchivos($id_auto,$img,$tipo,$size,$ruta);
			move_uploaded_file($arc,$ruta);
		}
		return "Ok";
	}


}



 ?>