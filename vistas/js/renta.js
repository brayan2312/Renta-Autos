// // function diasEnUnMes(mes, año) {
// //   return new Date(año, mes, 0).getDate();
// // }
// function diasEnUnMes(mes, año) {
//   mes = mes.toUpperCase();
//   var meses = ["ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE"];
//   return new Date(año, meses.indexOf(mes) + 1, 0).getDate();
// }
// console.log(diasEnUnMes("FEBRERO","2020"));


/*=============================================
EDITAR DOMICILIO PERSONAL
if(!registro.checked ){
          alert('Debe aceptar el registro');
          return false;
        }
=============================================
$("#formCliente").on("click", "button#Guardar_Renta", function(){


  var num_dias = document.getElementById("num_dias").value;
  var num_horas = document.getElementById("num_horas").value;
  var fecha_regreso = document.getElementById("fecha_regreso").value;
  var hora_regreso = document.getElementById("hora_regreso").value;
  var fecha_salida = document.getElementById("fecha_salida").value;
  var hora_salida = document.getElementById("hora_salida").value;
  var id_auto = document.getElementById("id_auto").value;
  var monto = document.getElementById("input_monto").value;
  var plus = document.getElementById("input_plus").value;
  var factura = document.getElementById("nuevoFactura").value;
  var iva = document.getElementById("radio_iva").value;
  var domicilio = document.getElementById("direccion_particular").value;
  // var tipo = document.getElementById("nuevoTipoFac").value;
  var particular = document.getElementById("direccion_particular").value;
  
  opciones = document.getElementsByName("nuevoFactura");

  var seleccionado = false;
  for(var i=0; i<opciones.length; i++) {
    if(opciones[i].checked) {
      seleccionado = true;
      break;
    }
  }
  opciones_tipo = document.getElementsByName("nuevoTipoFac");

  var seleccionado_tipo = false;
  for(var i=0; i<opciones_tipo.length; i++) {
    if(opciones_tipo[i].checked) {
      seleccionado_tipo = true;
      break;
    }
  }



  var formulario = document.formCliente;

  if(formulario.direccion_particular.value == ""){
    $("#nuevo_BuscarRfcPersonal").parent().after('<div class="alert alert-warning" id="alert_dom">Favor de ingresar el domicilio particular</div>');
    formulario.direccion_particular.focus();
    return false;
  }else{
    $("#alert_dom").remove();
    
  }

  if(!seleccionado) {
    $("#Alerta_Factura").parent().after('<div class="alert alert-warning" id="alert_fac">Favor de seleccionar si solicitara factura</div>');
    formulario.direccion_particular.focus();
    return false;
  }else{

    $("#alert_fac").remove();

  }

  if(!seleccionado_tipo) {
    $("#Alerta_Tipo").parent().after('<div class="alert alert-warning" id="alert_tipo">Favor de seleccionar el tipo de factura</div>');
    formulario.direccion_particular.focus();
    return false;
  }else{

    $("#alert_tipo").remove();

  }

  if(formulario.direccion_fiscal.value == ""){
    $("#nuevo_BuscarRfcMoral").parent().after('<div class="alert alert-warning" id="alert_dom_parti">Favor de ingresar el domicilio particular</div>');
    $("#nuevo_BuscarRfcFisica").parent().after('<div class="alert alert-warning" id="alert_dom_parti_otra">Favor de ingresar el domicilio particular</div>');
    formulario.direccion_fiscal.focus();
    return false;
  }else{
    $("#alert_dom_parti").remove();
    $("#alert_dom_parti_otra").remove();
    
  }




// ......................................................
  if(formulario.nuevoFechaRegreso.value == ""){
    $("#nuevoFechaRegreso").parent().after('<div class="alert alert-warning" id="alert_fecha">Favor de ingresar el R.F.C completo</div>');
    formulario.nuevoFechaRegreso.focus();
    return false;
  }else{
    $("#alert_fecha").remove();
    
  }


  
    $.ajax({
      url: "ajax/rentas.ajax.php",
      type: "POST",
      data: $("#formCliente").serialize(),
      success: function(res){
      
      }
    });
  })
*/
$("#input_monto").number(true);
$("#input_plus").number(true);
$("#Total_label").number(true,2);
$("#Total_Horas_label").number(true,2);
$("#Total_Servi_label").number(true,2);
$("#Total_Sub_label").number(true,2);
$("#Total_Iva_label").number(true,2);
$("#Total_Pagar_label").number(true,2);
$("#Total_Monto").number(true,2);
$("#input_Check").number(true,2);
$("#Total_Debe").number(true,2);
$("#inputPago").number(true,2);


const coche = document.getElementById("CochesDisponibles");
const domicilio = document.getElementById("direccion_particular");
const domicilio_fiscal = document.getElementById("direccion_fiscal");
const fecha_regreso2 = document.getElementById("nuevoFechaRegreso");
const hora_regreso2 = document.getElementById("hora");
const dias = document.getElementById("input_horas");
const monto = document.getElementById("input_monto");
const plus = document.getElementById("input_plus");
const opciones_cobrar = document.getElementsByName("Cobrar");
const opciones_opc = document.getElementsByName("Por");
const precio_hora = document.getElementById("input_precio");
const opciones = document.getElementsByName("nuevoFactura");
const opciones_tipo = document.getElementsByName("nuevoTipoFac");
const opciones_tipo_fiscal = document.getElementsByName("nuevodatosF");
const opciones_iva = document.getElementsByName("radio_iva");
const opc_activo = document.getElementById("por_horas");


const opciones_cobrar_d = document.getElementById("Cobrar");



const form = document.getElementById("formCliente");


  

form.addEventListener("submit",e=>{
  e.preventDefault();
  

 console.log(ChecarSiHayServiciosVacios());
  var guardar = false;
  var seleccionado = false;
  for(var i=0; i<opciones.length; i++) {
    if(opciones[i].checked) {
      seleccionado = true;
      console.log("siiii");
      break;
    }
  }

  var seleccionado_tipo = false;
  for(var i=0; i<opciones_tipo.length; i++) {
    if(opciones_tipo[i].checked) {
      seleccionado_tipo = true;
      console.log("siiii2");
      break;
    }
  }

  var seleccionado_tipo_f = false;
  for(var i=0; i<opciones_tipo_fiscal.length; i++) {
    if(opciones_tipo_fiscal[i].checked) {
      seleccionado_tipo_f = true;
      console.log("siiii2");
      break;
    }
  }

  var seleccionado_cobrar = false;
  for(var i=0; i<opciones_cobrar.length; i++) {
    if(opciones_cobrar[i].checked) {
      seleccionado_cobrar = true;
      console.log("siiii3");
      break;
    }
  }

  var seleccionado_opc = false;
  for(var i=0; i<opciones_opc.length; i++) {
    if(opciones_opc[i].checked) {
      seleccionado_opc = true;
      console.log("siiii3");
      break;
    }
  }

  var seleccionado_iva = false;
  for(var i=0; i<opciones_iva.length; i++) {
    if(opciones_iva[i].checked) {
      seleccionado_iva = true;
      console.log("siiii3");
      break;
    }
  }

  indice = document.getElementById("CochesDisponibles").selectedIndex;
    

  $(".alert_dom").remove();
  $(".alert_fac").remove();
  $(".alert_fac_tipo").remove();
  $(".alert_fac_tipo_2").remove();
  $(".alert_dom_moral").remove();
  $(".alert_cobrar").remove();
  $(".alert_fecha_regreso").remove();
  $(".alert_hora_regreso").remove();
  $(".alert_coches").remove();
  $(".alert_monto").remove();
  $(".alert_plus").remove();
  $(".alert_iva").remove();
  $(".alert_cobrar_opc").remove();
  $(".alert_precio_hora").remove();

  if(domicilio.value == ""){
    $("#nuevo_BuscarRfcPersonal").parent().after('<div class="alert alert-warning alert_dom">Favor de ingresar el domicilio particular</div>');
    guardar = true;
    console.log(1);
  }

  if(!seleccionado) {
    $("#Alerta_Factura").parent().after('<div class="alert alert-warning alert_fac">Favor de seleccionar si solicitara factura</div>');
    guardar = true;
    console.log(2);

  }

  if ($('#nuevoTipoFac').length) {

    if(!seleccionado_tipo){
    

      $("#Alerta_Factura_Tipo").parent().after('<div class="alert alert-warning alert_fac_tipo">Favor de seleccionar un tipo de factura</div>');
      guardar = true;

      console.log(3);

    }
  
  }

  
  if ($('#nuevodatosF').length) {

    if(!seleccionado_tipo_f){
      $("#Alerta_Factura_Tipo_f").parent().after('<div class="alert alert-warning alert_fac_tipo_2">Seleccionar</div>');
      guardar = true;
      console.log(4);
    }
  }  
   
  if(fecha_regreso2.value == ""){
    $("#nuevoFechaRegreso").parent().after('<div class="alert alert-warning alert_fecha_regreso">Favor de ingresar la fecha de regreso</div>');
    guardar = true;
    console.log(6);

  }

  if(hora_regreso2.value == ""){
    $("#horaa").parent().after('<div class="alert alert-warning alert_hora_regreso">Favor de ingresar la hora de regreso</div>');
    guardar = true;
    console.log(7);

  }

  if(!seleccionado_cobrar && opciones_cobrar_d.disabled == false){
    
    $("#Alerta_Cobrar").parent().after('<div class="alert alert-warning alert_cobrar">Seleccione</div>');
    guardar = true;
    console.log(8);

  }

  if(!seleccionado_opc && opc_activo.disabled == false){
    
    $("#Alerta_Cobrar_Opc").parent().after('<div class="alert alert-warning alert_cobrar_opc">Seleccione</div>');
    guardar = true;
    console.log(9);

  }

  if( indice == null || indice == 0 && coche.disabled == false) {
    $("#CochesDisponibles").parent().after('<div class="alert alert-warning alert_coches">Favor de seleccionar una unidad</div>');
    guardar = true;
    console.log(10);

  }

  if(monto.value == "" && monto.disabled == false){
    $("#input_monto").parent().after('<div class="alert alert-warning alert_monto">Favor de ingresar el monto de la unidad</div>');
    guardar = true;
    console.log(11);

  }


  if(plus.value == "" && plus.disabled == false){
    $("#input_plus").parent().after('<div class="alert alert-warning alert_plus">Favor de ingresar el plus</div>');
    guardar = true;
    console.log(12);

  }

  if(!seleccionado_iva){
    
    $("#Alerta_Iva").parent().after('<div class="alert alert-warning alert_iva">Seleccione</div>');
    guardar = true;
    console.log(13);

  }

  if(precio_hora.value == "" && precio_hora.disabled == false){
    $("#input_precio").parent().after('<div class="alert alert-warning alert_precio_hora">Favor de ingresar el plus</div>');
    guardar = true;
    console.log(14);

  }

  if ($('#nuevo_BuscarRfcMoral').length) {
    console.log("si existe");
    if(domicilio_fiscal.value == ""){
      $("#nuevo_BuscarRfcMoral").parent().after('<div class="alert alert-warning alert_dom_moral">Favor de ingresar el domicilio fiscal</div>');
      guardar = true;
      console.log(5);

    }
  }
  if ($('#nuevo_BuscarRfcFisica').length) {
    console.log("si existe");
    if(domicilio_fiscal.value == ""){
      $("#nuevo_BuscarRfcFisica").parent().after('<div class="alert alert-warning alert_dom_moral">Favor de ingresar el domicilio fiscal</div>');
      guardar = true;
      console.log(14);

    }
  }  

  if($('.datos_no').is(':checked') && domicilio_fiscal.value == ""){
      $("#Alerta_Factura_Tipo_f").parent().after('<div class="alert alert-warning alert_dom_moral">Favor de ingresar el domicilio fiscal</div>');
      // guardar = true;
      console.log(15);
      $(".datos_no").prop('checked', false);


    }


  if(!guardar){
    
    $.ajax({
      url: "ajax/rentas.ajax.php",
      type: "POST",
      data: $("#formCliente").serialize(),
      success: function(res){
      console.log(res);
      BloquearCampos();
    $("#Guardar_Renta").parent().children("#btnGardar").html(

          '<button type="button" id="Imprimir_renta" style="margin-top: 3%;" id_renta='+res+' class="btn btn-primary">Imprimir</button>');

      }
    });
  }
    console.log(guardar);
  

})

$(".formCliente").on("click","#Imprimir_renta",function(){

     var id = $(this).attr("id_renta");
     window.open("controladores/pdf/contrato.php?codigo="+id,"_blank");
     console.log(id);
})

$(".formCliente").on("click","#Pagar_renta",function(){
   $("#modalPagos").modal();
    var id = $(this).attr("id_renta");

    var datos = new FormData();
    datos.append("id_renta", id);

    $.ajax({
      url: "ajax/rentas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success: function(respuesta){


        var Factura = Number(respuesta["factura"]);
        var TipoF = Number(respuesta["tipo_factura"]);
        var dias = Number(respuesta["dias"]);
        var totalMonto = Number(respuesta["monto"]) + Number(respuesta["plus"]);
        var sbTotal =  dias * totalMonto; 
        var Horas = Number(respuesta["total_horas"]);
        var Iva = Number(respuesta["iva"]);
        console.log("EL iva es: "+Iva);
        console.log(respuesta["domicilio_particular"]);
        var domicilio = JSON.parse(respuesta["domicilio_particular"]);
        var Servicios = 0;
        var Nombre = domicilio[0]["nombres"]+" "+domicilio[0]["app"]+" "+domicilio[0]["apm"];
        var rfcC = domicilio[0]["rfc"];
        console.log(rfcC);
        if(respuesta["total"] != null){
          Servicios = Number(respuesta["total"]);
        }

        if(Iva == 1){
          var iva = Number((sbTotal + Horas + Servicios) * 0.16);
          var Subtotal = sbTotal + Horas + Servicios + iva;
          console.log("EL Total es: "+Subtotal);
          $("#Total_Monto").val(Subtotal);
        }else{
          var Subtotal = sbTotal + Horas + Servicios;
          console.log("EL Total es: "+Subtotal);
          $("#Total_Monto").val(Subtotal);

        }

        var datos2 = new FormData();
        datos2.append("id_auto", respuesta["id_auto"]);
        $.ajax({
          url: "ajax/rentas.ajax.php",
          method: "POST",
          data: datos2,
          cache: false,
          contentType: false,
          processData: false,
          dataType:"json",
           success: function(respuesta2){

            document.getElementById('Placas_Auto').innerHTML= `Placas: ${respuesta2["placas"]}.`;
            document.getElementById('Modelo_Auto').innerHTML= `Modelo: ${respuesta2["modelo"]} ${respuesta2["nombre"]}.`;
            document.getElementById('Dias_Auto').innerHTML= `Dias: ${respuesta["dias"]}.`;
            $("#id_Renta").val(id);
            document.getElementById('Nombre_Cliente').innerHTML= `Nombre Cliente: ${Nombre}.`;
            document.getElementById('Rfc_Cliente').innerHTML= `RFC: ${rfcC}.`;

            if(Factura == 1){
              var domFac = JSON.parse(respuesta["datos_factura"]);

              $("#Datos_Factura").children("#Datos").html(

                '<div class="panel panel-default">'+
                 '<div class="panel-heading">'+

                  '<label id="Razon_Factura">Razón Social:</label>&nbsp;'+

                  '<label id="Rfc_Factura">RFC:</label><br>'+
                  '<label id="Tipo_Factura">Tipo Factura:</label>'+


                 '</div>'+
                '</div>');
              if(TipoF == 1){
                var empresa = domFac[0]["empresa"];
                var rfc = domFac[0]["rfc"];
                document.getElementById('Razon_Factura').innerHTML= `Razón Social: ${empresa}.`;
                document.getElementById('Rfc_Factura').innerHTML= `RFC: ${rfc}.`;
                document.getElementById('Tipo_Factura').innerHTML= `Tipo Factura: Moral.`;
              }else{

                var nombreF = domFac[0]["nombres"]+" "+domFac[0]["app"]+" "+domFac[0]["apm"];
                var rfc = domFac[0]["rfc"];
                document.getElementById('Razon_Factura').innerHTML= `Razón Social: ${nombreF}.`;
                document.getElementById('Rfc_Factura').innerHTML= `RFC: ${rfc}.`;
                document.getElementById('Tipo_Factura').innerHTML= `Tipo Factura: Fisica.`;


              }

            }


           }
        })

      }

      // *************************************************
    })

    

   

    // if(Iva == 1){

    //   var SubTotal = (TotalA + Horas + Servicios) * 0.16;
    //   console.log("El total es: "+SubTotal);
    //   $("#Total_Monto").val(SubTotal);
    // }else{
    //   var SubTotal = TotalA + Horas + Servicios;
    //   console.log("El total es: "+SubTotal);
    //   $("#Total_Monto").val(SubTotal);
    // }

})
function myChecking() {
  var checkBox = document.getElementById("Checking");

  if (checkBox.checked == true){
    
    $(checkBox).parent().parent().parent().parent().children().children().children(".Chec").html(

          ' <input type="text" class="form-control input-lg" name="input_Check" id="input_Check">');

  } else {

    $(checkBox).parent().parent().parent().parent().children().children().children(".Chec").html(

          '');
    $("#che").val(0);
     
     
  }
}

$(".formCliente").on("change", "input#input_Check", function(){
 var che = Number($(this).val());
 $("#che").val(che);
})

function myFunction() {
  var checkBox = document.getElementById("addDia");

  if (checkBox.checked == true){
    var dias = document.getElementById("num_dias2");
    var nuevo = Number(dias.value) + 1;
    console.log("dias: "+ nuevo);
    $("#num_dias").val(nuevo);
    $("#DiaE").val(1);

    var monto = Number($("#input_monto").val());
    var plus = Number($("#input_plus").val());
    if(monto != "" && plus != ""){
      var TotalRent = (monto + plus) * Number(nuevo);
      var iva = Number($("#TotalIva").val());
      var horas = Number($("#TotalHoras").val());
      var servi = Number($("#TotalServi").val());
      $("#Total_label").val(TotalRent);
      $("#TotalRenta").val(TotalRent);

      var Total_Pagar = TotalRent  + iva + horas + servi;

      $("#TotalPagar").val(Total_Pagar);
      $("#Total_Pagar_label").val(Total_Pagar);

    }

    var precioItem = $(".TotalServicio");

    if(precioItem.length){
      var valor = ChecarSiHayServiciosVacios();
      if(valor == true){

        VolverASumar(nuevo);
      }else{
        console.log("JEJEJE: "+valor)
        VolverASumar(nuevo);

      }

    }



  } else {
     var dias_anterior = $("#num_dias2").val();
    $("#num_dias").val(dias_anterior);
    $("#DiaE").val(0);

    var monto = Number($("#input_monto").val());
    var plus = Number($("#input_plus").val());
    if(monto != "" && plus != ""){
      var TotalRent = (monto + plus) * Number(dias_anterior);
      var iva = Number($("#TotalIva").val());
      var horas = Number($("#TotalHoras").val());
      var servi = Number($("#TotalServi").val());
      $("#Total_label").val(TotalRent);
      $("#TotalRenta").val(TotalRent);
      console.log("Verga es: "+TotalRent);
      var Total_Pagar = TotalRent  + iva + horas + servi;

      $("#TotalPagar").val(Total_Pagar);
      $("#Total_Pagar_label").val(Total_Pagar);

    }

    var precioItem = $(".TotalServicio");

    if(precioItem.length){
      var valor = ChecarSiHayServiciosVacios();
      if(valor == true){

        VolverASumar(dias_anterior);

      }
      else{
        console.log("JEJEJE: "+valor)
        VolverASumar(nuevo);
        
      }
        
    }else{
        console.log("no hay");
        sumarTotalPrecios();

    }

     
  }
}
//nuevoTiempo
$(".formCliente").on("change", "select.nuevoTiempo", function(){
 
  var tiempo = $(this).val();
  console.log("El tiempo es: "+tiempo);
  var vacio = "";
  var nuevoPrecioProducto = $(this).parent().parent().children(".ingresoPrecio").children().children(".TotalServicio");
  var nuevoPrecio = $(this).parent().parent().children(".ingresoCantidad").children(".precioServicio");
  if(tiempo == "0" || tiempo == "1"){
   
    $(nuevoPrecioProducto).attr("tiempo", tiempo);
    $(nuevoPrecio).prop('disabled', false);


  }else{

   $(nuevoPrecioProducto).attr("tiempo", vacio); 
   $(nuevoPrecioProducto).val("");
   $(nuevoPrecio).prop('disabled', true);
   $(nuevoPrecio).val("");
   sumarTotalPrecios();
   var TotalRent = Number($("#TotalRenta").val());
   var iva = Number($("#TotalIva").val());
   var horas = Number($("#TotalHoras").val());
   var servi = Number($("#TotalServi").val());

   var Total_Pagar = TotalRent  + iva + horas + servi;

   $("#TotalPagar").val(Total_Pagar);
   $("#Total_Pagar_label").val(Total_Pagar);
  }


  //para los radios

  //var nuevoPrecioProducto = $(this).parent().parent().parent().children(".ingresoPrecio").children().children(".TotalServicio");


  //para los radios
  //var nuevoPrecioProducto = $(this).parent().parent().parent().children(".ingresoPrecio").children().children(".TotalServicio");

 
})

$(".formCliente").on("change", "select.nuevoServicio2", function(){
  console.log("entro");
  var nombreProducto = $(this).val();
  console.log(nombreProducto);

  var valor = "";
  

  var nuevaDescripcionProducto = $(this).parent().parent().parent().children().children().children(".nuevoServicio2");
  var nuevoTiempo = $(this).parent().parent().parent().children().children(".nuevoTiempo");
  var selectt = $(this).parent().parent().parent().children().children(".nuevoTiempo").children("#tiempoS");
  var precio = $(this).parent().parent().parent().children(".ingresoCantidad").children(".precioServicio");
  var Total = $(this).parent().parent().parent().children(".ingresoPrecio").children().children(".TotalServicio");
  if(nombreProducto != ""){

    $(nuevoTiempo).prop('disabled', false);

  }else{
    
    $(nuevoTiempo).prop('selectedIndex',0);
    $(nuevoTiempo).prop('disabled', true);
    $(precio).prop('disabled', true);
    $(precio).val("");
    $(Total).attr("tiempo",valor);
    $(Total).val("");
    sumarTotalPrecios();


  }
  //para los radios
  //var nuevoPrecioProducto = $(this).parent().parent().parent().children(".ingresoPrecio").children().children(".TotalServicio");

 

  var datos = new FormData();
    datos.append("nombreServicios", nombreProducto);


    $.ajax({

      url:"ajax/rentas.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType:"json",
        success:function(respuesta){
          if(respuesta){
             
            console.log(respuesta);
            $(nuevaDescripcionProducto).attr("idServicio", respuesta["id_servicios"]);
             
            

          }
            
             

        }

      })

  var totalRenta = Number($("#TotalRenta").val());
  var iva = Number($("#TotalIva").val());
  var Thoras = Number($("#TotalHoras").val());
  var servi = Number($("#TotalServi").val());
  var Total_Pagar =totalRenta+Thoras+servi+iva;

  $("#TotalPagar").val(Total_Pagar);
  $("#Total_Pagar_label").val(Total_Pagar);
})

/*=============================================
MODIFICAR LA CANTIDAD
=============================================*/

$(".formCliente").on("change", "input.precioServicio", function(){
 
  var precio = $(this).parent().parent().children(".ingresoPrecio").children().children(".TotalServicio");

  var cantidad = $(this).val();
  var tiempo = precio.attr("tiempo");
  var dias = $("#num_dias").val();
  var nuevoPrecioProducto = $(this).parent().parent().children(".ingresoPrecio").children().children(".TotalServicio");
  if(tiempo == "1" || tiempo == "0"){

    if(tiempo == "1"){
      var precioFinal = Number(dias) * Number(cantidad);
      precio.val(precioFinal);
      $(nuevoPrecioProducto).attr("precio", cantidad);

    }else{

      var precioFinal = 1 * Number(cantidad);
      precio.val(precioFinal);
      $(nuevoPrecioProducto).attr("precio", cantidad);


    }
  }else{
    console.log("Gane....");
    $(this).val("");
  }  
  sumarTotalPrecios();
  listarServicios();
  var total_servicos = $("#TotalServi").val();
  $("#Total_Servi_label").val(total_servicos);
  

  var iva =  Number($("#TotalIva").val());
  
  if(iva == 0){
    var totalRenta = Number($("#TotalRenta").val());
    var horas = Number($("#TotalHoras").val());
    var servi = Number($("#TotalServi").val());
    var Iva = 0;
    var Total = Number(totalRenta + horas + servi);
    $("#Total_Iva_label").val(Iva);
    $("#Total_Sub_label").val(Total);
    $("#TotalPagar").val(Total);
    $("#Total_Pagar_label").val(Total);
  }else{
    var totalRenta = Number($("#TotalRenta").val());
    var horas = Number($("#TotalHoras").val());
    var servi = Number($("#TotalServi").val());
    var Iva = 0;
    var Subtotal = Number(totalRenta + horas + servi);
    var Total = 0;
    Iva = Subtotal * 0.16;
    Total = Subtotal + Iva;

    $("#Total_Iva_label").val(Iva);
    $("#Total_Sub_label").val(Subtotal);
    $("#TotalPagar").val(Total);
    $("#Total_Pagar_label").val(Total);
  }
  
  listarServicios();
})

function listarServicios(){

  var listarServiciosA = [];

  var servicio = $(".nuevoServicio2");
  // var descripcion = $(".nuevaDescripcionProducto");

  var precio = $(".precioServicio");
  // var cantidad = $(".nuevaCantidadProducto");

  var total = $(".TotalServicio");
  // var precio = $(".nuevoPrecioProducto");

  for(var i = 0; i < servicio.length; i++){

    listarServiciosA.push({ "id" : $(servicio[i]).attr("idServicio"), 
                "servicio" : $(servicio[i]).val(),
                "precio" : $(precio[i]).val(),
                "tiempo" : $(total[i]).attr("tiempo"),
                "total" : $(total[i]).val()})

  }

  $("#Servicios_Adicionales").val(JSON.stringify(listarServiciosA)); 

}

$(".formCliente").on("click", "button.quitarServicio", function(){

  $(this).parent().parent().parent().parent().remove();

  if($("#nuevoServicioC").children().length == 0){

    // $("#nuevoImpuestoVenta").val(0);
    $("#TotalServi").val(0);
    var total_servicos = $("#TotalServi").val();
  $("#Total_Servi_label").val("");

    

  }else{
    sumarTotalPrecios();
    listarServicios();
   var total_servicos = $("#TotalServi").val();
  $("#Total_Servi_label").val(total_servicos);


  }

  var iva =  Number($("#TotalIva").val());
  
  if(iva == 0){
    var totalRenta = Number($("#TotalRenta").val());
    var horas = Number($("#TotalHoras").val());
    var servi = Number($("#TotalServi").val());
    var Iva = 0;
    var Total = Number(totalRenta + horas + servi);
    $("#Total_Iva_label").val(Iva);
    $("#Total_Sub_label").val(Total);
    $("#TotalPagar").val(Total);
    $("#Total_Pagar_label").val(Total);
  }else{
    var totalRenta = Number($("#TotalRenta").val());
    var horas = Number($("#TotalHoras").val());
    var servi = Number($("#TotalServi").val());
    var Iva = 0;
    var Subtotal = Number(totalRenta + horas + servi);
    var Total = 0;
    Iva = Subtotal * 0.16;
    Total = Subtotal + Iva;

    $("#Total_Iva_label").val(Iva);
    $("#Total_Sub_label").val(Subtotal);
    $("#TotalPagar").val(Total);
    $("#Total_Pagar_label").val(Total);
  }
  
  

})

var numProducto = 0;

$("#btnAgregarServicio").click(function(){
console.log("jjij");
  numProducto ++;

  var datos = new FormData();
  datos.append("Servicios_a", "ok");

  $.ajax({

    url:"ajax/prueba.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType:"json",
      success:function(respuesta){
            console.log(respuesta);
              $("#nuevoServicioC").append(

            '<div class="row" style="padding:5px 16px">'+
            
            '<div class="col-xs-5" style="padding-right:0px">'+
            
              '<div class="input-group">'+
                
                '<span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarServicio" idServicio><i class="fa fa-times"></i></button></span>'+

                '<select class="form-control nuevoServicio2" id="servicio'+numProducto+'" idServicio name="nuevoServicio2" required>'+

                '<option value="">Seleccione el servicio</option>'+

                '</select>'+  

              '</div>'+

            '</div>'+


            '<div class="col-xs-2">'+             
                    
             

                '<select class="form-control nuevoTiempo" required disabled>'+

                  '<option id="tiempoS">Seleccione</option>'+
                  '<option value="1">Por día</option>'+
                  '<option value="0">Por evento</option>'+

                '</select>'+  

              
   
            '</div> '+

            
            '<!-- Cantidad del producto -->'+

            '<div class="col-xs-2 ingresoCantidad">'+
              
               '<input type="number" class="form-control precioServicio" name="precioServicio" min="1" stock nuevoPrecio required disabled>'+

            '</div>' +






            '<!-- Precio del producto -->'+

            '<div class="col-xs-3 ingresoPrecio" style="padding-left:0px">'+

              '<div class="input-group">'+

                '<span class="input-group-addon"><i class="ion ion-social-usd"></i></span>'+
                   
                '<input type="text" class="form-control TotalServicio" combo="" tiempo="" precio="" name="TotalServicio" readonly required>'+
   
              '</div>'+
               
            '</div>'+
        '</div>'+

          '</div>');


          // AGREGAR LOS PRODUCTOS AL SELECT 

           respuesta.forEach(funcionForEach);

           function funcionForEach(item, index){

          

              $("#servicio"+numProducto).append(

            '<option idServicio="'+item.id_servicios+'" value="'+item.servicio+'">'+item.servicio+'</option>'
              )

        }
}
  })

})

function sumarTotalPrecios(){

  var precioItem = $(".TotalServicio");
  var arraySumaPrecio = [];  

  for(var i = 0; i < precioItem.length; i++){

     arraySumaPrecio.push(Number($(precioItem[i]).val()));
     
  }

  function sumaArrayPrecios(total, numero){

    return total + numero;

  }

  var sumaTotalPrecio = arraySumaPrecio.reduce(sumaArrayPrecios);
  
  $("#TotalServi").val(sumaTotalPrecio);
  $("#Total_Servi_label").val(sumaTotalPrecio);



}

function VolverASumar(dias){

  var precioItem = $(".TotalServicio");
  var arraySumaPrecioT = [];  
  var diasN  = Number(dias);
  var totalT = 0;
console.log("nuevos dias: "+diasN);

  for(var i = 0; i < precioItem.length; i++){

      var tiempo = $(precioItem[i]).attr("tiempo");
      var precio = $(precioItem[i]).attr("precio");

      if(tiempo == "1"){
         totalT = diasN * precio;
         arraySumaPrecioT.push(Number(totalT));
         $(precioItem[i]).val(totalT);
       }else{

        totalT = 1 * precio;
        arraySumaPrecioT.push(Number(totalT));
        $(precioItem[i]).val(totalT);

       }
    
     
  }

    console.log(arraySumaPrecioT.toString());

  function sumaArrayPreciosT(total, numero){

    return total + numero;

  }

  var sumaTotalPrecio = arraySumaPrecioT.reduce(sumaArrayPreciosT);
  console.log("El nuevo Total es: "+sumaTotalPrecio);
  sumarTotalPrecios();

  var TotalRent = Number($("#TotalRenta").val());
  var iva = Number($("#TotalIva").val());
  var horas = Number($("#TotalHoras").val());
  var servi = Number($("#TotalServi").val());

  var Total_Pagar = TotalRent  + iva + horas + servi;

  $("#TotalPagar").val(Total_Pagar);
  $("#Total_Pagar_label").val(Total_Pagar);

}

function ChecarSiHayServiciosVacios(){
  var precioItem = $(".precioServicio");
  var retornar = true;

  for(var i = 0; i < precioItem.length; i++){

      var valor = $(precioItem[i]).val();
      if(valor == ""){
        retornar = false;
     sumarTotalPrecios();

      }

  }
  return retornar;
}

function BloquearCampos(){

  document.getElementById("Guardar_Renta").disabled = true; 
  document.getElementById("btnNuevoCliente").disabled = true; 
  document.getElementById("nuevo_BuscarRfcPersonal").disabled = true; 
  document.getElementById("btnBuscarClientePersonal").disabled = true; 
  $('.si_factura').attr("disabled", true);
  $('.no_factura').attr("disabled", true);
  document.getElementById("nuevoFechaRegreso").disabled = true; 
  document.getElementById("btn-ob").disabled = true; 
  document.getElementById("hora").disabled = true; 
  document.getElementById("CochesDisponibles").disabled = true; 
  document.getElementById("input_monto").disabled = true; 
  document.getElementById("input_plus").disabled = true; 
  $('.no_iva').attr("disabled", true);
  $('.si_iva').attr("disabled", true);
  $('.no_cobrar').attr("disabled", true);
  $('.si_cobrar').attr("disabled", true);
  $('.Por').attr("disabled", true);
  $('.Por_E').attr("disabled", true); 
  document.getElementById("input_precio").disabled = true; 
  document.getElementById("btnAgregarServicio").disabled = true; 

  if ($('#nuevoTipoFac').length) {
    $('.Fac_Moral').attr("disabled", true);
    $('.Fac_Fisica').attr("disabled", true); 
  }

  if ($('#btnNuevoRFC').length) {  
   document.getElementById("btnNuevoRFC").disabled = true;    
  }

  if ($('#nuevo_BuscarRfcMoral').length) {
   document.getElementById("nuevo_BuscarRfcMoral").disabled = true; 
  }

  if ($('#btnBuscarRfc').length) {
   document.getElementById("btnBuscarRfc").disabled = true; 
  }

  if ($('#nuevodatosF').length) {
    $('.datos_no').attr("disabled", true);
    $('.datos_si').attr("disabled", true); 
  }

  if ($('#btnRfcFisicaOtra').length) {
   document.getElementById("btnRfcFisicaOtra").disabled = true; 

  }

  if ($('#nuevo_BuscarRfcFisica').length) {
  document.getElementById("nuevo_BuscarRfcFisica").disabled = true; 

  }
  if ($('#btnBuscarRfcFisica').length) {
  document.getElementById("btnBuscarRfcFisica").disabled = true; 

  }




}

$("#formPagos").on("click", ".btnBuscarContrato", function(){
// RellenarComboEstados();
$("#Pagos").val('[{"tipo":"efectivo","pago":20000}]');
  console.log("si entro");
  var folio = $("#BuscarRenta").val();
  console.log(folio);

  var datos = new FormData();

  datos.append("folio", folio);
  var Subtotal = 0;
  if(folio != ""){
    
    $.ajax({
      url:"ajax/rentas.ajax.php",
      method:"POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success:function(respuesta){
        if(respuesta){
    $("#id_renta").val(respuesta["id_renta"]);
    $("#btn-pagos").attr("idrenta",respuesta["id_renta"]);      
// ------------------------------------------------------------
    var id = respuesta["id_renta"];    
    var datos = new FormData();
    datos.append("id_renta", id);

    $.ajax({
      url: "ajax/rentas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success: function(respuesta){


        var Factura = Number(respuesta["factura"]);
        var TipoF = Number(respuesta["tipo_factura"]);
        var dias = Number(respuesta["dias"]);
        var totalMonto = Number(respuesta["monto"]) + Number(respuesta["plus"]);
        var sbTotal =  dias * totalMonto; 
        var Horas = Number(respuesta["total_horas"]);
        var Iva = Number(respuesta["iva"]);
        console.log("EL iva es: "+Iva);
        console.log(respuesta["domicilio_particular"]);
        var domicilio = JSON.parse(respuesta["domicilio_particular"]);
        var Servicios = 0;
        var Nombre = domicilio[0]["nombres"]+" "+domicilio[0]["app"]+" "+domicilio[0]["apm"];
        var rfcC = domicilio[0]["rfc"];
        console.log(rfcC);
        if(respuesta["total"] != null){
          Servicios = Number(respuesta["total"]);
        }

        if(Iva == 1){
          var iva = Number((sbTotal + Horas + Servicios) * 0.16);
          Subtotal = sbTotal + Horas + Servicios + iva;
          console.log("EL Total es: "+Subtotal);
          $("#Total_Monto").val(Subtotal);
          $("#Total").val(Subtotal);
        }else{
          Subtotal = sbTotal + Horas + Servicios;
          console.log("EL Total es: "+Subtotal);
          $("#Total_Monto").val(Subtotal);
          $("#Total").val(Subtotal);


        }

        var datos2 = new FormData();
        datos2.append("id_auto", respuesta["id_auto"]);
        $.ajax({
          url: "ajax/rentas.ajax.php",
          method: "POST",
          data: datos2,
          cache: false,
          contentType: false,
          processData: false,
          dataType:"json",
           success: function(respuesta2){

            document.getElementById('Placas_Auto').innerHTML= `Placas: ${respuesta2["placas"]}.`;
            document.getElementById('Modelo_Auto').innerHTML= `Modelo: ${respuesta2["modelo"]} ${respuesta2["nombre"]}.`;
            document.getElementById('Dias_Auto').innerHTML= `Dias: ${respuesta["dias"]}.`;
            $("#id_Renta").val(id);
            document.getElementById('Nombre_Cliente').innerHTML= `Nombre Cliente: ${Nombre}.`;
            document.getElementById('Rfc_Cliente').innerHTML= `RFC: ${rfcC}.`;

            if(Factura == 1){
              var domFac = JSON.parse(respuesta["datos_factura"]);

              $("#Datos_Factura").children("#Datos").html(

                '<div class="panel panel-default">'+
                 '<div class="panel-heading">'+

                  '<label id="Razon_Factura">Razón Social:</label>&nbsp;'+

                  '<label id="Rfc_Factura">RFC:</label><br>'+
                  '<label id="Tipo_Factura">Tipo Factura:</label>'+


                 '</div>'+
                '</div>');
              if(TipoF == 1){
                var empresa = domFac[0]["empresa"];
                var rfc = domFac[0]["rfc"];
                document.getElementById('Razon_Factura').innerHTML= `Razón Social: ${empresa}.`;
                document.getElementById('Rfc_Factura').innerHTML= `RFC: ${rfc}.`;
                document.getElementById('Tipo_Factura').innerHTML= `Tipo Factura: Moral.`;
              }else{

                var nombreF = domFac[0]["nombres"]+" "+domFac[0]["app"]+" "+domFac[0]["apm"];
                var rfc = domFac[0]["rfc"];
                document.getElementById('Razon_Factura').innerHTML= `Razón Social: ${nombreF}.`;
                document.getElementById('Rfc_Factura').innerHTML= `RFC: ${rfc}.`;
                document.getElementById('Tipo_Factura').innerHTML= `Tipo Factura: Fisica.`;


              }

            }


           }
        })

      }

   })

    var idR = respuesta["id_renta"];    
    var datosP = new FormData();
    datosP.append("id_renta_pagos", idR);

    $.ajax({
      url: "ajax/rentas.ajax.php",
      method: "POST",
      data: datosP,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success: function(respuesta){

        if(respuesta == false){
          var to = $("#Total_Monto").val();
          $("#Total_Debe").val(to);
        }else{
          $("#PagosT").val(respuesta["pagos"]);

          var pagoss = JSON.parse(respuesta["pagos"]);
          var suma = 0;

            for(var i = 0; i < pagoss.length; i++){
  
              suma = suma + pagoss[i]["pago"];
            }
            var debe = $("#Total_Monto").val();
            console.log(debe);
            var resta = Number(debe) - Number(suma);
            $("#Total_Debe").val(resta);
            
        }
      }

   })

// ------------------------------------------------------------
        }else{
           swal({
           type: "error",
           title: "¡El folio que ingreso no existe",
           showConfirmButton: true,
           confirmButtonText: "Cerrar"
           }).then(function(result){
            
           })
        }
        

      }


})

  }else{

    swal({
       type: "error",
       title: "¡Debe ingrer un folio",
       showConfirmButton: true,
       confirmButtonText: "Cerrar"
       }).then(function(result){
        
       })

  }
 })

$("#formPagos").on("change", "input#inputPago", function(){
var abono = Number($(this).val());
var debe = Number($("#Total_Debe").val());
console.log("EL abono es de: "+abono);

if(abono <= debe){

  
}else{
var abono = $(this).val("");

}
})


function listarPagos(){

  var listarPagos= [];

  listarPagos.push({ "tipo" : $("#FormaPago").val(), 
                      "pago" : Number($("#inputPago").val())})

  $("#Pagos").val(JSON.stringify(listarPagos)); 

}

function JuntasPagos(){

  var listarPagos= [];
  var v1 = JSON.parse($("#PagosT").val());
  var v2 = JSON.parse($("#Pagos").val());

  for(var i = 0; i < v1.length; i++){

   listarPagos.push(v1[i]);
    console.log(v1[i]);
      

  }
  console.log(v2[0]);

  listarPagos.push(v2[0]);

  $("#Abonos").val(JSON.stringify(listarPagos)); 
  // $("#Abonos").val(listarPagos); 
  

}


$("#formPagos").on("click", "button#btn_Pagos", function(){
  indice = document.getElementById("FormaPago").selectedIndex;
  const abono = document.getElementById("inputPago");

  if( indice == null || indice == 0 || abono.value == "" ||abono.value == "0" || abono.value == "0.00") {
    
    console.log("no seas webon")

  }else{
   var deuda = Number($("#Total_Monto").val());
   var resta = Number($("#Total_Debe").val());

   if(deuda == resta){
    // --------------------------------------------

    listarPagos();
    var pagos = $("#Pagos").val();
    var id = $("#id_renta").val();
    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#formPagos").serialize(),
      success: function(res){

        var datos2 = new FormData();
        datos2.append("id_renta_pagos", id);
        $.ajax({
          url: "ajax/rentas.ajax.php",
          method: "POST",
          data: datos2,
          cache: false,
          contentType: false,
          processData: false,
          dataType:"json",
           success: function(respuesta2){
            console.log(respuesta2);
            $("#PagosT").val(respuesta2["pagos"]);

            var pagos = JSON.parse(respuesta2["pagos"]);
            var suma = 0;
            for(var i = 0; i < pagos.length; i++){
  
              suma = suma + pagos[i]["pago"];
            }
            var debe = $("#Total_Monto").val();
            console.log(debe);
            var resta = Number(debe) - Number(suma);
            $("#Total_Debe").val(resta);
            $("#FormaPago").prop('selectedIndex',0);
            $("#inputPago").val("");



           }

        });

     
      }
    });


   //----------------------------------------------
  }else{
    listarPagos();
    JuntasPagos();

    var id = $("#id_renta").val();
    $.ajax({
      url: "ajax/prueba.php",
      type: "POST",
      data: $("#formPagos").serialize(),
      success: function(res){
        console.log(res);
        var datos2 = new FormData();
        datos2.append("id_renta_pagos", id);
        $.ajax({
          url: "ajax/rentas.ajax.php",
          method: "POST",
          data: datos2,
          cache: false,
          contentType: false,
          processData: false,
          dataType:"json",
           success: function(respuesta2){
            console.log(respuesta2);
            var pagos = JSON.parse(respuesta2["pagos"]);
            var suma = 0;
            for(var i = 0; i < pagos.length; i++){
  
              suma = suma + pagos[i]["pago"];
            }
            var debe = $("#Total_Monto").val();
            console.log(debe);
            var resta = Number(debe) - Number(suma);
            $("#Total_Debe").val(resta);
            $("#FormaPago").prop('selectedIndex',0);
            $("#inputPago").val("");


           }

        });

     
      }
    });


  }

    
  }

})

$("#formPagos").on("click","#btn-pagos",function(){

     var id = $(this).attr("idrenta");
     window.open("controladores/pdf/pagos.php?codigo="+id,"_blank");
     console.log(id);
})