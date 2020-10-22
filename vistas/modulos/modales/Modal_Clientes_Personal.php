<!--=====================================
MODAL AGREGAR NUEVO DOMICILIO MODAL
======================================-->

<div id="modalRfcPersonal" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="PersonalRfc" id="PersonalRfc">

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

                <input type="text" class="form-control input-lg" id="nuevoNombre_P" name="nuevoNombre_P" placeholder="Ingresar nombre(s)" required="" disabled>

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO PATERNO -->
            <h4>APELLIDO PATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoApellidoP_P" placeholder="Ingresar apellido paterno" id="nuevoApellidoP_P" required="" disabled>

              </div>

            </div>

            <!-- ENTRADA PARA EL APELLIDO MATERNO -->
            <h4>APELLIDO MATERNO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoApellidoM_P" name="nuevoApellidoM_P" placeholder="Ingresar apellido materno" required disabled>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->
            <h4>CORREO ELECTRONICO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-id-badge"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevo_Corrreo_P" name="nuevo_Corrreo_P" placeholder="Ingresar correo electronico" required disabled>

              </div>

            </div>
          <!-- ENTRADA PARA EL R.F.C -->
            <h4>R.F.C:</h4>
            
            <div class="form-group">
              
              <div  class="alerta" id="alerta"></div>
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-file-alt"></i></span> 
       
                <input type="text" class="form-control input-lg" name="nuevoRFC_P" id="nuevoRFC_P" placeholder="Ingresa el R.F.C" required disabled>
                <br>

              </div>

            </div>
          
          
        <!-- ENTRADA PARA LA CALLE -->
            <h4>CALLE:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-route"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoCalle_P" name="nuevoCalle_P" placeholder="Ingresa nombre de la calle" required disabled>

                <input type="hidden" id="id_rfc_personal" name="id_rfc_personal">
                
              </div>

            </div>
            
            <!-- ENTRADA PARA EL NUMERO EXT -->
            <h4>NÚMERO EXTERIOR:</h4>

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoExterior_P" name="nuevoExterior_P" placeholder="Ingresa el numero externo" required disabled>
                <input type="hidden" id="dom_regis_P" name="dom_regis_P">

              </div>

            </div>
            <h4>NÚMERO INTERNO:</h4>
            
            <!-- ENTRADA PARA EL NUMERO INT -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoInterior_P" name="nuevoInterior_P" placeholder="Ingresa el numero interno" disabled>

              </div>

            </div>

            <!-- ENTRADA PARA LA COLONIA -->
            <h4>COLONIA:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-street-view"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoColonia_P" name="nuevoColonia_P" placeholder="Ingresa la colonia" required disabled>

              </div>

            </div>
            <h4>CIUDAD/MUNICIPIO:</h4>

            <!-- ENTRADA PARA LA CIUDAD O MUNICIPIO -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-city"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoCiudad_P" name="nuevoCiudad_P" placeholder="Ingresa la ciudad o municipio" required disabled>

              </div>

            </div>
            <h4>ESTADO:</h4>
            
            <!-- ENTRADA PARA EL ESTADO -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

                <select class="form-control input-lg" id="ComboEstado" name="nuevoEstado_P" required disabled>
                  
                  <option value="" id="nuevoEstado_P"></option>

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
              
                <input type="text" class="form-control input-lg" id="nuevoPostal_P" name="nuevoPostal_P" placeholder="Ingresa el código postal" required disabled>


              </div>

            </div>

            <!-- ENTRADA PARA EL TELEFONO -->
            <h4>TELÉFONO 1:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-phone"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoNumero1_P" name="nuevoNumero1_P" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular" required disabled>

                
              
              </div>

            </div>

            <!-- ENTRADA PARA EL CELULAR -->
            <h4>TELÉFONO 2:</h4>
          
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-mobile-alt"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoNumero2_P" name="nuevoNumero2_P" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Ingresa número de celular" disabled>

       
              </div>

              <input type="checkbox" id="editar_datos_personles">Editar
              <div id="Button_Editar_Personal">
                
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

          <button type="button" id="Confirmar_Personal" class="btn btn-primary">Confirmar</button>

        </div>

      </form>

    </div>

  </div>

</div>


<script>
  
var input=  document.getElementById('nuevoRFC_P');
input.addEventListener('input',function(){
  if (this.value.length > 13) 
     this.value = this.value.slice(0,13); 
})

</script>

