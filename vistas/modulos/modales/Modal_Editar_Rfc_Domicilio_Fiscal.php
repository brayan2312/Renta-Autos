<div id="modalEditarRfcFiscal" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="EditarFiscal" id="EditarFiscal">

        <!--===============yyyy======================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Eitar Nuevo Domicilio Para Persona Fisica</h4>

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

  
                <input type="text" class="form-control input-lg" id="editarNombre_Y" name="editarNombre_Y" placeholder="Ingresar nombre(s)" required="" disabled>

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO PATERNO -->
            <h4>APELLIDO PATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" name="editarApellidoP_Y" placeholder="Ingresar apellido paterno" id="editarApellidoP_Y" required="" disabled>

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO MATERNO -->
            <h4>APELLIDO MATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" id="editarApellidoM_Y" name="editarApellidoM_Y" placeholder="Ingresar apellido materno" required disabled>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            <h4>CORREO ELECTRONICO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" id="editar_Corrreo_Y" name="editar_Corrreo_Y" placeholder="Ingresar correo electronico" required disabled>

              </div>

            </div>
          <!-- ENTRADA PARA EL R.F.C -->
            <h4>R.F.C:</h4>
            
            <div class="form-group">
              
              <div  class="alerta" id="alerta"></div>
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-file-alt"></i></span> 
       
                <input type="text" class="form-control input-lg" name="editarRFC_Y" id="editarRFC_Y" placeholder="Ingresa el R.F.C" required disabled>
                <br>

              </div>

            </div>
          
          
        <!-- ENTRADA PARA LA CALLE -->
            <h4>CALLE:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-route"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarCalle_Y" name="editarCalle_Y" placeholder="Ingresa nombre de la calle" required disabled>

                <input type="hidden" id="editar_id_rfc_Y" name="editar_id_rfc_Y">
                
              </div>

            </div>
            
            <!-- ENTRADA PARA EL NUMERO EXT -->
            <h4>NÚMERO EXTERIOR:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarExterior_Y" name="editarExterior_Y" placeholder="Ingresa el numero externo" required disabled>

                <input type="hidden" id="dom_regis_Y" name="dom_regis_Y">
                
              </div>

            </div>
            <h4>NÚMERO INTERNO:</h4>
            
            <!-- ENTRADA PARA EL NUMERO INT -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarInterior_Y" name="editarInterior_Y" placeholder="Ingresa el numero interno" disabled>

              </div>

            </div>

            <!-- ENTRADA PARA LA COLONIA -->
            <h4>COLONIA:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-street-view"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarColonia_Y" name="editarColonia_Y" placeholder="Ingresa la colonia" required disabled>

              </div>

            </div>
            <h4>CIUDAD/MUNICIPIO:</h4>

            <!-- ENTRADA PARA LA CIUDAD O MUNICIPIO -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-city"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarCiudad_Y" name="editarCiudad_Y" placeholder="Ingresa la ciudad o municipio" required disabled>

              </div>

            </div>
            <h4>ESTADO:</h4>
            
            <!-- ENTRADA PARA EL ESTADO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

                <select class="form-control input-lg" name="editarEstado_Y" required id="estado_Y" disabled>
                  
                  <option value="" id="editarEstado_Y">Selecionar Estado</option>

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
              
                <input type="text" class="form-control input-lg" id="editarPostal_Y" name="editarPostal_Y" placeholder="Ingresa el código postal" required disabled>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            <h4>TELÉFONO 1:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-phone"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarNumero1_Y" name="editarNumero1_Y" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular" required disabled>

                
              
              </div>

            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            <h4>TELÉFONO 2:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-mobile-alt"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarNumero2_Y" name="editarNumero2_Y" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular" disabled>

       
              </div>

              <input type="checkbox" id="editar_datos_personles_Y">Editar
              <div id="Button_Editar_Personal_Y">
                
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

          <button type="button" id="Confirmar_Personal_Y" class="btn btn-primary">Guardar</button>

        </div>

      </form>

    </div>

  </div>

</div>


<script>
  
var input=  document.getElementById('editarRFC_Y');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})

</script>

