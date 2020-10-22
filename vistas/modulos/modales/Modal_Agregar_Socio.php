<!--=====================================
MODAL AGREGAR SOCIO
======================================-->

<div id="modalAgregarSocio" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="formSocio" class="formSocio" id="formSocio">

        <!--===============yyyy======================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Socio</h4>

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

                <?php

                    $item = null;
                    $valor = null;

                    $socios = ControladorSocios::ctrMostrarSocios($item, $valor);

                    if(!$socios){

                      echo '<input type="text" class="form-control" id="nuevoSocio" name="nuevoSocio" value="S001" readonly>';


                      echo '<input type="hidden" class="form-control" id="nuevoFolio" name="nuevoFolio" value="1" readonly>';
                  

                    }else{

                      foreach ($socios as $key => $value) {
                        
                        
                      
                      }

                      $folio = $value["folio"] + 1;



                     if($folio  <= "9"){
                       
                       echo '<input type="text" class="form-control" id="nuevoSocio" name="nuevoSocio" value="S00'.$folio.'" readonly>';
                     }else if($folio > "9" && $folio < "99"){

                       echo '<input type="text" class="form-control" id="nuevoSocio" name="nuevoSocio" value="S0'.$folio.'" readonly>';

                     }else if($folio > "99" && $folio < "1000"){

                       echo '<input type="text" class="form-control" id="nuevoSocio" name="nuevoSocio" value="S'.$folio.'" readonly>';

                     }

                      echo '<input type="hidden" class="form-control" id="nuevoFolio" name="nuevoFolio" value="'.$folio.'" readonly>';

                  

                    }

                    ?>

              </div>

            </div>

            <!-- ENTRADA PARA EL NOMBRE -->
            <h4>NOMBRE(S):</h4>
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" id="nuevoNombre_Socio" placeholder="Ingresar nombre(s)">

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO PATERNO -->
            <h4>APELLIDO PATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoApellidoP" placeholder="Ingresar apellido paterno" id="nuevoApellidoP_Socio">

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO MATERNO -->
            <h4>APELLIDO MATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoApellidoM" id="nuevoApellidoM_Socio" placeholder="Ingresar apellido materno">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR TIPO DE IDENTIFICACION -->
            <h4>TIPO DE IDENTIFICACIÓN:</h4>
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-card"></i></span> 

                <select class="form-control input-lg" id="nuevoIdentificacion_Socio" name="nuevoIdentificacion">
                  
                  <option value="">Selecionar tipo de identificación</option>

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
              
                <input type="number" class="form-control input-lg" name="nuevoNumIdentificacion" id="nuevoNumIdentificacion_Socio" placeholder="Ingresa el número de identificación">

              </div>

            </div>
            
            <!-- ENTRADA PARA EL SEXO -->

             <div class="form-group">
            <h4 id="Alerta_Genero_Socio">GÉNERO:</h4>
              
              <div class="input-group">
 
                <label><input type="radio" id="nuevoSexo_Socio" name="nuevoSexo" value="1">Masculino</label>
                 &nbsp; 
                <label><input type="radio" id="nuevoSexo_Socio" name="nuevoSexo" value="0">Femenino</label>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            <h4>FECHA DE NACIMIENTO:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> 
            

                <input type="text" class="form-control input-lg" id="nuevoNacimiento_Socio" name="nuevoNacimiento" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask placeholder="Ingresa fecha de nacimiento">

              </div>

            </div>

             <!-- ENTRADA PARA EL R.F.C -->
            <h4>R.F.C:</h4>
            
            <div class="form-group">
              
              <div  class="alerta" id="alerta"></div>
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-file-alt"></i></span> 
       
                <input type="text" class="form-control input-lg" name="NuevoRFC" id="NuevoRFC" placeholder="Ingresa el R.F.C">
                <br>

              </div>

            </div>
            
            <!-- ENTRADA PARA LA CALLE -->
            <h4>CALLE:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-route"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoCalle" id="nuevoCalle_Socio" placeholder="Ingresa nombre de la calle">

              </div>

            </div>
            <h4>NÚMERO EXTERIOR:</h4>
            
            <!-- ENTRADA PARA EL NUMERO EXT -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoExterior" id="nuevoExterior_Socio" placeholder="Ingresa el numero externo">

              </div>

            </div>
            <h4>NÚMERO INTERNO:</h4>
            
            <!-- ENTRADA PARA EL NUMERO INT -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoInterior" placeholder="Ingresa el numero interno">

              </div>

            </div>

            <!-- ENTRADA PARA LA COLONIA -->
            <h4>COLONIA:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-street-view"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoColonia" id="nuevoColonia_Socio" placeholder="Ingresa la colonia">

              </div>

            </div>
            <h4>CIUDAD/MUNICIPIO:</h4>

            <!-- ENTRADA PARA LA CIUDAD O MUNICIPIO -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-city"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoCiudad" id="nuevoCiudad_Socio" placeholder="Ingresa la ciudad o municipio">

              </div>

            </div>
            <h4>ESTADO:</h4>
            
            <!-- ENTRADA PARA EL ESTADO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

                <select class="form-control input-lg" name="nuevoEstado" id="nuevoEstado_Socio">
                  
                  <option value="">Selecionar Estado</option>

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
              
                <input type="text" class="form-control input-lg" id="nuevoPostal" name="nuevoPostal" placeholder="Ingresa el código postal">

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            <h4>TELÉFONO 1:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-phone"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoNumero1" name="nuevoNumero1" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular">

                
              
              </div>

            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            <h4>TELÉFONO 2:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-mobile-alt"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoNumero2" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular">

       
              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            <h4>CORREO ELECTRÓNICO:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-at"></i></span> 
              
                <input type="email" class="form-control input-lg" name="nuevoCorreo" id="nuevoCorreo_Socio" placeholder="Ingresa el correo electronico">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR TIPO DE SOCIO -->
            <h4>TIPO DE SOCIO:</h4>
        
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevoTipoSocio" id="nuevoTipoSocio_Socio">
                  
                  <option value="">Selecionar tipo de socio</option>

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

                <select class="form-control input-lg" name="nuevoBanco" id="nuevoBanco_Socio">
                  
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
              
                <input type="text" class="form-control input-lg" id="nuevoCuentaB" name="nuevoCuentaB" placeholder="Ingresa cuenta bancaria">

              </div>

            </div>
            

            <!-- ENTRADA PARA LA CLAVE INTERBANCARIA -->

            <h4>CLAVE INTERBANCARIA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-key"></i></span> 
              

                <input type="text" class="form-control input-lg" name="nuevoClaveI" id="nuevoClaveI_Socio" data-inputmask='"mask": "9999-9999-9999-9999"' data-mask placeholder="Ingresa clave interbancaria">


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

          <button type="submit" class="btn btn-primary">Guardar Socio</button>

        </div>

        <?php

          $crearSocio = new ControladorSocios();
          // $crearSocio -> ctrAgregarSocios();

        ?>

      </form>

    </div>

  </div>

</div>
<script>
  
var input=  document.getElementById('NuevoRFC');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})

var input_postal=  document.getElementById('nuevoPostal');
input_postal.addEventListener('input',function(){
  if (this.value.length > 5) 
     this.value = this.value.slice(0,5); 
})

var input_cuenta=  document.getElementById('nuevoCuentaB');
input_cuenta.addEventListener('input',function(){
  if (this.value.length > 10) 
     this.value = this.value.slice(0,10); 
})
  




</script>