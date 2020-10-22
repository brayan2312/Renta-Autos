<!--=====================================
MODAL AGREGAR NUEVO DOMICILIO MODAL
======================================-->

<div id="modalNuevoCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="formNuevoCliente" id="formNuevoCliente">

        <!--===============yyyy======================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Domicilio Personal</h4>

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

                <input type="text" class="form-control input-lg" id="nuevoNombre_C" name="nuevoNombre_C" placeholder="Ingresar nombre(s)" required="">

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO PATERNO -->
            <h4>APELLIDO PATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoApellidoP_C" placeholder="Ingresar apellido paterno" id="nuevoApellidoP_C" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO MATERNO -->
            <h4>APELLIDO MATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoApellidoM_C" name="nuevoApellidoM_C" placeholder="Ingresar apellido materno" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            <h4>CORREO ELECTRONICO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevo_Corrreo_C" name="nuevo_Corrreo_C" placeholder="Ingresar correo electronico" required>

              </div>

            </div>
          <!-- ENTRADA PARA EL R.F.C -->
            <h4>R.F.C:</h4>
            
            <div class="form-group">
              
              <div  class="alerta" id="alerta"></div>
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-file-alt"></i></span> 
       
                <input type="text" class="form-control input-lg" name="nuevoRFC_C" id="nuevoRFC_C" placeholder="Ingresa el R.F.C" required>
                <br>

              </div>

            </div>
          
          
        <!-- ENTRADA PARA LA CALLE -->
            <h4>CALLE:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-route"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoCalle_C" name="nuevoCalle_C" placeholder="Ingresa nombre de la calle" required>

                
                
              </div>

            </div>
            
            <!-- ENTRADA PARA EL NUMERO EXT -->
            <h4>NÚMERO EXTERIOR:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoExterior_C" name="nuevoExterior_C" placeholder="Ingresa el numero externo" required>
                
              </div>

            </div>
            <h4>NÚMERO INTERNO:</h4>
            
            <!-- ENTRADA PARA EL NUMERO INT -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoInterior_C" name="nuevoInterior_C" placeholder="Ingresa el numero interno">

              </div>

            </div>

            <!-- ENTRADA PARA LA COLONIA -->
            <h4>COLONIA:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-street-view"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoColonia_C" name="nuevoColonia_C" placeholder="Ingresa la colonia" required>

              </div>

            </div>
            <h4>CIUDAD/MUNICIPIO:</h4>

            <!-- ENTRADA PARA LA CIUDAD O MUNICIPIO -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-city"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoCiudad_C" name="nuevoCiudad_C" placeholder="Ingresa la ciudad o municipio" required>

              </div>

            </div>
            <h4>ESTADO:</h4>
            
            <!-- ENTRADA PARA EL ESTADO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

                <select class="form-control input-lg" id="estado" name="nuevoEstado_C" required>
                  
                  <option value="" id="nuevoEstado_C">Seleccionar Estado</option>

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
              
                <input type="text" class="form-control input-lg" id="nuevoPostal_C" name="nuevoPostal_C" placeholder="Ingresa el código postal" required>


              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            <h4>TELÉFONO 1:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-phone"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoNumero1_C" name="nuevoNumero1_C" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular" required>

                
              
              </div>

            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            <h4>TELÉFONO 2:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-mobile-alt"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoNumero2_C" name="nuevoNumero2_C" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular">

       
              </div>

              

             <!--  <button type="button" id="editar_personal" class="btn btn-primary">Guardar</button> -->


            </div>

          <!-- --------------------------------------------- -->

          </div>

        </div>



        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="button" id="button_ClienteN" class="btn btn-primary">Registar</button>

        </div>

      </form>

    </div>

  </div>

</div>


<script>
  
var input=  document.getElementById('nuevoRFC_C');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})

</script>

