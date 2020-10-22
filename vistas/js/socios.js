
/*=============================================
VALIDACION RFC 
=============================================*/
$(".formSocio").on("change", "input#NuevoRFC", function(){
$(".aler_rfc").remove();
$(".alert_rfc_socio").remove();

   caracteres = $(this).val();
var formulario = document.formSocio;

if(caracteres.length < 13){

     $("#NuevoRFC").parent().after('<div class="alert alert-warning aler_rfc">Favor de ingresar el R.F.C completo</div>');

      // $("#NuevoRFC").val("");
	// 

}else{

	console.log("chi");

		  // $(".alert").remove();

		  var rfc = $(this).val();
		    console.log(rfc);
		 
		  
		  var datos = new FormData();
		  datos.append("ValidarRfc", rfc);



		   $.ajax({
		      url:"ajax/socios.ajax.php",
		      method:"POST",
		      data: datos,
		      cache: false,
		      contentType: false,
		      processData: false,
		      dataType: "json",
		      success:function(respuesta){
		        console.log(respuesta);
		        
		        if(respuesta){

		          $("#NuevoRFC").parent().after('<div class="alert alert-warning aler_rfc">Este RFC ya existe...</div>');

		          $("#NuevoRFC").val("");

		        }

		      }

		  })
}
})

/*=============================================
VALIDACION RFC EDITAR
=============================================*/
$(".formSocio").on("change", "input#editarRFC", function(){
$(".alert_Erfc_socio").remove();
var idSocio = $("#idSocio").val();
console.log("id socio: ",idSocio);


   caracteres = $(this).val();


if(caracteres.length < 13){

     $("#editarRFC").parent().after('<div class="alert alert-warning alert_Erfc_socio">Favor de ingresar el R.F.C completo</div>');

      // $("#editarRFC").val("");
	

}else{

	
	 		
	 	  var idSocio = $(this).attr("idSocio");
		  var rfc = $(this).val();
		 
		  
		  var datos = new FormData();
		  datos.append("ValidarRfcEditar", rfc);
		  datos.append("ValSocio", idSocio);



		   $.ajax({
		      url:"ajax/socios.ajax.php",
		      method:"POST",
		      data: datos,
		      cache: false,
		      contentType: false,
		      processData: false,
		      dataType: "json",
		      success:function(respuesta){
		        console.log(respuesta);
		        
		        if(respuesta){

		          $("#editarRFC").parent().after('<div class="alert alert-warning">Este RFC ya existe.i..</div>');

		          $("#editarRFC").val("");

		        }

		      }

		  })



	

}
})

/*=============================================
CONFIRMAR DATOS
=============================================*/
$(".tablas").on("click", ".btnConfirmarDatos", function(){

	 var idSocio = $(this).attr("idSocio");

	 swal({
	 	title: '¿Los datos del socio son correctos?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, confirmar datos!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=registro&idSocioo="+idSocio;

	 	}

	 })

})

/*=============================================
ELIMINAR SOCIO
=============================================*/
$(".tablas").on("click", ".btnEliminarSocio", function(){

	 var idSocio = $(this).attr("idSocio");

	 swal({
	 	title: '¿Esta seguro de eliminar datos del socio?',
	 	text: "¡Si no lo está puede cancelar la acción!",
	 	type: 'warning',
	 	showCancelButton: true,
	 	confirmButtonColor: '#3085d6',
	 	cancelButtonColor: '#d33',
	 	cancelButtonText: 'Cancelar',
	 	confirmButtonText: 'Si, eliminar datos!'
	 }).then(function(result){

	 	if(result.value){

	 		window.location = "index.php?ruta=registro&idSocio="+idSocio;

	 	}

	 })

})

/*=============================================
EDITAR SOCIO
=============================================*/
$(".tablas").on("click", ".btnEditarSocio", function(){
    console.log("chi");

	var idSocio = $(this).attr("idSocio");

	var datos = new FormData();
	datos.append("idSocio", idSocio);

	$.ajax({
		url: "ajax/socios.ajax.php",
		method: "POST",
      	data: datos,
      	cache: false,
     	contentType: false,
     	processData: false,
     	dataType:"json",
     	success: function(respuesta){
     		console.log(respuesta);

     		if(respuesta["genero"] == 1){

				document.getElementById("sexoM").checked = true;



     		}else{

				document.getElementById("sexoF").checked = true;

     		}

     		if(respuesta["folio"] < 10){
     		  $("#editarSocio").val("S00"+respuesta["folio"]);

     		}else if(respuesta["folio"] > 9 && respuesta["folio"] < 100){
     		  $("#editarSocio").val("S0"+respuesta["folio"]);

     		}else if(respuesta["folio"] > 99 && respuesta["folio"] < 1000){
     		  $("#editarSocio").val("S"+respuesta["folio"]);

     		}

     		 $("#idSocio").val(respuesta["id"]);
     		 $("#editarNombre").val(respuesta["nombres"]);
     		 $("#editarApellidoP").val(respuesta["apellido_p"]);
     		 $("#editarApellidoM").val(respuesta["apellido_m"]);
     		 $("#editarIdentificacion").val(respuesta["identificacion"]);
     		 $("#editarIdentificacion").html(respuesta["identificacion"]);
     		 $("#editarNumIdentificacion").val(respuesta["num_identificacion"]);
     		 $("#editarSexo").val(respuesta["genero"]);
     		 $("#editarNacimiento").val(respuesta["nacimiento"]);
     		 $("#editarRFC").val(respuesta["rfc"]);
     		 $("#editarCalle").val(respuesta["calle"]);
     		 $("#editarExterior").val(respuesta["num_ext"]);
     		 $("#editarInterior").val(respuesta["num_int"]);
     		 $("#editarColonia").val(respuesta["colonia"]);
     		 $("#editarCiudad").val(respuesta["ciudad_municipio"]);
     		 $("#editarPostal").val(respuesta["codigo_postal"]);
     		 $("#editarNumero1").val(respuesta["tel_1"]);
     		 $("#editarNumero2").val(respuesta["tel_2"]);
     		 $("#editarCorreo").val(respuesta["correo"]);
     		 $("#editarTipoSocio").val(respuesta["tipo_socio"]);
     		 $("#editarBanco").val(respuesta["banco"]);
     		 $("#editarCuentaB").val(respuesta["cuenta_ban"]);
     		 $("#editarClaveI").val(respuesta["clave_inte"]);
     		// $("#idSocio").val(respuesta["id"]);

     		if(respuesta["tipo_socio"] == "A"){
     			
     			 $("#editarTipoSocio").html('Socio "A"');

     		}else if(respuesta["tipo_socio"] == "B"){
     			
     			 $("#editarTipoSocio").html('Socio "B"');

     		}

     		var id_estado = new FormData();
			id_estado.append("id_estado", respuesta["id_estado"]);


	     	$.ajax({
			url: "ajax/socios.ajax.php",
			method: "POST",
	      	data: id_estado,
	      	cache: false,
	     	contentType: false,
	     	processData: false,
	     	dataType:"json",
	     	success: function(respuesta2){
	     		console.log("respuesta2");

     		 $("#editarEstado").html(respuesta2["nombre"]);
     		 $("#editarEstado").val(respuesta["id_estado"]);



	     	}
	       })


     		// ------------------------------------------------


     	}

	})


})

$(".formSocio").on("change", "input#nuevokm", function(){
	console.log("chi");
	var km = Number($(this).val());
	$("#nuevoKilometraje").val(km);


 })

/*=============================================
NO REPETIR NÚMERO RFC
=============================================*/
// $(".formSocio").on("change", "input#NuevoRFC", function(){

// console.log("chi");

//   // $(".alert").remove();

//   var rfc = $(this).val();
 
  
//   var datos = new FormData();
//   datos.append("ValidarRfc", rfc);



//    $.ajax({
//       url:"ajax/socios.ajax.php",
//       method:"POST",
//       data: datos,
//       cache: false,
//       contentType: false,
//       processData: false,
//       dataType: "json",
//       success:function(respuesta){
//         console.log(respuesta);
        
//         if(respuesta){

//           $("#NuevoRFC").parent().after('<div class="alert alert-warning">Este RFC ya existe...</div>');

//           $("#NuevoRFC").val("");

//         }

//       }

//   })
// })

// AGREGAR SOCIO
const nombres_S = document.getElementById("nuevoNombre_Socio");
const app_S = document.getElementById("nuevoApellidoP_Socio");
const apm_S = document.getElementById("nuevoApellidoM_Socio");
const iden_S = document.getElementById("nuevoIdentificacion_Socio");
const numIden_S = document.getElementById("nuevoNumIdentificacion_Socio");
const nacimiento_S = document.getElementById("nuevoNacimiento_Socio");
const rfc_S = document.getElementById("NuevoRFC");
const calle_S = document.getElementById("nuevoCalle_Socio");
const num_Ext_S = document.getElementById("nuevoExterior_Socio");
const colonia_S = document.getElementById("nuevoColonia_Socio");
const ciudad_S = document.getElementById("nuevoCiudad_Socio");
const estado_S = document.getElementById("nuevoEstado_Socio");
const codigo_S = document.getElementById("nuevoPostal");
const telefono_S = document.getElementById("nuevoNumero1");
const correo_S = document.getElementById("nuevoCorreo_Socio");
const tipo_socio_S = document.getElementById("nuevoTipoSocio_Socio");
const cuentaB_S = document.getElementById("nuevoCuentaB");
const clave_S = document.getElementById("nuevoClaveI_Socio");

const genero_S = document.getElementsByName("nuevoSexo");

const form_S = document.getElementById("formSocio");


form_S.addEventListener("submit",e=>{
e.preventDefault();


$(".alert_nombre_socio").remove();
$(".alert_app_socio").remove();
$(".alert_apm_socio").remove();
$(".alert_ident_socio").remove();
$(".alert_num_ident_socio").remove();
$(".alert_genero_socio").remove();
$(".alert_nacimiento_socio").remove();
$(".alert_rfc_socio").remove();
$(".alert_calle_socio").remove();
$(".alert_ext_socio").remove();
$(".alert_colonia_socio").remove();
$(".alert_ciudad_socio").remove();
$(".alert_estado_socio").remove();
$(".alert_postal_socio").remove();
$(".alert_tel_socio").remove();
$(".alert_correo_socio").remove();
$(".alert_tipo_socio").remove();
$(".alert_banco_socio").remove();
$(".alert_cuenta_socio").remove();
$(".alert_clave_socio").remove();

var seleccionado_S = false;
for(var i=0; i<genero_S.length; i++) {
  if(genero_S[i].checked) {
      seleccionado_S = true;
      console.log("siiii");
      break;
  }
}

indice_Iden_S = document.getElementById("nuevoIdentificacion_Socio").selectedIndex;
indice_Estado_S = document.getElementById("nuevoEstado_Socio").selectedIndex;
indice_tipo_S = document.getElementById("nuevoTipoSocio_Socio").selectedIndex;
indice_banco_S = document.getElementById("nuevoBanco_Socio").selectedIndex;

var guardar_Socio = false;
//NOMBRES----------------
if(nombres_S.value == ""){
    $("#nuevoNombre_Socio").parent().after('<div class="alert alert-danger alert_nombre_socio"><strong>Ingresa el nombre del socio</strong></div>');
    guardar_Socio = true;
    console.log(1);
}
//APELLIDO PATERNO----------------
if(app_S.value == ""){
    $("#nuevoApellidoP_Socio").parent().after('<div class="alert alert-danger alert_app_socio"><strong>Ingresa el apellido paterno del socio</strong></div>');
    guardar_Socio = true;
    console.log(2);
}

//APELLIDO MATERNO----------------
if(apm_S.value == ""){
    $("#nuevoApellidoM_Socio").parent().after('<div class="alert alert-danger alert_apm_socio"><strong>Ingresa el apellido materno del socio</strong></div>');
    guardar_Socio = true;
    console.log(3);
}

//IDENTIFICACION-------------------
if(indice_Iden_S == null || indice_Iden_S == 0) {
    $("#nuevoIdentificacion_Socio").parent().after('<div class="alert alert-danger alert_ident_socio"><strong>Selecciona un tipo de identificacion</strong></div>');
    guardar = true;
    console.log(4);
}
//NÚMERO DE IDENTIFICACION----------------
if(numIden_S.value == ""){
    $("#nuevoNumIdentificacion_Socio").parent().after('<div class="alert alert-danger alert_num_ident_socio"><strong>Ingresa el número de identificacion</strong></div>');
    guardar_Socio = true;
    console.log(5);
}

if(!seleccionado_S){
  $("#Alerta_Genero_Socio").parent().after('<div class="alert alert-danger alert_genero_socio"><strong>Seleccionar genero</strong></div>');
  guardar = true;
  console.log(6);
}
//FECHA DE NACIMIENTO----------------
if(nacimiento_S.value == ""){
    $("#nuevoNacimiento_Socio").parent().after('<div class="alert alert-danger alert_nacimiento_socio"><strong>Ingresa la fecha de nacimiento</strong></div>');
    guardar_Socio = true;
    console.log(7);
}
//RFC----------------
if(rfc_S.value == ""){
    $("#NuevoRFC").parent().after('<div class="alert alert-danger alert_rfc_socio"><strong>Ingresa el RFC del socio</strong></div>');
    guardar_Socio = true;
    console.log(8);
}
//CALLE----------------
if(calle_S.value == ""){
    $("#nuevoCalle_Socio").parent().after('<div class="alert alert-danger alert_calle_socio"><strong>Ingresa la calle del socio</strong></div>');
    guardar_Socio = true;
    console.log(9);
}
//NUMERO EXTERIOR----------------
if(num_Ext_S.value == ""){
    $("#nuevoExterior_Socio").parent().after('<div class="alert alert-danger alert_ext_socio"><strong>Ingresa el número exterior socio</strong></div>');
    guardar_Socio = true;
    console.log(10);
}
//COLONIA----------------
if(colonia_S.value == ""){
    $("#nuevoColonia_Socio").parent().after('<div class="alert alert-danger alert_colonia_socio"><strong>Ingresa la colonia del socio</strong></div>');
    guardar_Socio = true;
    console.log(11);
}
//CIUDAD----------------
if(ciudad_S.value == ""){
    $("#nuevoCiudad_Socio").parent().after('<div class="alert alert-danger alert_ciudad_socio"><strong>Ingresa la ciudad/municipio del socio</strong></div>');
    guardar_Socio = true;
    console.log(12);
}
//ESTADO-------------------
if(indice_Estado_S == null || indice_Estado_S == 0) {
    $("#nuevoEstado_Socio").parent().after('<div class="alert alert-danger alert_estado_socio"><strong>Selecciona el estado del socio</strong></div>');
    guardar_Socio = true;
    console.log(13);
}
//CODIGO POSTAL-------------------
if(codigo_S.value == "") {
    $("#nuevoPostal").parent().after('<div class="alert alert-danger alert_postal_socio"><strong>Ingresa el código postal del socio</strong></div>');
    guardar_Socio = true;
    console.log(14);
}
//TEL-------------------
if(telefono_S.value == "") {
    $("#nuevoNumero1").parent().after('<div class="alert alert-danger alert_tel_socio"><strong>Ingresa el telefono del socio</strong></div>');
    guardar_Socio = true;
    console.log(15);
}
//CORREO
if(correo_S.value == "") {
    $("#nuevoCorreo_Socio").parent().after('<div class="alert alert-danger alert_correo_socio"><strong>Ingresa el correo electronico del socio</strong></div>');
    guardar_Socio = true;
    console.log(16);
}
//TIPO DE SOCIO-------------------
if(indice_tipo_S == null || indice_tipo_S == 0) {
    $("#nuevoTipoSocio_Socio").parent().after('<div class="alert alert-danger alert_tipo_socio"><strong>Selecciona el tipo de socio</strong></div>');
    guardar_Socio = true;
    console.log(17);
}
//TIPO DE BANCO-------------------
if(indice_banco_S == null || indice_banco_S == 0) {
    $("#nuevoBanco_Socio").parent().after('<div class="alert alert-danger alert_banco_socio"><strong>Selecciona el banco del socio</strong></div>');
    guardar_Socio = true;
    console.log(18);
}
//CUENTA BANCARIA
if(cuentaB_S.value == "") {
    $("#nuevoCuentaB").parent().after('<div class="alert alert-danger alert_cuenta_socio"><strong>Ingresa la cuenta bancaria del socio</strong></div>');
    guardar_Socio = true;
    console.log(19);
}
//CLAVE INTERBANCARIA
if(clave_S.value == "") {
    $("#nuevoClaveI_Socio").parent().after('<div class="alert alert-danger alert_clave_socio"><strong>Ingresa la cuenta bancaria del socio</strong></div>');
    guardar_Socio = true;
    console.log(20);
}

if(!guardar_Socio){

	$.ajax({
      url: "ajax/socios.ajax.php",
      type: "POST",
      data: $("#formSocio").serialize(),
      success: function(res){

	      if(res = "ok"){
			console.log(res);

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

	      }
      }
    });
	console.log("DATOS GUARDADOS");
}

});
// EDITAR SOCIO

// AGREGAR SOCIO
const editarNombres_S = document.getElementById("editarNombre");
const editarApp_S = document.getElementById("editarApellidoP");
const editarApm_S = document.getElementById("editarApellidoM");
const editarNumIden_S = document.getElementById("editarNumIdentificacion");
const editarNacimiento_S = document.getElementById("editarNacimiento");
const editarRfc_S = document.getElementById("editarRFC");
const editarCalle_S = document.getElementById("editarCalle");
const editarNum_Ext_S = document.getElementById("editarExterior");
const editarColonia_S = document.getElementById("editarColonia");
const editarCiudad_S = document.getElementById("editarCiudad");
const editarCodigo_S = document.getElementById("editarPostal");
const editarTelefono_S = document.getElementById("editarNumero1");
const editarCorreo_S = document.getElementById("editarCorreo");
const editarCuentaB_S = document.getElementById("editarCuentaB");
const editarClave_S = document.getElementById("editarClaveI");

const editarform_S = document.getElementById("formSocioEditar");

editarform_S.addEventListener("submit",e=>{
e.preventDefault();
console.log("entro editar");

$(".alert_nombre_socio").remove();
$(".alert_app_socio").remove();
$(".alert_apm_socio").remove();
$(".alert_num_ident_socio").remove();
$(".alert_Erfc_socio").remove();
$(".alert_nacimiento_socio").remove();
$(".alert_rfc_socio").remove();
$(".alert_calle_socio").remove();
$(".alert_ext_socio").remove();
$(".alert_colonia_socio").remove();
$(".alert_ciudad_socio").remove();
$(".alert_postal_socio").remove();
$(".alert_tel_socio").remove();
$(".alert_correo_socio").remove();
$(".alert_cuenta_socio").remove();
$(".alert_clave_socio").remove();

var guardar_Socio = false;
//NOMBRES----------------
if(editarNombres_S.value == ""){
    $("#editarNombre").parent().after('<div class="alert alert-danger alert_nombre_socio"><strong>Ingresa el nombre del socio</strong></div>');
    guardar_Socio = true;
    console.log(1);
}
//APELLIDO PATERNO----------------
if(editarApp_S.value == ""){
    $("#editarApellidoP").parent().after('<div class="alert alert-danger alert_app_socio"><strong>Ingresa el apellido paterno del socio</strong></div>');
    guardar_Socio = true;
    console.log(2);
}

//APELLIDO MATERNO----------------
if(editarApm_S.value == ""){
    $("#editarApellidoM").parent().after('<div class="alert alert-danger alert_apm_socio"><strong>Ingresa el apellido materno del socio</strong></div>');
    guardar_Socio = true;
    console.log(3);
}
//NÚMERO DE IDENTIFICACION----------------
if(editarNumIden_S.value == ""){
    $("#editarNumIdentificacion").parent().after('<div class="alert alert-danger alert_num_ident_socio"><strong>Ingresa el número de identificacion</strong></div>');
    guardar_Socio = true;
    console.log(4);
}

//FECHA DE NACIMIENTO----------------
if(editarNacimiento_S.value == ""){
    $("#editarNacimiento").parent().after('<div class="alert alert-danger alert_nacimiento_socio"><strong>Ingresa la fecha de nacimiento</strong></div>');
    guardar_Socio = true;
    console.log(5);
}
//RFC----------------
if(editarRfc_S.value == ""){
    $("#editarRFC").parent().after('<div class="alert alert-danger alert_rfc_socio"><strong>Ingresa el RFC del socio</strong></div>');
    guardar_Socio = true;
    console.log(6);
}
//CALLE----------------
if(editarCalle_S.value == ""){
    $("#editarCalle").parent().after('<div class="alert alert-danger alert_calle_socio"><strong>Ingresa la calle del socio</strong></div>');
    guardar_Socio = true;
    console.log(7);
}
//NUMERO EXTERIOR----------------
if(editarNum_Ext_S.value == ""){
    $("#editarExterior").parent().after('<div class="alert alert-danger alert_ext_socio"><strong>Ingresa el número exterior socio</strong></div>');
    guardar_Socio = true;
    console.log(8);
}
//COLONIA----------------
if(editarColonia_S.value == ""){
    $("#editarColonia").parent().after('<div class="alert alert-danger alert_colonia_socio"><strong>Ingresa la colonia del socio</strong></div>');
    guardar_Socio = true;
    console.log(9);
}
//CIUDAD----------------
if(editarCiudad_S.value == ""){
    $("#editarCiudad").parent().after('<div class="alert alert-danger alert_ciudad_socio"><strong>Ingresa la ciudad/municipio del socio</strong></div>');
    guardar_Socio = true;
    console.log(10);
}
//CODIGO POSTAL-------------------
if(editarCodigo_S.value == "") {
    $("#editarPostal").parent().after('<div class="alert alert-danger alert_postal_socio"><strong>Ingresa el código postal del socio</strong></div>');
    guardar_Socio = true;
    console.log(11);
}
//TEL-------------------
if(editarTelefono_S.value == "") {
    $("#editarNumero1").parent().after('<div class="alert alert-danger alert_tel_socio"><strong>Ingresa el telefono del socio</strong></div>');
    guardar_Socio = true;
    console.log(12);
}
//CORREO
if(editarCorreo_S.value == "") {
    $("#editarCorreo").parent().after('<div class="alert alert-danger alert_correo_socio"><strong>Ingresa el correo electronico del socio</strong></div>');
    guardar_Socio = true;
    console.log(13);
}

//CUENTA BANCARIA
if(editarCuentaB_S.value == "") {
    $("#editarCuentaB").parent().after('<div class="alert alert-danger alert_cuenta_socio"><strong>Ingresa la cuenta bancaria del socio</strong></div>');
    guardar_Socio = true;
    console.log(14);
}
//CLAVE INTERBANCARIA
if(editarClave_S.value == "") {
    $("#editarClaveI").parent().after('<div class="alert alert-danger alert_clave_socio"><strong>Ingresa la cuenta bancaria del socio</strong></div>');
    guardar_Socio = true;
    console.log(15);
}
console.log(guardar_Socio);

if(!guardar_Socio){

	$.ajax({
      url: "ajax/socios.ajax.php",
      type: "POST",
      data: $("#formSocioEditar").serialize(),
      success: function(res){

	      if(res = "ok"){
			console.log(res);

	      	swal({
						  type: "success",
						  title: "El socio ha sido actualizado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"
						  }).then(function(result){
									if (result.value) {

									window.location = "registro";

									}
			})

	      }
      }
    });
	console.log("DATOS GUARDADOS");
}

});