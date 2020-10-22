/*=============================================
ADITAR AUTO
=============================================*/


const editarModelo_A = document.getElementById("editarModelo");
const editarTemporada_A = document.getElementById("editarTemporada");
const editarColor_A = document.getElementById("editarColor");
const editarPlacas_A = document.getElementById("editarPlacas");
const editarFechaV_A = document.getElementById("editarFechaV");
const editarLlantas_A = document.getElementById("editarLlantas");
const editarKm_A = document.getElementById("editarkm");
const editarUltServ_A = document.getElementById("editarUlt");
const editarProxServ_A = document.getElementById("editarProx");
const editarPerioricidad_A = document.getElementById("editarPeri");
const editarNumPasajeros_A = document.getElementById("editarPasajeros");
const editarTenencia_A = document.getElementById("editarTenencia");
const editarSeguro_A = document.getElementById("editarAseguradora");
const editarPoliza_A = document.getElementById("editarPoloza");
const editarFecha_vigencia_A = document.getElementById("editarVigencia");
const editarNum_emergen_A = document.getElementById("editarNumEmergencia");
const editarRegular1_A = document.getElementById("editarRegular_1");
const editarMinimo1_A = document.getElementById("editarPrecioMinimi_1");
const editarRegular2_A = document.getElementById("editarRegular_2");
const editarMinimo2_A = document.getElementById("editarPrecioMinimi_2");
const editarRegular3_A = document.getElementById("editarRegular_3");
const editarMinimo3_A = document.getElementById("editarPrecioMinimi_3");

const editarForm_Autos = document.getElementById("editarformAuto");

editarForm_Autos.addEventListener("submit",e=>{

$(".alert_modelo_auto").remove();
$(".alert_año_auto").remove();
$(".alert_color_auto").remove();
$(".alert_placas_auto").remove();
$(".alert_fecha_veri_auto").remove();
$(".alert_llantas_auto").remove();
$(".alert_km_auto").remove();
$(".alert_ultimo_auto").remove();
$(".alert_proximo_auto").remove();
$(".alert_perio_auto").remove();
$(".alert_pasajeros_auto").remove();
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

e.preventDefault();
var guardar_Auto = false;
//MODELO 
if(editarModelo_A.value == "") {
    $("#editarModelo").parent().after('<div class="alert alert-danger alert_modelo_auto"><strong>Ingresa el modelo de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(1);
}
//AÑO 
if(editarTemporada_A.value == "") {
    $("#editarTemporada").parent().after('<div class="alert alert-danger alert_año_auto"><strong>Ingresa el año de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(2);
}
//COLOR 
if(editarColor_A.value == "") {
    $("#editarColor").parent().after('<div class="alert alert-danger alert_color_auto"><strong>Ingresa el color de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(3);
}

//PLACAS
if(editarPlacas_A.value == "") {
    $("#editarPlacas").parent().after('<div class="alert alert-danger alert_placas_auto"><strong>Ingresa el número de placas de la unidad</strong></div>');
    guardar_Auto = true;
    console.log(4);
}

//FECHA VERIFICACION
if(editarFechaV_A.value == "") {
    $("#editarFechaV").parent().after('<div class="alert alert-danger alert_fecha_veri_auto"><strong>Ingresa la fecha de verificación</strong></div>');
    guardar_Auto = true;
    console.log(5);
}
//LLANTAS
if(editarLlantas_A.value == "") {
    $("#editarLlantas").parent().after('<div class="alert alert-danger alert_llantas_auto"><strong>Ingresa medida de las llantas</strong></div>');
    guardar_Auto = true;
    console.log(6);
}
//KILOMETRAJE
if(editarKm_A.value == "") {
    $("#editarkm").parent().after('<div class="alert alert-danger alert_km_auto"><strong>Ingresa el kilometraje</strong></div>');
    guardar_Auto = true;
    console.log(7);
}
//ULTIMO SERVICIO
if(editarUltServ_A.value == "") {
    $("#editarUlt").parent().after('<div class="alert alert-danger alert_ultimo_auto"><strong>Ingresa el ultimo servicio</strong></div>');
    guardar_Auto = true;
    console.log(8);
}

//PROXIMO SERVICIO
if(editarProxServ_A.value == "") {
    $("#editarProx").parent().after('<div class="alert alert-danger alert_proximo_auto"><strong>Ingresa el ultimo servicio</strong></div>');
    guardar_Auto = true;
    console.log(9);
}

//PERIODICIDAD 
if(editarPerioricidad_A.value == "") {
    $("#editarPeri").parent().after('<div class="alert alert-danger alert_perio_auto"><strong>Ingresa periodicidad de servicios</strong></div>');
    guardar_Auto = true;
    console.log(10);
}
//NUMERO DE PASAJEROS 
if(editarNumPasajeros_A.value == "") {
    $("#editarPasajeros").parent().after('<div class="alert alert-danger alert_pasajeros_auto"><strong>Ingresa el número de pasajeros</strong></div>');
    guardar_Auto = true;
    console.log(11);
}


//TENENCIA 
if(editarTenencia_A.value == "") {
    $("#editarTenencia").parent().after('<div class="alert alert-danger alert_tenencia_auto"><strong>Ingresa la ultima tenencia</strong></div>');
    guardar_Auto = true;
    console.log(12);
}

//ASEGURADORA 
if(editarSeguro_A.value == "") {
    $("#editarAseguradora").parent().after('<div class="alert alert-danger alert_seguro_auto"><strong>Ingresa el nombre de la aseguradora</strong></div>');
    guardar_Auto = true;
    console.log(13);
}

//NUMERO DE POLIZA 
if(editarPoliza_A.value == "") {
    $("#editarPoloza").parent().after('<div class="alert alert-danger alert_poliza_auto"><strong>Ingresa el número de poliza</strong></div>');
    guardar_Auto = true;
    console.log(14);
}

//FECHA DE VIGENCIA 
if(editarFecha_vigencia_A.value == "") {
    $("#editarVigencia").parent().after('<div class="alert alert-danger alert_fechaVigencia_auto"><strong>Ingresa la fecha de vigencia</strong></div>');
    guardar_Auto = true;
    console.log(15);
}

//NUMERO DE EMERGENCIA 
if(editarNum_emergen_A.value == "") {
    $("#editarNumEmergencia").parent().after('<div class="alert alert-danger alert_emergencia_auto"><strong>Ingresa el número de emergencia</strong></div>');
    guardar_Auto = true;
    console.log(16);
}

 
if(editarRegular1_A.value == "") {
    $("#editarRegular_1").parent().after('<div class="alert alert-danger alert_regular1_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(17);
}

if(editarMinimo1_A.value == "") {
    $("#editarPrecioMinimi_1").parent().after('<div class="alert alert-danger alert_minimo1_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(18);
}

if(editarRegular2_A.value == "") {
    $("#editarRegular_2").parent().after('<div class="alert alert-danger alert_regular2_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(19);
}

if(editarMinimo2_A.value == "") {
    $("#editarPrecioMinimi_2").parent().after('<div class="alert alert-danger alert_minimo2_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(20);
}

if(editarRegular3_A.value == "") {
    $("#editarRegular_3").parent().after('<div class="alert alert-danger alert_regular3_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(21);
}

if(editarMinimo3_A.value == "") {
    $("#editarPrecioMinimi_3").parent().after('<div class="alert alert-danger alert_minimo3_auto"><strong>Ingresa precio</strong></div>');
    guardar_Auto = true;
    console.log(22);
}

if(!guardar_Auto){
  $.ajax({
      url: "ajax/prueba.php",
      type: "POST",
      data: $("#editarformAuto").serialize(),
      success: function(res){

      if(res){
        // var id = res.slice(2);
      console.log(res);
    
        
  

       swal({
           type: "success",
           title: "Los datos se han actualizado correctamente",
           showConfirmButton: true,
           confirmButtonText: "Cerrar"
           }).then(function(result){
             if (result.value) {

             window.location = "index.php?ruta=registro-autos&id="+res;
                

             }
           })        
      }
      }
    })
}


});