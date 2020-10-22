$("#nuevokm").number(true);
$(".formAuto").on("change", "input#nuevokm", function(){
  var km = Number($(this).val());
  $("#nuevoKilometraje").val(km);
 })

$("#nuevoUlt").number(true);
$(".formAuto").on("change", "input#nuevoUlt", function(){
  var ultimo = Number($(this).val());
  $("#nuevoUltimo").val(ultimo);
 })

$("#nuevoProx").number(true);
$(".formAuto").on("change", "input#nuevoProx", function(){
  var proximo = Number($(this).val());
  $("#nuevoProximo").val(proximo);
 })

$("#nuevoPeri").number(true);
$(".formAuto").on("change", "input#nuevoPeri", function(){
  var periodo = Number($(this).val());
  $("#nuevoPeriodo").val(periodo);
 })
// ------Editar-------------------

$("#editarkm").number(true);
$(".formAuto").on("change", "input#editarkm", function(){
  var km = Number($(this).val());
  $("#editarKilometraje").val(km);
 })

$("#editarUlt").number(true);
$(".formAuto").on("change", "input#editarUlt", function(){
  var ultimo = Number($(this).val());
  $("#editarUltimo").val(ultimo);
 })

$("#editarProx").number(true);
$(".formAuto").on("change", "input#editarProx", function(){
  var proximo = Number($(this).val());
  $("#editarProximo").val(proximo);
 })

$("#editarPeri").number(true);
$(".formAuto").on("change", "input#editarPeri", function(){
  var periodo = Number($(this).val());
  $("#editarPeriodo").val(periodo);
 })


/*=============================================
EDITAR SOCIO
=============================================*/
$(".tablas").on("click", ".btnEditarAuto", function(){

  var idAuto = $(this).attr("idAuto");
  console.log("id es:"+idAuto);
  var datos = new FormData();
  datos.append("idAuto", idAuto);

  $.ajax({
    url: "ajax/autos.ajax.php",
    method: "POST",
        data: datos,
        cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success: function(respuesta){
        

        if(respuesta["transmision"] == "Estándar"){

        document.getElementById("editarEstandar").checked = true;



        }else{

        document.getElementById("editarAutomatica").checked = true;

        }

               if(respuesta["folio"] < 10){

          $("#editarAuto").val("A00"+respuesta["folio"]);

               }else if(respuesta["folio"] > 9 && respuesta["folio"] < 100){

                 $("#editarAuto").val("A0"+respuesta["folio"]);

               }else if(respuesta["folio"] > 99 && respuesta["folio"] < 1000){

                 $("#editarAuto").val("A"+respuesta["folio"]);

               }




         $("#Id_auto").val(respuesta["id"]);
         $("#editarId").val(respuesta["id_socio"]);
         $("#editarModelo").val(respuesta["modelo"]);
         $("#editarTemporada").val(respuesta["temporada"]);
         $("#editarColor").val(respuesta["color"]);
         $("#editarPlacas").val(respuesta["placas"]);
         $("#editarVerificacion").val(respuesta["tipo_verificacion"]);
         $("#editarVerificacion").html(respuesta["tipo_verificacion"]);
         $("#editarFechaV").val(respuesta["vigencia_verificacion"]);
         $("#editarLlantas").val(respuesta["medida_llantas"]);
         $("#editarKilometraje").val(respuesta["kilometraje"]);
         $("#editarkm").val(respuesta["kilometraje"]);
         $("#editarUltimo").val(respuesta["ultimo_servicio"]);
         $("#editarUlt").val(respuesta["ultimo_servicio"]);
         $("#editarProximo").val(respuesta["proximo_servicio"]);
         $("#editarProx").val(respuesta["proximo_servicio"]);
         $("#editarPeriodo").val(respuesta["periodo_servicio"]);
         $("#editarPeri").val(respuesta["periodo_servicio"]);
         $("#editarPasajeros").val(respuesta["pasajeros"]);
         $("#editarCilindros").val(respuesta["cilindros"]);
         $("#editarCilindros").html(respuesta["cilindros"]);
                $("#editarVestiduras").val(respuesta["vestiduras"]);
         $("#editarVestiduras").html(respuesta["vestiduras"]);
                $("#editarLlaves").val(respuesta["segunda_llave"]);
         $("#editarLlaves").html(respuesta["segunda_llave"]);
         $("#editarTenencia").val(respuesta["ultima_tenencia"]);
         $("#editarGas").val(respuesta["combustible"]);
                $("#editarGas").html(respuesta["combustible"]);

                $("#editarEstado").val(respuesta["id_estado"]);
                $("#editarMarca").val(respuesta["id_marca"]);


     

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

               $("#editarEstado").html(respuesta2["nombre"]);


            }
            })

               var id_marca = new FormData();
               id_marca.append("id_marca", respuesta["id_marca"]);

               $.ajax({
               url: "ajax/socios.ajax.php",
               method: "POST",
               data: id_marca,
               cache: false,
               contentType: false,
               processData: false,
               dataType:"json",
               success: function(respuesta3){

                     $("#editarMarca").html(respuesta3["nombre"]);


                    }
               })

               var id_autos = new FormData();
               id_autos.append("id_autos", respuesta["id"]);

               $.ajax({
               url: "ajax/autos.ajax.php",
               method: "POST",
               data: id_autos,
               cache: false,
               contentType: false,
               processData: false,
               dataType:"json",
               success: function(respuesta4){
                  
                     $("#id_seguro").val(respuesta4["id"]);
                     $("#editarAseguradora").val(respuesta4["aseguradora"]);
                     $("#editarPoloza").val(respuesta4["num_poliza"]);
                     $("#editarVigencia").val(respuesta4["vigencia"]);
                     $("#editarNumEmergencia").val(respuesta4["num_emergencia"]);


                    }
               })


               var id_precios = new FormData();
               id_precios.append("id_precios", respuesta["id"]);

               $.ajax({
               url: "ajax/autos.ajax.php",
               method: "POST",
               data: id_precios,
               cache: false,
               contentType: false,
               processData: false,
               dataType:"json",
               success: function(respuesta5){

                    $("#id_precios").val(respuesta5[0]["id"]);
                    $("#editarRegular_1").val(respuesta5[0]["regular"]);
                    $("#editarPrecioMinimi_1").val(respuesta5[0]["minimo"]);

                    $("#id_precios2").val(respuesta5[1]["id"]);
                    $("#editarRegular_2").val(respuesta5[1]["regular"]);
                    $("#editarPrecioMinimi_2").val(respuesta5[1]["minimo"]);

                    $("#id_precios3").val(respuesta5[2]["id"]);
                    $("#editarRegular_3").val(respuesta5[2]["regular"]);
                    $("#editarPrecioMinimi_3").val(respuesta5[2]["minimo"]);
                    


                    }
               })




        // ------------------------------------------------


      }

  })


})

/*=============================================
CONFIRMAR DATOS
=============================================*/
$(".tablas").on("click", ".btnSubirArchivos", function(){

      var idAuto = $(this).attr("idAuto");
      var idSocio = $(this).attr("idSocio");

      swal({
          title: '¿Los datos del auto son correctos?',
          text: "¡Una vez guardes los archivos no se podra editar los datos del automóvil!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          cancelButtonText: 'Cancelar',
          confirmButtonText: 'Si, confirmar datos!'
      }).then(function(result){

          if(result.value){

               //window.location = "index.php?ruta=registro-autos&idAuto="+idAuto+"&ids="+idSocio;
                $("#modalAgregarFotos").modal("show");
          }

      })

})


/*=============================================
ELIMINAR AUTOS
=============================================*/
$(".tablas").on("click", ".btnEliminarAuto", function(){

      var idAuto = $(this).attr("idAuto");
      var idSocio = $(this).attr("idSocio");

      swal({
          title: '¿Desea eliminar los datos del vehículo correctos?',
          text: "¡Si no lo está puede cancelar la acción!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          cancelButtonText: 'Cancelar',
          confirmButtonText: 'Si, eliminar datos!'
      }).then(function(result){

          if(result.value){

               window.location = "index.php?ruta=registro-autos&idAutoo="+idAuto+"&id="+idSocio;

          }

      })

})


$(".tablas").on("click",".btnContratos",function(){

     var codigo = $(this).attr("idAuto");
     window.open("controladores/pdf/contratos.php?codigo="+codigo,"_blank");
     console.log(codigo);
})

/*=============================================
EDITAR SOCIO
=============================================*/
$(".tablas").on("click", ".btnAgregarPrecios", function(){

     var idAuto = $(this).attr("idAuto");
     var idSocio = $(this).attr("idSocio");


     var datos = new FormData();
     datos.append("idAuto", idAuto);

     $.ajax({
          url: "ajax/autos.ajax.php",
          method: "POST",
          data: datos,
          cache: false,
          contentType: false,
          processData: false,
          dataType:"json",
          success: function(respuesta){

               $("#id_socio").val(respuesta["id_socio"]);
               $("#id_auto").val(idAuto);

               var id_marca = new FormData();
               id_marca.append("id_marca", respuesta["id_marca"]);

               $.ajax({
               url: "ajax/socios.ajax.php",
               method: "POST",
               data: id_marca,
               cache: false,
               contentType: false,
               processData: false,
               dataType:"json",
               success: function(respuesta2){

                $("#nuevoAutoPrecio").val(respuesta2["nombre"]+"-"+respuesta["modelo"]);
             


                    }
               })

               var idSocio = new FormData();
               idSocio.append("idSocio", respuesta["id_socio"]);

               $.ajax({
               url: "ajax/socios.ajax.php",
               method: "POST",
               data: idSocio,
               cache: false,
               contentType: false,
               processData: false,
               dataType:"json",
               success: function(respuesta3){

                $("#nuevoSocioPrecio").val(respuesta3["nombres"]+" "+respuesta3["apellido_p"]+" "+respuesta3["apellido_m"]);
             


                    }
               })
     

               // ------------------------------------------------


          }

     })


})


/*=============================================
OBTENER PRECIOS-1
=============================================*/
$(".tablas").on("click", ".btnAgregarPrecios", function(){

     var idAuto = $(this).attr("idAuto");
     var id_socio = $(this).attr("idSocio");

     
     $("#id_auto").val(idAuto);
     $("#id_socio").val(id_socio);

})

/*=============================================
NO REPETIR NÚMERO DE PLACAS
=============================================*/
$(".formAuto").on("change", "input#nuevoPlacas", function(){


  $(".alert_placas_auto").remove();
  $(".alert_placa_repetida").remove();

  var placas = $(this).val();

  var datos = new FormData();
  datos.append("validarPlacas", placas);

   $.ajax({
      url:"ajax/autos.ajax.php",
      method:"POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success:function(respuesta){
        
        if(respuesta){

          $("#nuevoPlacas").parent().after('<div class="alert alert-warning alert_placa_repetida">Este número de placas ya existe...</div>');

          $("#nuevoPlacas").val("");

        }

      }

  })
})

$(".formAuto").on("change", "select#Tipo_Pago_Gps", function(){
  var tipo = $(this).val();

  if(tipo == "Pendiente"){
    $("#monto_Gps").val(3600);
    $("#Gps").val(0);
    document.getElementById("monto_Gps").disabled = true; 
    document.getElementById("Gps").disabled = true; 

  }else{
    document.getElementById("monto_Gps").disabled = false; 
    document.getElementById("Gps").disabled = false;
    $("#monto_Gps").val("");
    $("#Gps").val(""); 

  }

})

$(".formAuto").on("change", "input#Gps", function(){
  var monto = Number($(this).val());

  if(monto > 3600){
    $("#Gps").val("");
  }else{
    var resta = 3600 - Number(monto);
    $("#monto_Gps").val(resta);

  }

})



/*=============================================
NO REPETIR NÚMERO DE PLACAS EDITAR
=============================================*/
$(".formAuto").on("change", "input#editarPlacas", function(){


   $(".alert_placas_editar").remove();
  $(".alert_placas_auto").remove();

  var placas = $(this).val();
  var id_auto = $("#Id_auto").val();

  
  var datos = new FormData();
  datos.append("ValidarEditar", placas);
  datos.append("Id_auto_Editar", id_auto);


   // var parametros = {"ValidarEditar" : placas,
   //                  "id_autoEditar" : id_auto};

   $.ajax({
      url:"ajax/autos.ajax.php",
      method:"POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success:function(respuesta){
        console.log(respuesta);
        
        if(respuesta){

          $("#editarPlacas").parent().after('<div class="alert alert-warning alert_placas_editar">Este número de placas ya existe...</div>');

          $("#editarPlacas").val("");

        }

      }

  })
})

/*=============================================
SUBIR ARCHIVOS
=============================================*/
$(".tablas").on("click", ".btnSubirArchivos", function(){

      var idAuto = $(this).attr("idAuto");
      var idSocio = $(this).attr("idSocio");
      $("#id").val(idAuto);
      $("#id_socio").val(idSocio);

})
/*=============================================
AGREGAR AUTO
=============================================*/


const modelo_A = document.getElementById("nuevoModelo_Auto");
const temporada_A = document.getElementById("nuevoTemporada_Auto");
const color_A = document.getElementById("nuevoColor_Auto");
const placas_A = document.getElementById("nuevoPlacas");
// indice_verifi_A = document.getElementById("nuevoVerificacion_Auto").selectedIndex;
const fechaV_A = document.getElementById("nuevoFechaV_Auto");
const llantas_A = document.getElementById("nuevoLlantas_Auto");
const km_A = document.getElementById("nuevokm");
const ultServ_A = document.getElementById("nuevoUlt");
const proxServ_A = document.getElementById("nuevoProx");
const perioricidad_A = document.getElementById("nuevoPeri");
const numPasajeros_A = document.getElementById("nuevoPasajeros");

const transmision_A = document.getElementsByName("nuevoTransmision");

const tenencia_A = document.getElementById("nuevoTenencia");
const seguro_A = document.getElementById("nuevoAseguradora");
const poliza_A = document.getElementById("nuevoPoloza");
const fecha_vigencia_A = document.getElementById("nuevoVigencia");
const num_emergen_A = document.getElementById("nuevoNumEmergencia");

const regular1_A = document.getElementById("nuevoRegular_1");
const minimo1_A = document.getElementById("nuevoPrecioMinimi_1");

const regular2_A = document.getElementById("nuevoRegular_2");
const minimo2_A = document.getElementById("nuevoPrecioMinimi_2");

const regular3_A = document.getElementById("nuevoRegular_3");
const minimo3_A = document.getElementById("nuevoPrecioMinimi_3");

const form_Autos = document.getElementById("formAuto");


form_Autos.addEventListener("submit",e=>{

indice_marca_A = document.getElementById("nuevoMarca_Auto").selectedIndex;

indice_estado_A = document.getElementById("nuevoEstado_Auto").selectedIndex;

indice_verifi_A = document.getElementById("nuevoVerificacion_Auto").selectedIndex;

indice_gas_A = document.getElementById("nuevoGas_Auto").selectedIndex;

indice_cilin_A = document.getElementById("nuevoCilindros").selectedIndex;

indice_piel_A = document.getElementById("nuevoVestiduras").selectedIndex;

indice_llaves_A = document.getElementById("nuevoLlaves").selectedIndex;

e.preventDefault();
$(".alert_marca_auto").remove();
$(".alert_modelo_auto").remove();
$(".alert_año_auto").remove();
$(".alert_color_auto").remove();
$(".alert_placas_auto").remove();
$(".alert_estado_auto").remove();
$(".alert_veri_auto").remove();
$(".alert_fecha_veri_auto").remove();
$(".alert_llantas_auto").remove();
$(".alert_km_auto").remove();
$(".alert_ultimo_auto").remove();
$(".alert_proximo_auto").remove();
$(".alert_perio_auto").remove();
$(".alert_pasajeros_auto").remove();
$(".alert_transmision_auto").remove();
$(".alert_gas_auto").remove();
$(".alert_cilindros_auto").remove();
$(".alert_piel_auto").remove();
$(".alert_llaves_auto").remove();
$(".alert_tenencia_auto").remove();
$(".alert_seguro_auto").remove();
$(".alert_poliza_auto").remove();
$(".alert_fechaVigencia_auto").remove();
$(".alert_emergencia_auto").remove();
$(".alert_regular1_auto").remove();
$(".alert_minimo1_auto").remove();
$(".alert_regular2_auto").remove();
$(".alert_minimo2_auto").remove();
$(".alert_regular3_auto").remove();
$(".alert_minimo3_auto").remove();
var guardar_Auto = false;

var seleccionado_A = false;
for(var i=0; i<transmision_A.length; i++) {
  if(transmision_A[i].checked) {
      seleccionado_A = true;
   
      break;
  }
}

//MARCA
if(indice_marca_A == null || indice_marca_A == 0) {
    $("#nuevoMarca_Auto").parent().after('<div class="alert alert-danger alert_marca_auto"><strong>Selecciona la marca de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(1);
}
//MODELO 
if(modelo_A.value == "") {
    $("#nuevoModelo_Auto").parent().after('<div class="alert alert-danger alert_modelo_auto"><strong>Ingresa el modelo de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(2);
}
//AÑO 
if(temporada_A.value == "") {
    $("#nuevoTemporada_Auto").parent().after('<div class="alert alert-danger alert_año_auto"><strong>Ingresa el año de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(3);
}
//COLOR 
if(color_A.value == "") {
    $("#nuevoColor_Auto").parent().after('<div class="alert alert-danger alert_color_auto"><strong>Ingresa el color de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(4);
}

//PLACAS
if(placas_A.value == "") {
    $("#nuevoPlacas").parent().after('<div class="alert alert-danger alert_placas_auto"><strong>Ingresa el número de placas de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(5);
}
//ESTADO
if(indice_estado_A == null || indice_estado_A == 0) {
    $("#nuevoEstado_Auto").parent().after('<div class="alert alert-danger alert_estado_auto"><strong>Selecciona el estado de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(6);
}
//VERIFICACION 
if(indice_verifi_A == null || indice_verifi_A == 0) {
    $("#nuevoVerificacion_Auto").parent().after('<div class="alert alert-danger alert_veri_auto"><strong>Selecciona el tipo de verificación de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(7);
}
//FECHA VERIFICACION
if(fechaV_A.value == "") {
    $("#nuevoFechaV_Auto").parent().after('<div class="alert alert-danger alert_fecha_veri_auto"><strong>Ingresa la fecha de verificación</strong></div>');
    guardar_Auto = true;
    console.log(8);
}
//LLANTAS
if(llantas_A.value == "") {
    $("#nuevoLlantas_Auto").parent().after('<div class="alert alert-danger alert_llantas_auto"><strong>Ingresa medida de las llantas</strong></div>');
    guardar_Auto = true;
    console.log(9);
}
//KILOMETRAJE
if(km_A.value == "") {
    $("#nuevokm").parent().after('<div class="alert alert-danger alert_km_auto"><strong>Ingresa el kilometraje</strong></div>');
    guardar_Auto = true;
    console.log(10);
}
//ULTIMO SERVICIO
if(ultServ_A.value == "") {
    $("#nuevoUlt").parent().after('<div class="alert alert-danger alert_ultimo_auto"><strong>Ingresa el ultimo servicio</strong></div>');
    guardar_Auto = true;
    console.log(11);
}

//PROXIMO SERVICIO
if(proxServ_A.value == "") {
    $("#nuevoProx").parent().after('<div class="alert alert-danger alert_proximo_auto"><strong>Ingresa el ultimo servicio</strong></div>');
    guardar_Auto = true;
    console.log(12);
}

//PERIODICIDAD 
if(perioricidad_A.value == "") {
    $("#nuevoPeri").parent().after('<div class="alert alert-danger alert_perio_auto"><strong>Ingresa periodicidad de servicios</strong></div>');
    guardar_Auto = true;
    console.log(13);
}
//NUMERO DE PASAJEROS 
if(numPasajeros_A.value == "") {
    $("#nuevoPasajeros").parent().after('<div class="alert alert-danger alert_pasajeros_auto"><strong>Ingresa el número de pasajeros</strong></div>');
    guardar_Auto = true;
    console.log(14);
}
//TRANSMISION
if(!seleccionado_A){

  $("#Alerta_transmision").parent().after('<div class="alert alert-danger alert_transmision_auto"><strong>Seleccionar la transmision de la unidad</strong></div>');
  guardar_Auto = true;
  console.log(15);
}

//COMBUSTIBLE 
if(indice_gas_A == null || indice_gas_A == 0) {
    $("#nuevoGas_Auto").parent().after('<div class="alert alert-danger alert_gas_auto"><strong>Selecciona el combustible de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(16);
}

//NUMERO DE CILINDROS 
if(indice_cilin_A == null || indice_cilin_A == 0) {
    $("#nuevoCilindros").parent().after('<div class="alert alert-danger alert_cilindros_auto"><strong>Selecciona el número de cilindros</strong></div>');
    guardar_Auto = true;
    console.log(17);
}

//VESTIDURAS
if(indice_piel_A == null || indice_piel_A == 0) {
    $("#nuevoVestiduras").parent().after('<div class="alert alert-danger alert_piel_auto"><strong>Selecciona el tipo de vestidura</strong></div>');
    guardar_Auto = true;
    console.log(18);
}

//VESTIDURAS
if(indice_llaves_A == null || indice_llaves_A == 0) {
    $("#nuevoLlaves").parent().after('<div class="alert alert-danger alert_llaves_auto"><strong>Selecciona segundo juego de llaves</strong></div>');
    guardar_Auto = true;
    console.log(19);
}
//TENENCIA 
if(tenencia_A.value == "") {
    $("#nuevoTenencia").parent().after('<div class="alert alert-danger alert_tenencia_auto"><strong>Ingresa la ultima tenencia</strong></div>');
    guardar_Auto = true;
    console.log(20);
}

//ASEGURADORA 
if(seguro_A.value == "") {
    $("#nuevoAseguradora").parent().after('<div class="alert alert-danger alert_seguro_auto"><strong>Ingresa el nombre de la aseguradora</strong></div>');
    guardar_Auto = true;
    console.log(21);
}

//NUMERO DE POLIZA 
if(poliza_A.value == "") {
    $("#nuevoPoloza").parent().after('<div class="alert alert-danger alert_poliza_auto"><strong>Ingresa el número de poliza</strong></div>');
    guardar_Auto = true;
    console.log(22);
}

//FECHA DE VIGENCIA 
if(fecha_vigencia_A.value == "") {
    $("#nuevoVigencia").parent().after('<div class="alert alert-danger alert_fechaVigencia_auto"><strong>Ingresa la fecha de vigencia</strong></div>');
    guardar_Auto = true;
    console.log(23);
}

//NUMERO DE EMERGENCIA 
if(num_emergen_A.value == "") {
    $("#nuevoNumEmergencia").parent().after('<div class="alert alert-danger alert_emergencia_auto"><strong>Ingresa el número de emergencia</strong></div>');
    guardar_Auto = true;
    console.log(24);
}

 
if(regular1_A.value == "") {
    $("#nuevoRegular_1").parent().after('<div class="alert alert-danger alert_regular1_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(25);
}

if(minimo1_A.value == "") {
    $("#nuevoPrecioMinimi_1").parent().after('<div class="alert alert-danger alert_minimo1_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(26);
}

if(regular2_A.value == "") {
    $("#nuevoRegular_2").parent().after('<div class="alert alert-danger alert_regular2_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(27);
}

if(minimo2_A.value == "") {
    $("#nuevoPrecioMinimi_2").parent().after('<div class="alert alert-danger alert_minimo2_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(28);
}

if(regular3_A.value == "") {
    $("#nuevoRegular_3").parent().after('<div class="alert alert-danger alert_regular3_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(29);
}

if(minimo3_A.value == "") {
    $("#nuevoPrecioMinimi_3").parent().after('<div class="alert alert-danger alert_minimo3_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(30);
}


if(!guardar_Auto){

  $.ajax({
      url: "ajax/autos.ajax.php",
      type: "POST",
      data: $("#formAuto").serialize(),
      success: function(res2){

      if(res2){
      console.log(res2);

       swal({
           type: "success",
           title: "El Automóvil ha sido guardado correctamente",
           showConfirmButton: true,
           confirmButtonText: "Cerrar"
           }).then(function(result){
             if (result.value) {

             window.location = "index.php?ruta=registro-autos&id="+res2;
                

             }
           })        
      }
      }
    });
}
});

