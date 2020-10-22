// for (var i =  1; i <= 15; i++) {
//     console.log("Dia"+i +" = Horas "+24*i);
// }


function BorrarCamposSinDireccion(){
   // $("#NuevoRFC_R").val("");
          
          $("#nuevoCalle_P").val("");
          $("#nuevoExterior_P").val("");
          $("#nuevoInterior_P").val("");
          $("#nuevoColonia_P").val("");
          $("#nuevoCiudad_P").val("");
          $("#nuevoEstado_P").val("");
          $("#nuevoEstado_P").html("Seleccionar Estado");
          $("#nuevoPostal_P").val("");
          $("#nuevoNumero1_P").val("");
          $("#nuevoNumero2_P").val("");
}

function BorrarCamposSinDireccion_fiscal(){
   // $("#NuevoRFC_R").val("");
          
          $("#editarCalle_F").val("");
          $("#editarExterior_F").val("");
          $("#editarInterior_F").val("");
          $("#editarColonia_F").val("");
          $("#editarCiudad_F").val("");
          $("#editarEstado_F").val("");
          $("#editarEstado_F").html("Seleccionar Estado");
          $("#editarPostal_F").val("");
          $("#editarNumero1_F").val("");
          $("#editarNumero2_F").val("");
}

function BorrarCamposSinDireccion_fiscal_2(){
   // $("#NuevoRFC_R").val("");
          
          $("#editarCalle_Y").val("");
          $("#editarExterior_Y").val("");
          $("#editarInterior_Y").val("");
          $("#editarColonia_Y").val("");
          $("#editarCiudad_Y").val("");
          $("#editarEstado_Y").val("");
          $("#editarEstado_Y").html("Seleccionar Estado");
          $("#editarPostal_Y").val("");
          $("#editarNumero1_Y").val("");
          $("#editarNumero2_Y").val("");
}

function HabilitarPersonales_moral(valor){
  
  document.getElementById("EditarRFC_R").disabled = valor;
  document.getElementById("editarEmpresa_R").disabled = valor;
  document.getElementById("editarCorreo_R").disabled = valor;
  document.getElementById("editarCalle_R").disabled = valor;
  document.getElementById("editarExterior_R").disabled = valor;
  document.getElementById("editarInterior_R").disabled = valor;
  document.getElementById("editarColonia_R").disabled = valor;
  document.getElementById("editarCiudad_R").disabled = valor;
  document.getElementById("editarEstado1_R").disabled = valor;
  document.getElementById("editarPostal_R").disabled = valor;
  document.getElementById("editarNumero1_R").disabled = valor;
  document.getElementById("editarNumero2_R").disabled = valor;

}
function HabilitarPersonales(valor){
  
  document.getElementById("nuevoNombre_P").disabled = valor;
  document.getElementById("nuevoApellidoM_P").disabled = valor;
  document.getElementById("nuevoApellidoP_P").disabled = valor;
  document.getElementById("nuevo_Corrreo_P").disabled = valor;
  document.getElementById("nuevoRFC_P").disabled = valor;
  document.getElementById("nuevoCalle_P").disabled = valor;
  document.getElementById("nuevoExterior_P").disabled = valor;
  document.getElementById("nuevoInterior_P").disabled = valor;
  document.getElementById("nuevoColonia_P").disabled = valor;
  document.getElementById("nuevoCiudad_P").disabled = valor;
  document.getElementById("ComboEstado").disabled = valor;
  document.getElementById("nuevoPostal_P").disabled = valor;
  document.getElementById("nuevoNumero1_P").disabled = valor;
  document.getElementById("nuevoNumero2_P").disabled = valor;

}

function HabilitarPersonales_Otro(valor){
  
  document.getElementById("editarNombre_F").disabled = valor;
  document.getElementById("editarApellidoM_F").disabled = valor;
  document.getElementById("editarApellidoP_F").disabled = valor;
  document.getElementById("editar_Corrreo_F").disabled = valor;
  document.getElementById("editarRFC_F").disabled = valor;
  document.getElementById("editarCalle_F").disabled = valor;
  document.getElementById("editarExterior_F").disabled = valor;
  document.getElementById("editarInterior_F").disabled = valor;
  document.getElementById("editarColonia_F").disabled = valor;
  document.getElementById("editarCiudad_F").disabled = valor;
  document.getElementById("estado_F").disabled = valor;
  document.getElementById("editarPostal_F").disabled = valor;
  document.getElementById("editarNumero1_F").disabled = valor;
  document.getElementById("editarNumero2_F").disabled = valor;

}

function HabilitarPersonales_Y(valor){
  
  document.getElementById("editarNombre_Y").disabled = valor;
  document.getElementById("editarApellidoM_Y").disabled = valor;
  document.getElementById("editarApellidoP_Y").disabled = valor;
  document.getElementById("editar_Corrreo_Y").disabled = valor;
  document.getElementById("editarRFC_Y").disabled = valor;
  document.getElementById("editarCalle_Y").disabled = valor;
  document.getElementById("editarExterior_Y").disabled = valor;
  document.getElementById("editarInterior_Y").disabled = valor;
  document.getElementById("editarColonia_Y").disabled = valor;
  document.getElementById("editarCiudad_Y").disabled = valor;
  document.getElementById("estado_Y").disabled = valor;
  document.getElementById("editarPostal_Y").disabled = valor;
  document.getElementById("editarNumero1_Y").disabled = valor;
  document.getElementById("editarNumero2_Y").disabled = valor;

}
function BorrarCamposMoral(){
          $("#NuevoRFC_R").val("");
          $("#nuevoEmpresa_R").val("");
          $("#nuevo_Corrreo_R").val("");
          $("#nuevoCalle_R").val("");
          $("#nuevoExterior_R").val("");
          $("#nuevoInterior_R").val("");
          $("#nuevoColonia_R").val("");
          $("#nuevoCiudad_R").val("");
          $("#nuevoPostal_R").val("");
          $("#nuevoNumero1_R").val("");
          // $("#nuevoEstado_R").val("");
          // $("#nuevoEstado_R").html("");
          $("#nuevoPostal_R").val("");
          $("#nuevoNumero2_R").val("");
}
function HabilitarCamposDomicilio(){
  
  document.getElementById("nuevoCalle_RFC").disabled = false;
  document.getElementById("nuevoExterior_RFC").disabled = false;
  document.getElementById("nuevoInterior_RFC").disabled = false;
  document.getElementById("nuevoColonia_RFC").disabled = false;
  document.getElementById("nuevoCiudad_RFC").disabled = false;
  document.getElementById("nuevoEstado_RFC").disabled = false;
  document.getElementById("nuevoPostal_RFC").disabled = false;
  document.getElementById("nuevoNumero1_RFC").disabled = false;
  document.getElementById("nuevoNumero2_RFC").disabled = false;

}

function DesabilitarCamposDomicilio(){
  
  document.getElementById("nuevoCalle_RFC").disabled = true;
  document.getElementById("nuevoExterior_RFC").disabled = true;
  document.getElementById("nuevoInterior_RFC").disabled = true;
  document.getElementById("nuevoColonia_RFC").disabled = true;
  document.getElementById("nuevoCiudad_RFC").disabled = true;
  document.getElementById("nuevoEstado_RFC").disabled = true;
  document.getElementById("nuevoPostal_RFC").disabled = true;
  document.getElementById("nuevoNumero1_RFC").disabled = true;
  document.getElementById("nuevoNumero2_RFC").disabled = true;

}

function restarHoras(inicio,fin) {


  inicioMinutos = parseInt(inicio.substr(3,2));
  inicioHoras = parseInt(inicio.substr(0,2));
  
  finMinutos = parseInt(fin.substr(3,2));
  finHoras = parseInt(fin.substr(0,2));

  transcurridoMinutos = finMinutos - inicioMinutos;
  transcurridoHoras = finHoras - inicioHoras;
  
  if (transcurridoMinutos < 0) {
    transcurridoHoras--;
    transcurridoMinutos = 60 + transcurridoMinutos;
  }
  
  horas = transcurridoHoras.toString();
  minutos = transcurridoMinutos.toString();
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if (horas.length < 2) {
    horas = "0"+horas;
  }
  
  if(minutos.length == 1){
    return horas+":0"+minutos;
  }else{
    return horas+":"+minutos;
  }

  

}
function Hora(){

var hoy = new Date();

var MM = "0" + (hoy.getMinutes());
MM = MM.substring(MM.length-2, MM.length);
var H = "" + (hoy.getHours());
var HH = "0" + H;
HH = HH.substring(HH.length-2, HH.length);

return HH+":"+MM;

}



// var hoy = f.getDate() + "-"+ (f.getMonth()+1).toString().padStart(2, "0")+ "-" +f.getFullYear();
function fechaDeManana () {
    var hoy = new Date();
    var DIA_EN_MILISEGUNDOS = 24 * 60 * 60 * 1000;
    var manana = new Date(hoy.getTime() + DIA_EN_MILISEGUNDOS);
    return manana.getFullYear()+ "-"+ (manana.getMonth()+1).toString().padStart(2, "0")+ "-" +manana.getDate().toString().padStart(2, "0");
}
var mañana = fechaDeManana();
$("#nuevoFechaRegreso").attr("min",mañana);
console.log("Mañana es: "+mañana);

function RellenarComboEstados(){
	document.getElementById("nuevoEstado_RFC").options.length=0;
  var dat =  "3";


  var datos = new FormData();
  datos.append("ESTADOS", dat);

    $.ajax({
      url: "ajax/clientes.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success: function(respuesta){
        
        document.getElementById("nuevoEstado_RFC").innerHTML += "<option value='' id='nuevoEstado_Act_RFC'></option>"; 

           
       respuesta.forEach(function(element){

         document.getElementById("nuevoEstado_RFC").innerHTML += "<option value='"+element["id"]+"'>"+element["nombre"]+"</option>"; 
      });              
      }
  })
}

function RellenarAutosDisponibles(){
  console.log("yholi");
  document.getElementById("CochesDisponibles").options.length=0;
  var dat =  "3";


  var datos = new FormData();
  datos.append("AUTOS_DISP", dat);

    $.ajax({
      url: "ajax/clientes.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success: function(respuesta){
        console.log(respuesta);
        document.getElementById("CochesDisponibles").innerHTML += "<option value='' id='auos'>Seleccione un auto</option>"; 

           
       respuesta.forEach(function(element){

         document.getElementById("CochesDisponibles").innerHTML += "<option value='"+element["id"]+"'>"+element["nombre"]+"-"+element["modelo"]+"-"+element["color"]+"-"+element["placas"]+"</option>"; 
      });              
      }
  })
}

/*=============================================
	COMBOS DE DOMICILIO
=============================================*/
function RellenarComboDomicilio(id){
var id_cliente = id;
  var datos = new FormData();
  datos.append("id_cliente", id_cliente);

  	$.ajax({
      url: "ajax/clientes.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success: function(respuesta){
        if(respuesta != null){
        	document.getElementById("NuevoDomicilio").innerHTML += "<option value=''>Seleccionar un domicilio</option>"; 
        	respuesta.forEach(function(element){

        	 document.getElementById("NuevoDomicilio").innerHTML += "<option value='"+element["id"]+"'>"+element["calle"]+"</option>"; 
      		}); 
        }else{
        	document.getElementById("NuevoDomicilio").innerHTML += "<option value=''>Debes agregar un domicilio</option>"; 

        }
                    
      }
  })
}
/*=============================================
	COMBO DE CLIENTES
=============================================
function RellenarCombo(){
	document.getElementById("NuevoClientes").options.length=0;
  var dat =  "3";


  var datos = new FormData();
  datos.append("Obtener_clientes", dat);

    $.ajax({
      url: "ajax/clientes.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success: function(respuesta){
        
        document.getElementById("NuevoClientes").innerHTML += "<option value=''>Seleccionar un cliente</option>"; 
      
       respuesta.forEach(function(element){

         document.getElementById("NuevoClientes").innerHTML += "<option value='"+element["id"]+"'>"+element["nombre"]+"</option>"; 
      });              
      }
  })
}*/
/*=============================================
	BOTON AGREGAR CLIENTES
=============================================*/






$("#button_ClienteN").click(function(){
    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#formNuevoCliente").serialize(),
      success: function(res){
        if(res){
          console.log(res);
        	$("#modalNuevoCliente").modal('hide');
        	$("#nuevoNombre_C").val("");
        	$("#nuevoApellidoP_C").val("");
        	$("#nuevoApellidoM_C").val("");
        	$("#nuevo_Corrreo_C").val("");
          $("#nuevoRFC_C").val("");
          $("#nuevoCalle_C").val("");
          $("#nuevoInterior_C").val("");
          $("#nuevoExterior_C").val("");
          $("#nuevoColonia_C").val("");
          $("#nuevoCiudad_C").val("");
          $("#nuevoPostal_C").val("");
          $("#nuevoNumero1_C").val("");
          $("#nuevoNumero2_C").val("");
          $("#nuevoEstado_C").val("");
        	$("#nuevoEstado_C").html("Seleccionar Estadp");
         
            swal({
              type: "success",
              title: "Los datos han sido confirmados",
              showConfirmButton: true,
              confirmButtonText: "Cerrar"
              }).then(function(result){
                  if (result.value) {

                

                  }
                })
          
        	

        }
      }
    });
  });


/*=============================================
	COMBO DE SELECIONAR CLIENTE
=============================================*/
$(".formCliente").on("change","select#NuevoClientes", function(){
	// disabled

 document.getElementById("NuevoDomicilio").options.length=0;
  var id_cliente = $(this).val();
 

if(id_cliente != ""){
	$('.btnNuevoDomicilio').attr("disabled", false);
}else{
	
	$('.btnNuevoDomicilio').attr("disabled", true);

}
RellenarComboDomicilio(id_cliente);
  
})



// $(".formCliente").on("click","input#btnNuevoDomicilio", function(){
// 	console.log("agregaras direccion");
// })
/*=============================================
	BOTON DE AGREGAR DIRECCION
=============================================*/
$("#button_DirecccionN").click(function(){
 document.getElementById("NuevoDomicilio").options.length=0;


  var id_cliente = $("#NuevoClientes").val();
  $("#id_cliente").val(id_cliente);


  $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#formNuevoDireccion").serialize(),
      success: function(res){
      	console.log(res);
        if(res){

        	$("#modalNuevoDomicilio").modal('hide');
        	
        	$("#id_cliente").val("");
        	$("#nuevoCalle_C").val("");
        	$("#nuevoExterior_C").val("");
        	$("#nuevoInterior_C").val("");
        	$("#nuevoColonia_C").val("");
        	$("#nuevoCiudad_C").val("");
        	$("#nuevoEstado_C").val("");
        	$("#nuevoPostal_C").val("");
        	$("#nuevoNumero1_C").val("");
        	$("#nuevoNumero2_C").val("");

        	RellenarComboDomicilio(id_cliente);

        }
      }
    });

 })
$(".formCliente").on("change", "input#nuevoFechaRegreso", function(){
  $(".alert_fecha_regreso").remove();
})

$(".formCliente").on("change", "input#hora", function(){
  $(".alert_hora_regreso").remove();
  
})

/*=============================================
	RADIO BUTTON DE SI OCUPA FACTURA
=============================================*/
$(".formCliente").on("change", "input.si_factura", function(){
$(".alert_fac").remove();

$(this).parent().parent().parent().parent().parent().children("#tipo_factura").html(

    '<div class="form-group">'+
              
            '<div class="input-group">'+
              
              '<h4 id="Alerta_Factura_Tipo">¿Tipo de Factura?</h4>'+
                '<label><input type="radio" class="Fac_Moral" name="nuevoTipoFac" id="nuevoTipoFac" value="1">Moral</label>'+
                 '&nbsp; '+
                '<label><input type="radio" class="Fac_Fisica" name="nuevoTipoFac" id="nuevoTipoFac" value="0">Fisica</label>'+

            '</div>'+

    


    '</div>');

})
/*=============================================
  RADIO BUTTON DE NO OCUPA FACTURA
=============================================*/
$(".formCliente").on("change", "input.no_factura", function(){
$(this).parent().parent().parent().parent().parent().children("#tipo_factura").html('');

})

$(".formCliente").on("change", "input.no_factura", function(){
$(this).parent().parent().parent().parent().parent().children("#datos").html('');

})

$(".formCliente").on("change", "input.no_factura", function(){
$(this).parent().parent().parent().parent().parent().children("#otra_direccion").html('');

})

$(".formCliente").on("change", "input.no_factura", function(){
$(this).parent().parent().parent().parent().parent().parent().children(".factura").html('');

})

/*=============================================
  RADIO BUTTON DE FACTURA FISICA
=============================================********************************/
$(".formCliente").on("change", "input.Fac_Fisica", function(){
$(this).parent().parent().parent().parent().parent().children("#datos").html(

    '<div class="form-group">'+
              
            '<div class="input-group">'+
              
              '<h4 id="Alerta_Factura_Tipo_f">¿Otra persona?</h4>'+
                '<label><input type="radio" class="datos_si" id="nuevodatosF" name="nuevodatosF" value="1">Si</label>'+
                 '&nbsp; '+
                '<label><input type="radio" class="datos_no" id="nuevodatosF" name="nuevodatosF" value="0">No</label>'+

            '</div>'+

    


    '</div>');

})
// elimina la factura moral
$(".formCliente").on("change", "input.Fac_Fisica", function(){
$("#direccion_fiscal").val("");
$(".alert_fac_tipo").remove();

$(this).parent().parent().parent().parent().parent().parent().children(".factura").html('');
})

/*=============================================
  RADIO BUTTON DE FACTURA MORAL
=============================================********************************/
$(".formCliente").on("change", "input.Fac_Moral", function(){
$(this).parent().parent().parent().parent().parent().parent().children(".factura").html(

    '<div class="form-group row">'+

            '<div class="col-xs-12 col-sm-1">'+             

                '<div class="form-group">'+
                  
                  '<div class="input-group">'+
                    
                    '<button type="button" class="btn btn-warning btnNuevoRFC" title="Agregar Nuevo" id="btnNuevoRFC" data-toggle="modal" data-target="#modalNuevoRFCMoral"><i class="fa fa-pencil"></i></button>'+      

                  '</div>'+

                '</div>'+
            '</div>'+
         
            '<div class="col-xs-12 col-sm-9">'+


                '<div class="form-group">'+
                  
                  '<div class="input-group">'+
                  
                    '<span class="input-group-addon"><i class="fas fa-location-arrow"></i></span>'+ 

                    '<input type="text" class="form-control input-lg" id="nuevo_BuscarRfcMoral" name="nuevo_BuscarRfcMoral" placeholder="Ingresa nombre R.F.C">'+

                  '</div>'+

                '</div>'+
            '</div>'+

            '<div class="col-xs-12 col-sm-1">'+             

                '<div class="form-group">'+
                  
                  '<div class="input-group">'+
                    
                    '<button type="button" class="btn btn-warning btnBuscarRfc" title="Agregar Nuevo" id="btnBuscarRfc"><i class="fas fa-search"></i></i></button>'+      

                  '</div>'+

                '</div>'+
            '</div>'+
    '</div>');
var input=  document.getElementById('nuevo_BuscarRfcMoral');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})

})
//ELIMINAR EL CAMPO DE FISICA
$(".formCliente").on("change", "input.Fac_Moral", function(){
$(".alert_fac_tipo").remove();

$(this).parent().parent().parent().parent().parent().children("#datos").html('');

})

//ELIMINAR EL CAMPO DE FISICA
$(".formCliente").on("change", "input.Fac_Moral", function(){
$("#direccion_fiscal").val("");
$(this).parent().parent().parent().parent().parent().children("#otra_direccion").html('');

})


/*=============================================
  RADIO BUTTON CUANDO NO SON LOS LOS MISMO FATOS
=============================================*/
// $(".formCliente").on("change", "input.datos_no", function(){
//   $("#modalEditarRfcFiscal").modal();


// })
/*=============================================
  RADIO BUTTON DE FACTURA FISICA PARA OTRA PERSONA
=============================================********************************/
$(".formCliente").on("change", "input.datos_si", function(){
$(".alert_fac_tipo_2").remove();
$(this).parent().parent().parent().parent().parent().parent().children(".factura").html(

    '<div class="form-group row">'+

            '<div class="col-xs-12 col-sm-1">'+             

                '<div class="form-group">'+
                  
                  '<div class="input-group">'+
                    
                    '<button type="button" class="btn btn-warning btnRfcFisicaOtra" title="Agregar Nuevo" id="btnRfcFisicaOtra" data-toggle="modal" data-target="#modalNuevoRfcFisica"><i class="fa fa-pencil"></i></button>'+      

                  '</div>'+

                '</div>'+
            '</div>'+
         
            '<div class="col-xs-12 col-sm-9">'+


                '<div class="form-group">'+
                  
                  '<div class="input-group">'+
                  
                    '<span class="input-group-addon"><i class="fas fa-location-arrow"></i></span>'+ 

                    '<input type="text" class="form-control input-lg" id="nuevo_BuscarRfcFisica" name="nuevo_BuscarRfcFisica" placeholder="Ingresa nombre R.F.C">'+

                  '</div>'+

                '</div>'+
            '</div>'+

            '<div class="col-xs-12 col-sm-1">'+             

                '<div class="form-group">'+
                  
                  '<div class="input-group">'+
                    
                    '<button type="button" class="btn btn-warning btnBuscarRfcFisica" title="Agregar Nuevo" id="btnBuscarRfcFisica"><i class="fas fa-search"></i></button>'+      

                  '</div>'+

                '</div>'+
            '</div>'+
    '</div>');

})
//CUANDO ES A OTRA PERSONA
$(".formCliente").on("change", "input.datos_no", function(){

$(this).parent().parent().parent().parent().parent().parent().children(".factura").html('');
  
  var rfc = $("#nuevo_BuscarRfcPersonal").val();
  console.log(rfc);

  var datos = new FormData();

  datos.append("rfc_fisica", rfc);

  if(rfc != ""){
    
    $.ajax({
      url:"ajax/clientes.ajax.php",
      method:"POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success:function(respuesta){
        console.log(respuesta);
        $("#modalEditarRfcFiscal").modal();
      

        $("#editar_id_rfc_Y").val(respuesta["id"]);
        $("#editarNombre_Y").val(respuesta["nombre"]);
        $("#editarApellidoP_Y").val(respuesta["app"]);
        $("#editarApellidoM_Y").val(respuesta["apm"]);
        $("#editar_Corrreo_Y").val(respuesta["correo"]);
        $("#editarRFC_Y").val(respuesta["rfc"]);


        var id_cliente = new FormData();
        id_cliente.append("id_clienteF", respuesta["id"]);


          $.ajax({
            url: "ajax/clientes.ajax.php",
            method: "POST",
            data: id_cliente,
            cache: false,
            contentType: false,
            processData: false,
            dataType:"json",
            success: function(respuesta2){
              console.log(respuesta2);
              if(respuesta2 == false){

                $("#dom_regis_Y").val("NO");
                BorrarCamposSinDireccion_fiscal_2();
                document.getElementById("Confirmar_Personal_Y").disabled = true; 

              }else{

                $("#dom_regis_Y").val("SI");
                document.getElementById("Confirmar_Personal_Y").disabled = false; 
                $("#editarCalle_Y").val(respuesta2["calle"]);
                $("#editarExterior_Y").val(respuesta2["num_ext"]);
                $("#editarInterior_Y").val(respuesta2["num_int"]);
                $("#editarColonia_Y").val(respuesta2["colonia"]);
                $("#editarCiudad_Y").val(respuesta2["municipio"]);
                $("#editarPostal_Y").val(respuesta2["codigo_postal"]);
                $("#editarNumero1_Y").val(respuesta2["tel_1"]);
                $("#editarNumero2_Y").val(respuesta2["tel_2"]);
                $("#editarEstado_Y").val(respuesta2["id_estado"]);

                var id_estado = new FormData();
               id_estado.append("id_estado", respuesta2["id_estado"]);


             $.ajax({
               url: "ajax/socios.ajax.php",
               method: "POST",
               data: id_estado,
               cache: false,
               contentType: false,
               processData: false,
               dataType:"json",
                success: function(respuesta3){

                   $("#editarEstado_Y").html(respuesta3["nombre"]);
                   


                }
              })

              }


            }
         })

      }


})

  }else{

  // document.getElementsByClassName("datos_no").checked = false;
  // $("#nuevodatosF").removeAttr('checked');
  $(this).prop('checked', false);


    swal({
       type: "error",
       title: "¡Debe ingrer un RFC",
       showConfirmButton: true,
       confirmButtonText: "Cerrar"
       }).then(function(result){
        
       })

  }

  var input=  document.getElementById('editarRFC_Y');
  input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
  })

})


/*=============================================
  CHECKED PARA EDITAR DOMICILIO PERSONAL

=============================================*/
$("#EditarFisicaOtraDom").on("change", "input#editar_datos_personles_otro", function(){
  console.log("editar");
  var valor = document.getElementById('editar_datos_personles_otro').checked;

  if(valor){
    HabilitarPersonales_Otro(false);
    document.getElementById("Confirmar_Personal_Otro").disabled = true; 
    $(this).parent().children("#Button_Editar_Personal_Otro").html(

      '<button type="button" class="btn btn-primary" id="button_Rfc_Fisica_Otra_Editar">Guardar</button>');
    
  }else{
    document.getElementById("Confirmar_Personal_Otro").disabled = false; 
    HabilitarPersonales_Otro(true);
    $(this).parent().children("#Button_Editar_Personal_Otro").html('');
    var val = $("#dom_regis").val();
    if(val == "NO"){
      document.getElementById("Confirmar_Personal_Otro").disabled = true; 

    }else{
     document.getElementById("Confirmar_Personal_Otro").disabled = false; 

    }
    


  }
})


/*=============================================
  CHECKED PARA EDITAR DOMICILIO MISMO RFC

=============================================*/
$("#EditarFiscal").on("change", "input#editar_datos_personles_Y", function(){
  console.log("editar");
  var valor = document.getElementById('editar_datos_personles_Y').checked;

  if(valor){
    HabilitarPersonales_Y(false);
    document.getElementById("Confirmar_Personal_Y").disabled = true; 
    $(this).parent().children("#Button_Editar_Personal_Y").html(

      '<button type="button" class="btn btn-primary" id="button_Rfc_Fisica_Y_Editar">Guardar</button>');
    
  }else{
    document.getElementById("Confirmar_Personal_Y").disabled = false; 
    HabilitarPersonales_Y(true);
    $(this).parent().children("#Button_Editar_Personal_Y").html('');
    var val = $("#dom_regis_Y_").val();
    if(val == "NO"){
      document.getElementById("Confirmar_Personal_Y").disabled = true; 

    }else{
     document.getElementById("Confirmar_Personal_Y").disabled = false; 

    }
    


  }
})

/*=============================================
  CHECKED PARA EDITAR DOMICILIO PERSONAL

=============================================*/
$("#PersonalRfc").on("change", "input#editar_datos_personles", function(){
  console.log("editar");
  var valor = document.getElementById('editar_datos_personles').checked;

  if(valor){
    HabilitarPersonales(false);
    document.getElementById("Confirmar_Personal").disabled = true; 
    $(this).parent().children("#Button_Editar_Personal").html(

      '<button type="button" class="btn btn-primary" id="button_editar_personales">Guardar</button>');
    
  }else{
    document.getElementById("Confirmar_Personal").disabled = false; 
    HabilitarPersonales(true);
    $(this).parent().children("#Button_Editar_Personal").html('');
    var val = $("#dom_regis_P").val();
    if(val == "NO"){
      document.getElementById("Confirmar_Personal").disabled = true; 

    }else{
     document.getElementById("Confirmar_Personal").disabled = false; 

    }
    


  }
})

/*=============================================
EDITAR DOMICILIO PERSONAL
=============================================*/
$("#PersonalRfc").on("click", "button#button_editar_personales", function(){
// $("#putos").click(function(){
  console.log("click");
    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#PersonalRfc").serialize(),
      success: function(res){
          console.log(res);
        if(res){
         document.getElementById("Confirmar_Personal").disabled = false; 
         document.getElementById("editar_datos_personles").checked = false; 
         $("#editar_datos_personles").parent().children("#Button_Editar_Personal").html('');
         HabilitarPersonales(true);
         $("#dom_regis_P").val("SI");

          
        }
      }
    });
  })

/*=============================================
JSON GUARDAR DATOS-PERSONAL
=============================================*/
$("#PersonalRfc").on("click", "button#Confirmar_Personal", function(){
  $(".alert_dom").remove();
  console.log("CHI");
  var listaDatosPersonales = [];
  var id = $("#id_rfc_personal").val();
  var rfc = $("#nuevoRFC_P").val();
  var nombres = $("#nuevoNombre_P").val();
  var app = $("#nuevoApellidoP_P").val();
  var apm = $("#nuevoApellidoM_P").val();
  var correo = $("#nuevo_Corrreo_P").val();
  var calle = $("#nuevoCalle_P").val();
  var num_ext = $("#nuevoExterior_P").val();
  var num_int = $("#nuevoInterior_P").val();
  var colonia = $("#nuevoColonia_P").val();
  var ciudad = $("#nuevoCiudad_P").val();
  var codigo = $("#nuevoPostal_P").val();
  var id_estado = $("#nuevoEstado_P").val();
  var tel_1 = $("#nuevoNumero1_P").val();
  var tel_2 = $("#nuevoNumero2_P").val();

  listaDatosPersonales.push({ "id" : id,
                  "rfc" : rfc, 
                  "nombres" : nombres,
                  "app" : app,
                  "apm" : apm,
                  "correo" : correo,
                  "calle" : calle,
                  "num_ext" : num_ext,
                  "num_int" : num_int,
                  "colonia" : colonia,
                  "ciudad" : ciudad,
                  "codigo" : codigo,
                  "id_estado" : id_estado,
                  "tel_1" : tel_1,
                  "tel_2" : tel_2})
  $("#direccion_particular").val(JSON.stringify(listaDatosPersonales)); 
          $("#modalRfcPersonal").modal('hide');

    
  })

/*=============================================
JSON GUARDAR DATOS-FISCAL-OTRO
=============================================*/
$("#EditarFisicaOtraDom").on("click", "button#Confirmar_Personal_Otro", function(){
// $("#putos").click(function(){
  console.log("CHI");
  var listaDatosPersonalesFiscal = [];
  var id = $("#editar_id_rfc").val();
  var rfc = $("#editarRFC_F").val();
  var nombres = $("#editarNombre_F").val();
  var app = $("#editarApellidoP_F").val();
  var apm = $("#editarApellidoM_F").val();
  var correo = $("#editar_Corrreo_F").val();
  var calle = $("#editarCalle_F").val();
  var num_ext = $("#nuevoExterior_F").val();
  var num_int = $("#editarInterior_F").val();
  var colonia = $("#editarColonia_F").val();
  var ciudad = $("#editarCiudad_F").val();
  var id_estado = $("#editarEstado_F").val();
  var tel_1 = $("#editarNumero1_F").val();
  var tel_2 = $("#editarNumero2_F").val();

  listaDatosPersonalesFiscal.push({ "id" : id,
                  "rfc" : rfc, 
                  "nombres" : nombres,
                  "app" : app,
                  "apm" : apm,
                  "correo" : correo,
                  "calle" : calle,
                  "num_ext" : num_ext,
                  "num_int" : num_int,
                  "colonia" : colonia,
                  "ciudad" : ciudad,
                  "id_estado" : id_estado,
                  "tel_1" : tel_1,
                  "tel_2" : tel_2})
  $("#direccion_fiscal").val(JSON.stringify(listaDatosPersonalesFiscal)); 
  $("#modalEditarRfcFisica").modal('hide');

    
  })

/*=============================================
JSON GUARDAR DATOS-FISCAL
=============================================*/
$("#EditarFiscal").on("click", "button#Confirmar_Personal_Y", function(){

  console.log("CHI");
  var listaDatosPersonalesFiscal = [];
  var id = $("#editar_id_rfc_Y").val();
  var rfc = $("#editarRFC_Y").val();
  var nombres = $("#editarNombre_Y").val();
  var app = $("#editarApellidoP_Y").val();
  var apm = $("#editarApellidoM_Y").val();
  var correo = $("#editar_Corrreo_Y").val();
  var calle = $("#editarCalle_Y").val();
  var num_ext = $("#nuevoExterior_Y").val();
  var num_int = $("#editarInterior_Y").val();
  var colonia = $("#editarColonia_Y").val();
  var ciudad = $("#editarCiudad_Y").val();
  var id_estado = $("#editarEstado_Y").val();
  var tel_1 = $("#editarNumero1_Y").val();
  var tel_2 = $("#editarNumero2_Y").val();

  listaDatosPersonalesFiscal.push({ "id" : id,
                  "rfc" : rfc, 
                  "nombres" : nombres,
                  "app" : app,
                  "apm" : apm,
                  "correo" : correo,
                  "calle" : calle,
                  "num_ext" : num_ext,
                  "num_int" : num_int,
                  "colonia" : colonia,
                  "ciudad" : ciudad,
                  "id_estado" : id_estado,
                  "tel_1" : tel_1,
                  "tel_2" : tel_2})
  $("#direccion_fiscal").val(JSON.stringify(listaDatosPersonalesFiscal)); 
  $("#modalEditarRfcFiscal").modal('hide');
  $(".alert_fac_tipo_2").remove();
  $(".alert_dom_moral").remove();


    
  })

/*=============================================
JSON GUARDAR DATOS-MORAL
=============================================*/
$("#MoralEditar").on("click", "button#Confirmar_Personal_Moral", function(){
// $("#putos").click(function(){
  console.log("CHI");
  var listaDatosPersonalesMoral = [];
  var id = $("#id_rfc_editar").val();
  var rfc = $("#EditarRFC_R").val();
  var empresa = $("#editarEmpresa_R").val();
  var correo = $("#editarCorreo_R").val();
  var calle = $("#editarCalle_R").val();
  var num_ext = $("#editarExterior_R").val();
  var num_int = $("#editarInterior_R").val();
  var colonia = $("#editarColonia_R").val();
  var ciudad = $("#editarCiudad_R").val();
  var id_estado = $("#editarEstado_R").val();
  var tel_1 = $("#editarNumero1_R").val();
  var tel_2 = $("#editarNumero2_R").val();

  listaDatosPersonalesMoral.push({ "id" : id,
                  "rfc" : rfc, 
                  "empresa" : empresa,
                  "correo" : correo,
                  "calle" : calle,
                  "num_ext" : num_ext,
                  "num_int" : num_int,
                  "colonia" : colonia,
                  "ciudad" : ciudad,
                  "id_estado" : id_estado,
                  "tel_1" : tel_1,
                  "tel_2" : tel_2})
  $("#direccion_fiscal").val(JSON.stringify(listaDatosPersonalesMoral)); 
  $("#modalEditarRFCMoral").modal('hide');

    
  })


/*=============================================
  CHECKED PARA EDITAR DOMICILIO

=============================================*/
$("#MoralEditar").on("change", "input#editar_datos_personles_moral", function(){
  console.log("editar");
  var valor = document.getElementById('editar_datos_personles_moral').checked;

  if(valor){
    HabilitarPersonales_moral(false);
    document.getElementById("Confirmar_Personal_Moral").disabled = true; 
    $(this).parent().children("#Button_Editar_Personal_Moral").html(

      '<button type="button" class="btn btn-primary" id="button_editar_personales_moral">Guardar</button>');
    
  }else{
    document.getElementById("Confirmar_Personal_Moral").disabled = false; 
    HabilitarPersonales_moral(true);
    $(this).parent().children("#Button_Editar_Personal_Moral").html('');
    
  }
})


/*=============================================
	RADIO BUTTON SI NO OCUPA
=============================================*/
$(".formCliente").on("change", "input.no_factura", function(){
  $("#direccion_fiscal").val("");
  $(".alert_fac").remove();

$(this).parent().parent().parent().parent().children(".factura").html(

 		'');


})

// BUSCAR RFC
// INSERT INTO `rfc_facturas` (`id`, `rfc`, `razon`, `calle`, `num_int`, `num_ext`, `colonia`, `municipio`, `id_estado`, `codigo_postal`, `tel_1`, `tel_2`)

$(".formCliente").on("click", ".btnNuevoRFC", function(){
BorrarCamposMoral();
console.log("Borro");
 })

/*=============================================
	BOTON DE BUSCAR DIRECCION DE UN RFC 
=============================================*/
$(".formCliente").on("click", ".btnBuscarRfc", function(){
// RellenarComboEstados();
// BorrarCamposMoral();
	var rfc = $("#nuevo_BuscarRfcMoral").val();
  console.log(rfc);

	if(rfc != ""){
	var datos = new FormData();

	datos.append("rfc_moral_2", rfc);


		$.ajax({
		  url:"ajax/clientes.ajax.php",
		  method:"POST",
		  data: datos,
		  cache: false,
		  contentType: false,
		  processData: false,
		  dataType: "json",
		  success:function(respuesta){
      $("#modalEditarRFCMoral").modal();
        console.log(respuesta)
        // $("#modalEditarRFCMoral").modal();
        // document.getElementById("chec_editar").disabled = false;
        console.log(respuesta["id"]);
        $("#id_rfc_editar").val(respuesta["id"]);
        $("#EditarRFC_R").val(respuesta["rfc"]);
        $("#editarEmpresa_R").val(respuesta["nombre_empresa"]);
        $("#editarCorreo_R").val(respuesta["correo"]);
		  	$("#editarCalle_R").val(respuesta["calle"]);
		  	$("#editarExterior_R").val(respuesta["num_ext"]);
		  	$("#editarInterior_R").val(respuesta["num_int"]);
		  	$("#editarColonia_R").val(respuesta["colonia"]);
		  	$("#editarCiudad_R").val(respuesta["municipio"]);
		  	$("#editarPostal_R").val(respuesta["codigo_postal"]);
		  	$("#editarNumero1_R").val(respuesta["tel_1"]);
		  	$("#editarNumero2_R").val(respuesta["tel_2"]);
		  	$("#editarEstado_R").val(respuesta["id_estado"]);

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

              		 $("#editarEstado_R").html(respuesta2["nombre"]);


         	     	}
    	          })



		    

	    }


})

	}else{

		swal({
			  type: "error",
			  title: "¡Debe ingrer un RFC",
			  showConfirmButton: true,
			  confirmButtonText: "Cerrar"
			  }).then(function(result){
				
			  })

	}

	var input=  document.getElementById('EditarRFC_R');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})


 })
 /*=============================================
  BOTON DE BUSCAR DIRECCION DE UN CLIENTE PERSONAL
=============================================*/
$(".formCliente").on("click", ".btnBuscarClientePersonal", function(){
// RellenarComboEstados();

  console.log("si entro");
  var rfc = $("#nuevo_BuscarRfcPersonal").val();
  console.log(rfc);

  var datos = new FormData();

  datos.append("rfc_fisica", rfc);

  if(rfc != ""){
    
    $.ajax({
      url:"ajax/clientes.ajax.php",
      method:"POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success:function(respuesta){
        if(respuesta){
        
        $("#modalRfcPersonal").modal();

        $("#id_rfc_personal").val(respuesta["id"]);
        $("#nuevoNombre_P").val(respuesta["nombre"]);
        $("#nuevoApellidoP_P").val(respuesta["app"]);
        $("#nuevoApellidoM_P").val(respuesta["apm"]);
        $("#nuevo_Corrreo_P").val(respuesta["correo"]);
        $("#nuevoRFC_P").val(respuesta["rfc"]);


        var id_cliente = new FormData();
        id_cliente.append("id_clienteP", respuesta["id"]);


          $.ajax({
            url: "ajax/clientes.ajax.php",
            method: "POST",
            data: id_cliente,
            cache: false,
            contentType: false,
            processData: false,
            dataType:"json",
            success: function(respuesta2){
              console.log(respuesta2);
              if(respuesta2 == false){
                BorrarCamposSinDireccion();
                $("#dom_regis_P").val("NO");
                document.getElementById("Confirmar_Personal").disabled = true; 


              }else{

                $("#dom_regis_P").val("SI");
                $("#nuevoCalle_P").val(respuesta2["calle"]);
                $("#nuevoExterior_P").val(respuesta2["num_ext"]);
                $("#nuevoInterior_P").val(respuesta2["num_int"]);
                $("#nuevoColonia_P").val(respuesta2["colonia"]);
                $("#nuevoCiudad_P").val(respuesta2["municipio"]);
                $("#nuevoPostal_P").val(respuesta2["codigo_postal"]);
                $("#nuevoNumero1_P").val(respuesta2["tel_1"]);
                $("#nuevoNumero2_P").val(respuesta2["tel_2"]);
                $("#nuevoEstado_P").val(respuesta2["id_estado"]);

                var id_estado = new FormData();
               id_estado.append("id_estado", respuesta2["id_estado"]);


             $.ajax({
               url: "ajax/socios.ajax.php",
               method: "POST",
               data: id_estado,
               cache: false,
               contentType: false,
               processData: false,
               dataType:"json",
                success: function(respuesta3){

                   $("#nuevoEstado_P").html(respuesta3["nombre"]);
                   // $("#modalEditarRfcFisica").modal();


                }
              })

              }


            }
         })

        }else{
           swal({
           type: "error",
           title: "¡El RFC que ingreso no existe",
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
       title: "¡Debe ingrer un RFC",
       showConfirmButton: true,
       confirmButtonText: "Cerrar"
       }).then(function(result){
        
       })

  }

  var input=  document.getElementById('EditarRFC_R');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})


 })

/*=============================================
  BOTON DE BUSCAR DIRECCION DE UN RFC-FISICA-OTRA
=============================================*/
$(".formCliente").on("click", ".btnBuscarRfcFisica", function(){
// RellenarComboEstados();
console.log("si entro");
  var rfc = $("#nuevo_BuscarRfcFisica").val();
console.log(rfc);

  var datos = new FormData();

  datos.append("rfc_fisica", rfc);

  if(rfc != ""){
    
    $.ajax({
      url:"ajax/clientes.ajax.php",
      method:"POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success:function(respuesta){
        console.log(respuesta);
        $("#modalEditarRfcFisica").modal();

        $("#editar_id_rfc").val(respuesta["id"]);
        $("#editarNombre_F").val(respuesta["nombre"]);
        $("#editarApellidoP_F").val(respuesta["app"]);
        $("#editarApellidoM_F").val(respuesta["apm"]);
        $("#editar_Corrreo_F").val(respuesta["correo"]);
        $("#editarRFC_F").val(respuesta["rfc"]);


        var id_cliente = new FormData();
        id_cliente.append("id_clienteF", respuesta["id"]);


          $.ajax({
            url: "ajax/clientes.ajax.php",
            method: "POST",
            data: id_cliente,
            cache: false,
            contentType: false,
            processData: false,
            dataType:"json",
            success: function(respuesta2){
              console.log(respuesta2);
              if(respuesta2 == false){

                $("#dom_regis").val("NO");
                BorrarCamposSinDireccion_fiscal();
              // $('#Confirmar_Personal_Otro').attr("disabled", false);

                document.getElementById("Confirmar_Personal_Otro").disabled = true; 

              }else{

                $("#dom_regis").val("SI");
                $("#editarCalle_F").val(respuesta2["calle"]);
                $("#editarExterior_F").val(respuesta2["num_ext"]);
                $("#editarInterior_F").val(respuesta2["num_int"]);
                $("#editarColonia_F").val(respuesta2["colonia"]);
                $("#editarCiudad_F").val(respuesta2["municipio"]);
                $("#editarPostal_F").val(respuesta2["codigo_postal"]);
                $("#editarNumero1_F").val(respuesta2["tel_1"]);
                $("#editarNumero2_F").val(respuesta2["tel_2"]);
                $("#editarEstado_F").val(respuesta2["id_estado"]);

                var id_estado = new FormData();
               id_estado.append("id_estado", respuesta2["id_estado"]);


             $.ajax({
               url: "ajax/socios.ajax.php",
               method: "POST",
               data: id_estado,
               cache: false,
               contentType: false,
               processData: false,
               dataType:"json",
                success: function(respuesta3){

                   $("#editarEstado_F").html(respuesta3["nombre"]);
                   $("#modalEditarRfcFisica").modal();


                }
              })

              }


            }
         })

      }


})

  }else{

    swal({
       type: "error",
       title: "¡Debe ingrer un RFC",
       showConfirmButton: true,
       confirmButtonText: "Cerrar"
       }).then(function(result){
        
       })

  }

  var input=  document.getElementById('EditarRFC_R');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})


 })

/*=============================================
EDITAR DOMICILIO FACTURA RFC-OTRA
=============================================*/
$("#EditarFisicaOtraDom").on("click", "button#button_Rfc_Fisica_Otra_Editar", function(){

// $("#button_Rfc_Fisica_Otra_Editar").click(function(){
  console.log("click");
    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#EditarFisicaOtraDom").serialize(),
      success: function(res){
          console.log(res);
        if(res){
           document.getElementById("Confirmar_Personal_Otro").disabled = false; 
         document.getElementById("editar_datos_personles_otro").checked = false; 
         $("#editar_datos_personles_otro").parent().children("#Button_Editar_Personal_Otro").html('');
         HabilitarPersonales_Otro(true);
         

        

        }
      }
    });
  });

/*=============================================
EDITAR DOMICILIO FACTURA RFC-MISMA
=============================================*/
$("#EditarFiscal").on("click", "button#button_Rfc_Fisica_Y_Editar", function(){

// $("#button_Rfc_Fisica_Otra_Editar").click(function(){
  console.log("click");
    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#EditarFiscal").serialize(),
      success: function(res){
          console.log(res);
        if(res){
           document.getElementById("Confirmar_Personal_Y").disabled = false; 
         document.getElementById("editar_datos_personles_Y").checked = false; 
         $("#editar_datos_personles_Y").parent().children("#Button_Editar_Personal_Y").html('');
         HabilitarPersonales_Y(true);
         

        

        }
      }
    });
  });


/*=============================================
VALIDACION RFC EDITAR MORAL
=============================================*/
// $(".MoralEditar").on("change", "input#EditarRFC_R", function(){
$("#EditarRFC_R").change(function(){


$(".alert").remove();
var id_rfc_editar = $("#id_rfc_editar").val();



   caracteres = $(this).val();


if(caracteres.length < 13){

     $("#EditarRFC_R").parent().after('<div class="alert alert-warning">Favor de ingresar el R.F.C completo</div>');

      // $("#editarRFC").val("");
  

}else{

  
      
     
      var rfc = $(this).val();
     
      
      var datos = new FormData();
      datos.append("ValidarRfcEditarMoral", rfc);
      datos.append("ValMoral", id_rfc_editar);



       $.ajax({
          url:"ajax/clientes.ajax.php",
          method:"POST",
          data: datos,
          cache: false,
          contentType: false,
          processData: false,
          dataType: "json",
          success:function(respuesta){
            console.log(respuesta);
            
            if(respuesta){

              $("#EditarRFC_R").parent().after('<div class="alert alert-warning">Este RFC ya existe.i..</div>');

              $("#EditarRFC_R").val("");

            }

          }

      })



  

}
})
/*=============================================
  1 Día = 24 Horas
  2 Día = 48 Horas
  3 Día = 72 Horas
  4 Días = 96 Horas
  5 Dias = 120 Horas
  6 Dias = 144 Horas
  7 Dias = 168 Horas
  8 Dias = 192 Horas
  9 Dias = 216 Horas
  10 Dias = 240 Horas
  11 Dias = 264 Horas
  12 Dias = 288 Horas
  13 Dias = 312 Horas
  14 Dias = 336 Horas
  15 Dias = 360 Horas


  Rellenar el Combo de dias
=============================================*/


/*
$(".formCliente").on("click","button.btn-ob", function(){
  $("#aler-horas").remove();
  $("#NumeroHoras").val("");
  $("#PrecioPorHora").val("");
  $("#TotalPrecioHoras").val("");
  $("#hora_nocturna").val("");
  $("#PrecioNocturno").val("");
  document.getElementById("RadioHora").checked = false;
  document.getElementById("RadioNocturna").checked = false;
  // $("#RadioHora").attr("checked",false);
  // $("#RadioNocturna").attr("checked",false);
 var hoy = new Date();
 var hora_regreso = $("#hora").val();
 var hora_regreso2 = convertTime12to24(hora_regreso);
 var hora = new Date(hoy.getTime());
 var fecha_regreso = moment($("#nuevoFechaRegreso").val()+" "+hora_regreso2);
 var fecha_actual = moment(hoy.getFullYear()+ "-"+ (hoy.getMonth()+1).toString().padStart(2, "0")+ "-" +hoy.getDate()+" "+hora_regreso2);
 var num_dias = Number(fecha_regreso.diff(fecha_actual, 'days'), ' horas de diferencia');
 var num_dias2 = num_dias - 1;

  var horas_r = Number(fecha_regreso.diff(fecha_actual, 'hours'));

   console.log(num_dias);

if(num_dias == 1){

  document.getElementById("nuevoDiasRenta").options.length=0;
  document.getElementById("nuevoDiasRenta").innerHTML += "<option value=''>Seleccionar dias</option>"; 
  document.getElementById("nuevoDiasRenta").innerHTML += "<option value='"+num_dias+"'>"+num_dias+" Día</option>"; 

}else if(num_dias == 2){
   document.getElementById("nuevoDiasRenta").options.length=0;
  document.getElementById("nuevoDiasRenta").innerHTML += "<option value=''>Seleccionar dias</option>"; 
  document.getElementById("nuevoDiasRenta").innerHTML += "<option value='"+num_dias+"'>"+num_dias+" Días</option>"; 
  document.getElementById("nuevoDiasRenta").innerHTML += "<option value='"+num_dias2+"'>"+num_dias2+" Día</option>"; 
}else if(num_dias > 2){
   document.getElementById("nuevoDiasRenta").options.length=0;
  document.getElementById("nuevoDiasRenta").innerHTML += "<option value=''>Seleccionar dias</option>"; 
  document.getElementById("nuevoDiasRenta").innerHTML += "<option value='"+num_dias+"'>"+num_dias+" Días</option>"; 
  document.getElementById("nuevoDiasRenta").innerHTML += "<option value='"+num_dias2+"'>"+num_dias2+" Días</option>"; 
}
  var ggg = moment("2020-02-14 18:00");
var gg = moment("2020-02-13 13:25");

// console.log("Numero de Horas"+fecha_regreso.diff(fecha_actual, 'hours'));
// console.log("Numero de Horas"+ggg.diff(gg, 'hours'));


})*/

$('.timepicker').timepicker({
    defaultTime: false,
    Timeformat: 'HH:mm'
  })




const convertTime12to24 = (time12h) => {
  const [time, modifier] = time12h.split(' ');

  let [hours, minutes] = time.split(':');

  if (hours === '12') {
    hours = '00';
  }

  if (modifier === 'PM') {
    hours = parseInt(hours, 10) + 12;
  }

  return `${hours}:${minutes}`;
}

/*=============================================
  SI LA ANTICIPACÍON FUE NOCTURNA
=============================================*/
$(".formCliente").on("change", "input#RadioNocturna", function(){
$("#aler-horas").remove();


  console.log("Anticipacion NOCTURNA");
})
/*=============================================
  SI LA ANTICIPACÍON FUE POR HORA
=============================================*/
$(".formCliente").on("change", "input#RadioHora", function(){

$("#aler-horas").remove();

 var hora = $("#hora").val();
 var hora_inicio = convertTime12to24(hora);
 var hora_compu  = Hora();
 console.log("Hora de salidad "+hora_inicio);
 console.log("Hora Anticipada "+hora_compu)
 console.log("Tiempo anticipado: "+restarHoras(hora_compu,hora_inicio));
 var horas_anticipacion = restarHoras(hora_compu,hora_inicio);
 if(horas_anticipacion == "NaN:NaN"){

 }else{
  $("#NumeroHoras").parent().after('<div class="alert alert-warning" id="aler-horas">'+horas_anticipacion+'</div>');

 }

})

$(".formCliente").on("change", "input#PrecioPorHora", function(){

$("#hora_nocturna").val("")
$("#PrecioNocturno").val("")
 var horas = Number($("#NumeroHoras").val());
 var precio = Number($("#PrecioPorHora").val());
 var total = horas * precio;
 $("#TotalPrecioHoras").val(total);

})

/*=============================================
VALIDACION RFC-FACTURA
=============================================*/
$("#formNuevoRfcDireccionMoral").on("change", "input#NuevoRFC_R", function(){
$(".alert").remove();
caracteres = $(this).val();

if(caracteres.length < 13){

     $("#NuevoRFC_R").parent().after('<div class="alert alert-warning">Favor de ingresar el R.F.C completo</div>'); 

}else{

      console.log("chi");

      var rfc = $(this).val();
        console.log(rfc);
     
      
      var datos = new FormData();
      datos.append("ValidarRfc_Fac", rfc);



       $.ajax({
          url:"ajax/clientes.ajax.php",
          method:"POST",
          data: datos,
          cache: false,
          contentType: false,
          processData: false,
          dataType: "json",
          success:function(respuesta){
            console.log(respuesta);
            
            if(respuesta){

              $("#NuevoRFC_R").parent().after('<div class="alert alert-warning">Este RFC ya existe...</div>');

              $("#NuevoRFC_R").val("");

            }

          }

      })
}
})
/*=============================================
AGREGAR DOMICILIO  EDITAR FACTURA RFC 
=============================================*/
// $("#button_editar_personales_moral").click(function(){
$("#MoralEditar").on("click", "button#button_editar_personales_moral", function(){

  console.log("click");
    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#MoralEditar").serialize(),
      success: function(res){
        if(res){
          console.log(res);
          document.getElementById("Confirmar_Personal_Moral").disabled = false; 
         document.getElementById("editar_datos_personles_moral").checked = false; 
         $("#editar_datos_personles_moral").parent().children("#Button_Editar_Personal_Moral").html('');
         HabilitarPersonales_moral(true);
         
          
         

        

        }
      }
    });
  });

/*=============================================
AGREGAR DOMICILIO FACTURA RFC  MORAL
=============================================*/
$("#button_Rfc_Moral").click(function(){
  console.log("click");
    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#formNuevoRfcDireccionMoral").serialize(),
      success: function(res){
        if(res){
          console.log(res);
          // $("#modalNuevoRFCMoral").modal('hide');
         

        

        }
      }
    });
  });

/*=============================================
AGREGAR DOMICILIO FACTURA FISICA OTRA 
=============================================*/
$("#button_Rfc_Fisica_Otra").click(function(){
  console.log("FISICA");
    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#FisicaOtraDom").serialize(),
      success: function(res){
        if(res){
          console.log(res);
          $("#modalNuevoRfcFisica").modal('hide');
         

        

        }
      }
    });
  });


/*=============================================
VALIDACION RFC-CLIENTE
=============================================*/
$("#formNuevoCliente").on("change", "input#NuevoRFC_C", function(){
$(".alert").remove();
caracteres = $(this).val();

if(caracteres.length < 13){

     $("#NuevoRFC_C").parent().after('<div class="alert alert-warning">Favor de ingresar el R.F.C completO</div>'); 

}else{
      var rfc = $(this).val();
         
      var datos = new FormData();
      datos.append("ValidarRfc_ClienteE", rfc);



       $.ajax({
          url:"ajax/clientes.ajax.php",
          method:"POST",
          data: datos,
          cache: false,
          contentType: false,
          processData: false,
          dataType: "json",
          success:function(respuesta){
            console.log(respuesta);
            
            if(respuesta){
                console.log(respuesta);
              $("#NuevoRFC_C").parent().after('<div class="alert alert-warning">Este RFC ya existe...</div>');

              $("#NuevoRFC_C").val("");

            }

          }

      })
}
})
/*=============================================
ACTUALIZAR DATOS DEL DOMICILIO FACTURA-RFC 
=============================================*/
$(".formCliente").on("click", "button#btn-editar-direc", function(){
// RellenarComboEstados();

    var id  = $("#id_facturas").val();
    var id_es  = $("#nuevoEstado_RFC").val();

    $.ajax({
      url: "ajax/clientes.ajax.php",
      type: "POST",
      data: $("#formCliente").serialize(),
      success: function(res){
        if(res){
          console.log(res);
          // --------------------------------------------------

          var datos = new FormData();

          datos.append("id_rfc", id);

          $.ajax({
            url:"ajax/clientes.ajax.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success:function(respuesta){
              console.log(respuesta);


              $("#id_facturas").val(respuesta["id"]);
              $("#nuevoCalle_RFC").val(respuesta["calle"]);
              $("#nuevoExterior_RFC").val(respuesta["num_ext"]);
              $("#nuevoInterior_RFC").val(respuesta["num_int"]);
              $("#nuevoColonia_RFC").val(respuesta["colonia"]);
              $("#nuevoCiudad_RFC").val(respuesta["municipio"]);
              $("#nuevoPostal_RFC").val(respuesta["codigo_postal"]);
              $("#nuevoNumero1_RFC").val(respuesta["tel_1"]);
              $("#nuevoNumero2_RFC").val(respuesta["tel_2"]);
              $("#nuevoEstado_Act_RFC").val(respuesta["id_estado"]);

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
                  console.log("si entro");
                  DesabilitarCamposDomicilio();
                  document.getElementById("chec_editar").checked = false;
                  // document.getElementById("chec_editar").checked = true;
                  $("#chec_editar").parent().children("#boton_editar").html('');


                  $("#nuevoEstado_Act_RFC").html(respuesta2["nombre"]);


                  }
                })

            }
          })

          // --------------------------------------------------

        }
      }
    });
  });

// ........................................................
const fecha_regreso = document.getElementById("nuevoFechaRegreso");
const hora_regreso = document.getElementById("hora");

document.getElementById("btn-ob").addEventListener("click", function(){
  var com = $("#combo").val();
  if(com=="0"){
     RellenarAutosDisponibles();
    $("#combo").val(1)
  }else{

  }
  $(".alert_fecha_regreso").remove();
  $(".alert_hora_regreso").remove();
  
  if($("#nuevoFechaRegreso").val() == "" || $("#hora").val() == ""){
    if($("#nuevoFechaRegreso").val() == ""){
      $("#nuevoFechaRegreso").parent().after('<div class="alert alert-warning alert_fecha_regreso">Favor de ingresar la fecha de regreso</div>');   
    }
    if($("#hora").val() == ""){
      $("#horaa").parent().after('<div class="alert alert-warning alert_hora_regreso">Favor de ingresar la hora de regreso</div>');
    }
  }else{
    var mañana = fechaDeManana();
    var fechR = $("#nuevoFechaRegreso").val();
    if(mañana <= fechR){
      $("#alert_fecha_regreso").remove();
      $("#alert_dias").remove();
      document.getElementById("CochesDisponibles").disabled = false;
      document.getElementById("addDia").disabled = false;
      document.getElementById("btnAgregarServicio").disabled = false;
      $("#addDia").prop('checked', false); 
      let date = new Date();
      let day = date.getDate();
      let month = date.getMonth() + 1;
      let year = date.getFullYear();
      if(month > 0 && month < 10){
        month = `0${month}`;
      }
      var fecha_hoy = (`${year}-${month}-${day}`);
      var hoy = new Date();
      var hora_regreso = $("#hora").val();
      var hora_regreso2 = convertTime12to24(hora_regreso);
      var hora = new Date(hoy.getTime());
      var fecha_regreso = moment($("#nuevoFechaRegreso").val()+" "+hora_regreso2);
      var fecha_actual = moment(hoy.getFullYear()+ "-"+ (hoy.getMonth()+1).toString().padStart(2, "0")+ "-" +hoy.getDate()+" "+Hora());
      var num_dias = Number(fecha_regreso.diff(fecha_actual, 'days'), ' horas de diferencia');
      var num_dias2 = num_dias - 1;
      var horas_r = Number(fecha_regreso.diff(fecha_actual, 'hours'));
      var horas_r2 = Number(fecha_regreso.diff(fecha_actual, 'hours'));
      var horas_ren = num_dias * 24;
      var horas_renta = horas_r2 - horas_ren;
      
      $("#input_horas").val(horas_renta);
      $("#dias").parent().after('<div class="alert alert-warning" id="alert_dias">Dias '+num_dias+' & '+horas_renta+' Horas--NO > 16H </div>');
      $("#num_dias").val(num_dias);
      $("#num_dias2").val(num_dias);
      $("#num_horas").val(horas_renta);
      $("#fecha_salida").val(fecha_hoy);
      $("#hora_salida").val(Hora());
      var regreso = $("#nuevoFechaRegreso").val();
      $("#fecha_regreso").val(regreso);
      $("#hora_regreso").val(hora_regreso2);
      $(".si_cobrar").prop('disabled', false);
      $(".no_cobrar").prop('disabled', false);
      var valorH = document.getElementById('por_horas').checked;
      if(valorH){
        var precio = Number($("#input_precio").val());
        var totalH = Number(horas_renta) * Number(precio);
        $("#input_total").val(totalH);
        $("#TotalHoras").val(totalH);
        $("#Total_Horas_label").val(totalH);
      }
      var precioItem1 = $(".TotalServicio");
        if(precioItem1.length){
          var valor = ChecarSiHayServiciosVacios2();
          if(valor == true){
            VolverASumarServicios2(num_dias);
          }else{
            VolverASumarServicios2(num_dias);
          }
        }
        var precioItem = $(".TotalServicio");
        if(precioItem.length){
          var valor = ChecarSiHayServiciosVacios2();
          if(valor == true){
            VolverASumarServicios2(num_dias);
          }else{
            VolverASumarServicios2(num_dias);
          }
        }
      var monto = Number($("#input_monto").val());
      var plus = Number($("#input_plus").val());
      if(monto != "" && plus != ""){
        var TotalRent = (monto + plus) * Number(num_dias);
        $("#TotalRenta").val(TotalRent);
        var iva =  Number($("#TotalIva").val());
        if(iva == 0){
          var totalRenta = Number($("#TotalRenta").val());
          var horas = Number($("#TotalHoras").val());
          var servi = Number($("#TotalServi").val());
          var Iva = 0;
          var Total = Number(totalRenta + horas + servi);

          $("#Total_label").val(totalRenta);
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
          $("#Total_label").val(totalRenta);
          $("#Total_Iva_label").val(Iva);
          $("#Total_Sub_label").val(Subtotal);

          $("#TotalPagar").val(Total);
          $("#Total_Pagar_label").val(Total);
        }
      }
    }else{
      $("#nuevoFechaRegreso").parent().after('<div class="alert alert-warning alert_fecha_regreso">La fecha que ingreso es invalidad</div>');
    }
  }
});




$(".formCliente").on("change", "input.si_cobrar", function(){

  document.getElementById("por_horas").disabled = false;
  document.getElementById("por_evento").disabled = false;


})

$(".formCliente").on("change", "input.no_cobrar", function(){
  $(".alert_cobrar_opc").remove();
  $(".alert_precio_hora").remove();
  document.getElementById("por_horas").disabled = true;
  document.getElementById("por_evento").disabled = true;
  document.getElementById("input_precio").disabled = true;
  $("#input_precio").val("");
  $("#input_total").val("");

  document.getElementById("por_horas").checked = false;
  document.getElementById("por_evento").checked = false;
  $("#Total_Horas_label").val(0);
  $("#TotalHoras").val(0);

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

$(".formCliente").on("change", "input#por_horas", function(){
  $(".alert_cobrar_opc").remove();
  $("#input_precio").val("");
  $("#input_total").val("");

  $("#Total_Horas_label").val(0);
  $("#TotalHoras").val(0);
  $("#input_total").val("");
  document.getElementById("input_precio").disabled = false;

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

$(".formCliente").on("change", "input#por_evento", function(){
  $(".alert_cobrar_opc").remove();
  $("#input_precio").val("");
  $("#input_total").val("");

  $("#Total_Horas_label").val(0);
  $("#TotalHoras").val(0);
  document.getElementById("input_precio").disabled = false;

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



$(".formCliente").on("change", "input#input_precio", function(){
var radios = $(".Por").val();
var valor = document.getElementById('por_horas').checked;


if(valor){
  var monto = Number($("#input_monto").val());
  var plus = Number($("#input_plus").val());

  if(monto != "" && plus != ""){

    var horas = Number($("#input_horas").val());
    var precio = Number($(this).val());
    var totalH = Number(horas) * Number(precio);
    $("#input_total").val(totalH);
    $("#TotalHoras").val(totalH);


    var iva =  Number($("#TotalIva").val());
  
    if(iva == 0){
      var totalRenta = Number($("#TotalRenta").val());
      var horas = Number($("#TotalHoras").val());
      var servi = Number($("#TotalServi").val());
      var Iva = 0;
      var Total = Number(totalRenta + horas + servi);

      $("#Total_label").val(totalRenta);
      $("#Total_Iva_label").val(Iva);
      $("#Total_Sub_label").val(Total);
      $("#TotalPagar").val(Total);
      $("#Total_Pagar_label").val(Total);
      $("#Total_Horas_label").val(horas);
    }else{
      var totalRenta = Number($("#TotalRenta").val());
      var horas = Number($("#TotalHoras").val());
      var servi = Number($("#TotalServi").val());
      var Iva = 0;
      var Subtotal = Number(totalRenta + horas + servi);
      var Total = 0;
      Iva = Subtotal * 0.16;
      Total = Subtotal + Iva;

      $("#Total_label").val(totalRenta);
      $("#Total_Iva_label").val(Iva);
      $("#Total_Sub_label").val(Subtotal);
      $("#TotalPagar").val(Total);
      $("#Total_Pagar_label").val(Total);
      $("#Total_Horas_label").val(horas);

    }
  }
  
  

}else{
  
  var monto = Number($("#input_monto").val());
  var plus = Number($("#input_plus").val());
  if(monto != "" && plus != ""){
    $("#TotalHoras").val(0);
    var precio2 = Number($(this).val());
    $("#input_total").val(precio2);
    $("#TotalHoras").val(precio2);

    var iva =  Number($("#TotalIva").val());
  
    if(iva == 0){
      var totalRenta = Number($("#TotalRenta").val());
      var horas = Number($("#TotalHoras").val());
      var servi = Number($("#TotalServi").val());
      var Iva = 0;
      var Total = Number(totalRenta + horas + servi);
      $("#TotalRenta").val(totalRenta);
      $("#Total_Iva_label").val(Iva);
      $("#Total_Sub_label").val(Total);
      $("#TotalPagar").val(Total);
      $("#Total_Pagar_label").val(Total);
      $("#Total_Horas_label").val(horas);

    }else{
      var totalRenta = Number($("#TotalRenta").val());
      var horas = Number($("#TotalHoras").val());
      var servi = Number($("#TotalServi").val());
      var Iva = 0;
      var Subtotal = Number(totalRenta + horas + servi);
      var Total = 0;
      Iva = Subtotal * 0.16;
      Total = Subtotal + Iva;

      $("#TotalRenta").val(totalRenta);
      $("#Total_Iva_label").val(Iva);
      $("#Total_Sub_label").val(Subtotal);
      $("#TotalPagar").val(Total);
      $("#Total_Pagar_label").val(Total);
      $("#Total_Horas_label").val(horas);

    }
  }

}


})
$(".formCliente").on("change","input#input_plus", function(){
  
  var monto = $("#input_monto").val();
  if(monto ==  "" || monto == null){
    
    $("#input_monto").parent().after('<div class="alert alert-warning alert_monto">Favor de ingresar el monto de la unidad</div>');
  
  }else{
    var plus = Number($(this).val());
    var montoOfi = Number($("#input_monto").val());
    var dias = Number($("#num_dias").val());
    var totalRenta = (montoOfi + plus) * dias;
    $("#TotalRenta").val(totalRenta);

    var iva =  Number($("#TotalIva").val());
  
    if(iva == 0){
      var totalRenta = Number($("#TotalRenta").val());
      var horas = Number($("#TotalHoras").val());
      var servi = Number($("#TotalServi").val());
      var Iva = 0;
      var Total = Number(totalRenta + horas + servi);

      $("#Total_label").val(totalRenta);
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

      $("#Total_label").val(totalRenta);
      $("#Total_Iva_label").val(Iva);
      $("#Total_Sub_label").val(Subtotal);
      $("#TotalPagar").val(Total);
      $("#Total_Pagar_label").val(Total);
    }
  }
  
  
})

$(".formCliente").on("change","input.si_iva", function(){
  $("#TotalIva").val(1);

  var iva =  Number($("#TotalIva").val());
  
  if(iva == 1){
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
    $("#Total_Horas_label").val(horas);

  }
   


})

$(".formCliente").on("change","input.no_iva", function(){
  
  $("#TotalIva").val(0);

  var iva =  Number($("#TotalIva").val());
  var totalRenta = Number($("#TotalRenta").val());
  var horas = Number($("#TotalHoras").val());
  var servi = Number($("#TotalServi").val());
  var Iva = 0;
  var Total = Number(totalRenta + horas + servi);
  if(iva == 0){
    $("#Total_Iva_label").val(Iva);
    $("#Total_Sub_label").val(Total);
    $("#TotalPagar").val(Total);
    $("#Total_Pagar_label").val(Total);
  }

 
  
})


$(".formCliente").on("change","select#CochesDisponibles", function(){
  var id = $(this).val();
  var tipo = "";
  var dias = $("#num_dias").val();
 $("#alert_monto").remove();


  if(dias > 0 && dias < 7){
    tipo = "A";
  }else if(dias > 6 && dias < 15){
  }else if(dias > 14 && dias < 31){
    tipo = "C";
  }

console.log(dias+" "+tipo +" "+ id);

    tipo = "B";

  var datos = new FormData();
  datos.append("id_auto_tipo", id);
  datos.append("Tipo", tipo);


   $.ajax({
      url:"ajax/rentas.ajax.php",
      method:"POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType: "json",
      success:function(respuesta){
        console.log(respuesta);
        console.log("Precio Minimo "+respuesta["minimo"]);
        $("#monto_minimo").val(respuesta["minimo"]);

             //-----------------------------------------------
          var datos = new FormData();
          datos.append("idAuto", id);
          $.ajax({
            url:"ajax/autos.ajax.php",
            method:"POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success:function(respuesta3){
              console.log(respuesta3["placas"]);
              $("#Placas").val(respuesta3["placas"]);
              
          
              }

           })
          
      //-----------------------------------------------

              
        
      }

  })

      
  $("#id_auto").val(id); 
 
  document.getElementById("input_monto").disabled = false;
  document.getElementById("input_plus").disabled = false;
  $(".alert_coches").remove();

  
  
})


 $(".addDia").on("ifChecked",function(){



   console.log("berga");
   $("#addDia").val(0);

})

$(".addDia").on("ifUnchecked",function(){

   $("#addDia").val(1);

})

$(".formCliente").on("change","input#input_monto", function(){
  $("#alert_monto").remove();
  var monto = Number($(this).val());
  var minimo =  Number($("#monto_minimo").val());
  var dias = Number($("#num_dias").val());
  var total = monto * dias;
  console.log("total es: "+dias);
  
  if(monto < minimo || monto == ""){
    console.log("EL monto que ingreso no es valido");
    $("#input_monto").parent().after('<div class="alert alert-warning" id="alert_monto">El monto debe ser mayor a $'+minimo+' </div>');
    $("#input_monto").val(0);
  }
  var plus;
  var plus_input = $("#input_plus").val();
  if(plus_input == "" || plus_input == null){
    plus = 0;
  }else{

    plus = Number($("#input_plus").val());
  }
  console.log("EL puto plus es :"+plus)
  var montoOfi = Number($("#input_monto").val()); 
   var TotalMasPlus = (plus + montoOfi) * dias;
  $("#TotalRenta").val(TotalMasPlus);

  var iva =  Number($("#TotalIva").val());
  
  if(iva == 0){
    var totalRenta = Number($("#TotalRenta").val());
    var horas = Number($("#TotalHoras").val());
    var servi = Number($("#TotalServi").val());
    var Iva = 0;
    var Total = Number(totalRenta + horas + servi);

    $("#Total_label").val(totalRenta);
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

    $("#Total_label").val(totalRenta);
    $("#Total_Iva_label").val(Iva);
    $("#Total_Sub_label").val(Subtotal);
    $("#TotalPagar").val(Total);
    $("#Total_Pagar_label").val(Total);
  }

  


})

function VolverASumarServicios2(dias){

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

function ChecarSiHayServiciosVacios2(){
  var precioItem = $(".precioServicio");
  var retornar = true;

  for(var i = 0; i < precioItem.length; i++){

      var valor = $(precioItem[i]).val();
      if(valor == ""){
        retornar = false;
      }

  }
  return retornar;
}