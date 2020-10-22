<!--=====================================
MODAL AGREGAR NUEVO DOMICILIO MODAL
======================================-->

<div id="modalNuevoRfcFisica" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="FisicaOtraDom" id="FisicaOtraDom">

        <!--===============yyyy======================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Nuevo Domicilio Para Persona Fisica</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            <h4>NOMBRE(S):</h4>
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoNombre_F" name="nuevoNombre_F" placeholder="Ingresar nombre(s)" required="">

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO PATERNO -->
            <h4>APELLIDO PATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoApellidoP_F" placeholder="Ingresar apellido paterno" id="nuevoApellidoP_F" required="">

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO MATERNO -->
            <h4>APELLIDO MATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoApellidoM_F" name="nuevoApellidoM_F" placeholder="Ingresar apellido materno" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            <h4>CORREO ELECTRONICO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevo_Corrreo_F" name="nuevo_Corrreo_F" placeholder="Ingresar correo electronico" required>

              </div>

            </div>
          <!-- ENTRADA PARA EL R.F.C -->
            <h4>R.F.C:</h4>
            
            <div class="form-group">
              
              <div  class="alerta" id="alerta"></div>
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-file-alt"></i></span> 
       
                <input type="text" class="form-control input-lg" name="nuevoRFC_F" id="nuevoRFC_F" placeholder="Ingresa el R.F.C" required>
                <br>

              </div>

            </div>
          
          
        <!-- ENTRADA PARA LA CALLE -->
            <h4>CALLE:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-route"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoCalle_F" name="nuevoCalle_F" placeholder="Ingresa nombre de la calle" required>

                <!-- <input type="hidden" id="id_rfc" name="id_rfc"> -->
                
              </div>

            </div>
            
            <!-- ENTRADA PARA EL NUMERO EXT -->
            <h4>NÚMERO EXTERIOR:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoExterior_F" name="nuevoExterior_F" placeholder="Ingresa el numero externo" required>

              </div>

            </div>
            <h4>NÚMERO INTERNO:</h4>
            
            <!-- ENTRADA PARA EL NUMERO INT -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoInterior_F" name="nuevoInterior_F" placeholder="Ingresa el numero interno">

              </div>

            </div>

            <!-- ENTRADA PARA LA COLONIA -->
            <h4>COLONIA:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-street-view"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoColonia_F" name="nuevoColonia_F" placeholder="Ingresa la colonia" required>

              </div>

            </div>
            <h4>CIUDAD/MUNICIPIO:</h4>

            <!-- ENTRADA PARA LA CIUDAD O MUNICIPIO -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-city"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoCiudad_F" name="nuevoCiudad_F" placeholder="Ingresa la ciudad o municipio" required>

              </div>

            </div>
            <h4>ESTADO:</h4>
            
            <!-- ENTRADA PARA EL ESTADO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

                <select class="form-control input-lg" id="nuevoEstado_F" name="nuevoEstado_F" required>
                  
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
              
                <input type="text" class="form-control input-lg" id="nuevoPostal_F" name="nuevoPostal_F" placeholder="Ingresa el código postal" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            <h4>TELÉFONO 1:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-phone"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoNumero1_F" name="nuevoNumero1_F" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular" required>

                
              
              </div>

            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            <h4>TELÉFONO 2:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-mobile-alt"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoNumero2_F" name="nuevoNumero2_F" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular">

       
              </div>

            </div>

          <!-- --------------------------------------------- -->

          </div>

        </div>



        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" id="button_Rfc_Fisica_Otra" class="btn btn-primary">Guardar</button>

        </div>

      </form>

    </div>

  </div>

</div>


<script>
  
var input=  document.getElementById('nuevoRFC_F');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})

</script>

