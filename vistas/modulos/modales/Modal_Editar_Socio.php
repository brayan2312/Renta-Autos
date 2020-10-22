<!--=====================================
MODAL EDITAR SOCIO
======================================-->

<div id="modalEditarSocio" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="formSocio" class="formSocio" id="formSocioEditar">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Socio</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA NUMERO DE SOCIO -->
            <h4>FOLIO:</h4>
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-terminal"></i></span> 

                <input type="text" class="form-control" id="editarSocio" name="editarSocio" value="S1001" readonly>
                <input type="hidden" id="idSocio" name="idSocio">

              </div>

            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <h4>NOMBRE(S):</h4>
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" placeholder="Ingresar nombre(s)">

              </div>

            </div>
            <h4>APELLIDO PATERNO:</h4>

            <!-- ENTRADA PARA EL APELLIDO PATERNO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" name="editarApellidoP" placeholder="Ingresar apellido paterno" id="editarApellidoP">

              </div>

            </div>
            <h4>APELLIDO MATERNO:</h4>

            <!-- ENTRADA PARA EL APELLIDO MATERNO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" name="editarApellidoM" id="editarApellidoM" placeholder="Ingresar apellido materno">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR TIPO DE IDENTIFICACION -->
            <h4>TIPO DE IDENTIFICACIÓN:</h4>

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-card"></i></span> 

                <select class="form-control input-lg" name="editarIdentificacion">
                  
                  <option id="editarIdentificacion" value=""></option>

                  <option value="INE/IFE">INE/IFE</option>

                  <option value="PASAPORTE">PASAPORTE</option>

                  <option value="CEDULA PROFESIONAL">CEDULA PROFESIONAL</option>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL NUMERO DE IDENTIFICACIÓN -->
            <h4>NÚMERO DE IDENTIFICACION:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="number" class="form-control input-lg" id="editarNumIdentificacion" name="editarNumIdentificacion" placeholder="Ingresa el número de identificación">

              </div>

            </div>
            
            <!-- ENTRADA PARA EL SEXO -->
            <h4>GÉNERO:</h4>

             <div class="form-group">
              
              <div class="input-group">
              
                <label><input type="radio" id="sexoM" name="editarSexo" value="1">Masculino</label>
                 &nbsp; 
                <label><input type="radio" id="sexoF" name="editarSexo" value="0">Femenino</label>

              </div>

            </div>
            <h4>FECHA DE NACIMIENTO:</h4>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> 
            

                <input type="text" class="form-control input-lg" name="editarNacimiento" id="editarNacimiento" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask placeholder="Ingresa fecha de nacimiento">

              </div>

            </div>

             <!-- ENTRADA PARA EL R.F.C -->
            <h4>R.F.C:</h4>

            <div class="form-group">
              
              <div  class="alerta" id="alerta"></div>
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-file-alt"></i></span> 
       
                <input type="text" class="form-control input-lg" id="editarRFC" name="editarRFC"  placeholder="Ingresa el R.F.C">
                <br>

              </div>

            </div>
            
            <!-- ENTRADA PARA LA CALLE -->
            <h4>CALLE:</h4>
    
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-route"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarCalle" id="editarCalle" placeholder="Ingresa nombre de la calle">

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO EXT -->
            <h4>NÚMERO EXTERIOR:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarExterior" id="editarExterior" placeholder="Ingresa el numero externo">

              </div>

            </div>
            <h4>NÚMERO INTERNO:</h4>
            
            <!-- ENTRADA PARA EL NUMERO INT -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarInterior"  id="editarInterior" placeholder="Ingresa el numero interno">

              </div>

            </div>

            <!-- ENTRADA PARA LA COLONIA -->
            <h4>COLONIA:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-street-view"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarColonia" id="editarColonia" placeholder="Ingresa la colonia">

              </div>

            </div>

            <!-- ENTRADA PARA LA CIUDAD O MUNICIPIO -->
            <h4>CIUDAD/MUNICIPIO:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-city"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarCiudad" id="editarCiudad" placeholder="Ingresa la ciudad o municipio">

              </div>

            </div>

            <!-- ENTRADA PARA EL ESTADO -->
            <h4>ESTADO:</h4>

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

                <select class="form-control input-lg" name="editarEstado" id="">
                

                  <option id="editarEstado"></option>


                  <?php

                  $item = null;
                  $valor = null;

                  $estados = ControladorPlantilla::ctrMostrarEstados($item, $valor);

                  foreach ($estados as $key => $value) {


                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>

                </select>

              </div>

            </div>


            <!-- ENTRADA PARA EL CÓDIGO POSTAL -->
            <h4>CÓDIGO POSTAL:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-address-card"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarPostal" id="editarPostal" placeholder="Ingresa el código postal">

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            <h4>TELÉFONO 1:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-phone"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarNumero1"  id="editarNumero1" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular">
                
               

              </div>

            </div>
            <h4>TELÉFONO 2:</h4>

            <!-- ENTRADA PARA EL CELULAR -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-mobile-alt"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarNumero2"  id="editarNumero2" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular">

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            <h4>CORREO ELECTRÓNICO:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-at"></i></span> 
              
                <input type="email" class="form-control input-lg" name="editarCorreo" id="editarCorreo" placeholder="Ingresa el correo electronico">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR TIPO DE SOCIO -->
            <h4>TIPO DE SOCIO:</h4>

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarTipoSocio">
                  
                  <option id="editarTipoSocio" value=""></option>

                  <option value="A">Socio "A"</option>

                  <option value="B">Socio "B"</option>

                </select>

              </div>

            </div>

            
            <label for="">DATOS PARA PAGO</label>

            <!-- ENTRADA PARA SELECCIONAR SU BANCO -->
            <h4>BANCO:</h4>

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-university"></i></span> 

                <select class="form-control input-lg" name="editarBanco" id="editarBanco">
                  
                  <option value="">Selecionar Banco</option>
                  <option value="BANCOMER">BANCOMER</option>
                  <option value="BANCOPPEL">BANCOPPEL</option>
                  <option value="BANAMEX">BANAMEX</option>
                  <option value="SANTANDER">SANTANDER</option>
                  <option value="BANORTE">BANORTE</option>



                </select>

              </div>

            </div>
            <h4>NÚMERO DE CUENTA:</h4>

            <!-- ENTRADA PARA LA CUENTA BANCARIA -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-user-circle"></i></span> 
              
                <input type="text" class="form-control input-lg" name="editarCuentaB"  id="editarCuentaB" placeholder="Ingresa cuenta bancaria">

              </div>

            </div>


            <!-- ENTRADA PARA LA CLAVE INTERBANCARIA -->
            <h4>CLAVE INTERBANCARIA:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-key"></i></span> 
              

                <input type="text" class="form-control input-lg" name="editarClaveI" id="editarClaveI" data-inputmask='"mask": "9999-9999-9999-9999"' data-mask placeholder="Ingresa clave interbancaria">


              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

            <!--  <div class="form-group">
              
              <div class="panel">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/socios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div> -->

          </div>

        </div>



        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Actualizar Socio</button>

        </div>

        <?php

          // $editarSocio = new ControladorSocios();
          // $editarSocio -> ctrEditarSocios();

        ?>

      </form>

    </div>

  </div>

<script>
  
var input2=  document.getElementById('editarRFC');
input2.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})

var input_postal2=  document.getElementById('editarPostal');
input_postal2.addEventListener('input',function(){
  if (this.value.length > 5) 
     this.value = this.value.slice(0,5); 
})

var input_cuenta2=  document.getElementById('editarCuentaB');
input_cuenta2.addEventListener('input',function(){
  if (this.value.length > 10) 
     this.value = this.value.slice(0,10);

})
  




</script>
</div>