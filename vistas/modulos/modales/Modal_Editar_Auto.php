<!--=====================================
MODAL AGREGAR AUTO
======================================-->

<div id="modalEditarAuto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" name="formAuto" class="formAuto" id="editarformAuto">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Actualizar Auto</h4>

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

              <input type="text" class="form-control" id="editarAuto" name="editarSocio" value="" readonly>
<!-- 
              <input type="hidden" class="form-control" id="editarFolio" name="editarFolio" value="" readonly> -->

              </div>

            </div>
            <!-- ENTRADA PARA LA MARCA -->
            <h4>MARCA DEL AUTOMÓVIL:</h4>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-car-alt"></i></span> 

                <select class="form-control input-lg"  name="editarMarca">
                  
                  <option id="editarMarca" value=""></option>

                  <?php

                  $item = null;
                  $valor = null;

                  $marcas = ControladorSocios::ctrMostrarMarcas($item, $valor);

                  foreach ($marcas as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL MODELO -->
            <h4>MODELO DEL AUTOMÓVIL:</h4>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-car-alt"></i></span> 

                <input type="text" class="form-control input-lg" id="editarModelo" name="editarModelo" placeholder="Ingresar el modelo">

               

              </div>

            </div>

            <!-- ENTRADA PARA EL AÑO DEL CARRO -->
              <h4>AÑO DEL AUTOMÓVIL:</h4>
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> 

                <input type="text" class="form-control input-lg" name="editarTemporada" placeholder="Ingresar año" id="editarTemporada">
                  
                <input type="hidden" class="form-control input-lg" id="Id_auto" name="Id_auto"> 
              </div>

            </div>

            <!-- ENTRADA EL COLOR -->
            <h4>COLOR:</h4>
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-palette"></i></span> 

                <input type="text" class="form-control input-lg" id="editarColor" name="editarColor" placeholder="Ingresar el color">

                <input type="hidden"  id="editarId" name="editarId">

              </div>

            </div>

            <!-- ENTRADA PARA LAS PLACAS -->
            <h4>NÚMERO DE PLACAS:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
            
                <input type="text" class="form-control input-lg" name="editarPlacas" id="editarPlacas" placeholder="Ingresa número de placas">


              </div>

            </div>

            <!-- ENTRADA PARA EL ESTADO -->
            <h4>ESTADO:</h4>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

                <select class="form-control input-lg" name="editarEstado">
                  
                  <option id="editarEstado" value=""></option>

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

            <!-- ENTRADA PARA SELECCIONAR PARA EL TIPO DE VERIFICACIÓN -->
            <h4>TIPO DE VERIFICACIÓN:</h4>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-check-square"></i></span> 

                <select class="form-control input-lg" name="editarVerificacion">
                  
                  <option id="editarVerificacion" value=""></option>
                  <option value="Estatal">Estatal</option>
                  <option value="00">00</option>
                  <option value="0">0</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA LA FECHA VIGENCIA DE VERIFICACIÓN -->
            <h4>VIGENCIA DE VERIFICACIÓN:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> 
            

                <input type="month" class="form-control input-lg" name="editarFechaV" id="editarFechaV" placeholder="Ingresa nombre de la calle">
               

              </div>

            </div>
            
            <!-- ENTRADA PARA LA MEDIDAS DE LAS LLANTAS -->
            <h4>MEDIDAS DE LAS LLANTAS:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fad fa-tire"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarLlantas" name="editarLlantas" placeholder="Ingresa la medida de las llantas">

              </div>

            </div>

            <!-- ENTRADA PARA EL KILOMETRAJE -->
            <h4>KILOMETRAJE:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-tachometer-alt"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarkm" name="editarkm" placeholder="Ingresa el kilometraje">

                <input type="hidden" id="editarKilometraje" name="editarKilometraje">
              </div>

            </div>
            
            <!-- ENTRADA PARA EL ULTIMO SERVICIO -->
            <h4>ÚLTIMO SERVICIO:</h4>
              
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarUlt" name="editarUlt" placeholder="Ingresa el último servicio">

                <input type="hidden" id="editarUltimo" name="editarUltimo">

              </div>

            </div>

            <h4>PRÓXIMO SERVICIO:</h4>
          
            <!-- ENTRADA PARA EL PROXIMO SERVICIO -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarProx" name="editarProx" placeholder="Ingresa el proximo servicio">

                <input type="hidden" id="editarProximo" name="editarProximo">

              </div>

            </div>



            <!-- ENTRADA PARA LA PERIOCIDAD -->

            <h4>PERIODICIDAD DE SERVICIO:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-hourglass-start"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarPeri" name="editarPeri" placeholder="Ingresa periodicidad de servicios">

                <input type="hidden" id="editarPeriodo" name="editarPeriodo">

              </div>

            </div>

            


            <!-- ENTRADA PARA NÚMERO DE PASAJEROS -->
            <h4>NÚMERO DE PASAJEROS:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-users"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarPasajeros" name="editarPasajeros" placeholder="Ingresa el número de pasajeros">

              </div>

            </div>

            <!-- ENTRADA PARA LA TRANSMISIÓN -->
            <h4>TRANSMISIÓN DEL VEHÍCULO:</h4>
            
             <div class="form-group">
              
              <div class="input-group">
              <!-- <label >Tipo de Transmisión</label><br>  -->
                <label><input type="radio" id="editarEstandar" name="editarTransmision" value="Estándar">Estándar</label>
                 &nbsp; 
                <label><input type="radio" id="editarAutomatica" name="editarTransmision" value="Automática">Automática</label>

              </div>

            </div>

           <!-- ENTRADA PARA SELECCIONAR COMBUSTIBLE -->
            <h4>TIPO DE COMBUSTIBLE PARA EL VEHÍCULO:</h4>
          
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-gas-pump"></i></span> 

                <select class="form-control input-lg" name="editarGas">
                  
                  <option value="" id="editarGas"></option>

                  <option value="Gasolina">Gasolina</option>
                  <option value="Disel">Disel</option>
                

                </select>

              </div>

            </div>


           
           <!-- ENTRADA PARA SELECCIONAR NÚMERO DE CILINDROS -->
            <h4>CILINDROS DEL VEHÍCULO:</h4>
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 

                <select class="form-control input-lg" name="editarCilindros">
                  
                  <option id="editarCilindros" value=""></option>

                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="8">8</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR VESTIDURAS -->
            <h4>TIPO DE ASIENTOS:</h4>
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-couch"></i></span> 

                <select class="form-control input-lg" name="editarVestiduras">
                  
                  <option id="editarVestiduras" value=""></option>
                  <option value="Piel">Piel</option>
                  <option value="Tela">Tela</option>
                  <option value="Tela/Piel">Tela/Piel</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR LLAVE -->
            <h4>SEGUNDA LLAVE:</h4>

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-key"></i></span> 

                <select class="form-control input-lg" name="editarLlaves">
                  
                  <option id="editarLlaves" value=""></option>

                  <option value="1">Si</option>
                  <option value="0">No</option>
                

                </select>

              </div>

            </div>
            
            <!-- ENTRADA PARA ULTIMA TENENCIA -->
            <h4>ÚLTIMA TENENCIA:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarTenencia" name="editarTenencia" placeholder="Ingresa ultima tenencia">

              </div>

            </div>

            <h3>Datos del Seguro de Vehículo</h3>


              <!-- ENTRADA PARA LA ASEGURADORA -->
            <h4>NOMBRE DE LA ASEGURADORA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-car-crash"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarAseguradora" name="editarAseguradora" placeholder="Ingresa nombre de la aseguradora">

              </div>

            </div>

             <!-- ENTRADA PARA EL NÚMERO DE POLIZA -->
              <h4>NÚMERO DE POLIZA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-weight-hanging"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarPoloza" name="editarPoloza" placeholder="Ingresa número de poliza">

              </div>

            </div>


            <!-- ENTRADA PARA LA VIGENCIA -->
              <h4>VIGENCIA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-weight-hanging"></i></span> 
              
              


                <input type="text" class="form-control input-lg" id="editarVigencia" name="editarVigencia" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask placeholder="Ingresa fecha de vigencia">

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO DE EMERGENCIA-->
              <h4>NÚMERO DE EMERGENCIA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-weight-hanging"></i></span> 
              
                <input type="text" class="form-control input-lg" id="editarNumEmergencia" name="editarNumEmergencia" placeholder="Ingresa número de emergencia">

                <input type="hidden" id="id_seguro" name="id_seguro">

              </div>

            </div>

            <h3>PRECIOS</h3>

             <!-- ENTRADA PARA PRECIO DE 1 A 6 DÍAS -->
            <h4>DE 1 A 6 DÍAS</h4>
             <div class="form-group row">

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO REGULAR</h4>
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarRegular_1" name="editarRegular_1" step="any" min="0" placeholder="Precio regular">

                    <input type="hidden" id="id_precios" name="id_precios">

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO MINIMO -->

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO MINIMO</h4>
                  
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioMinimi_1" name="editarPrecioMinimi_1" step="any" min="0" placeholder="Precio minimo">

                  </div>
                
                  <br>

                  

                </div>

            </div>

            <!-- ENTRADA PARA PRECIO DE 7 A 14 DÍAS -->
            <h4>DE 7 A 14 DÍAS</h4>
             <div class="form-group row">

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO REGULAR</h4>
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarRegular_2" name="editarRegular_2" step="any" min="0" placeholder="Precio regular">

                    <input type="hidden" id="id_precios2" name="id_precios2">

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO  MINIMO-->

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO MINIMO</h4>
                  
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioMinimi_2" name="editarPrecioMinimi_2" step="any" min="0" placeholder="Precio minimo">

                  </div>
                
                  <br>

                  

                </div>

            </div>

            <!-- ENTRADA PARA PRECIO DE 15 A 30 DÍAS -->
            <h4>DE 15 A 30 DÍAS</h4>
             <div class="form-group row">

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO REGULAR</h4>
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarRegular_3" name="editarRegular_3" step="any" min="0" placeholder="Precio regular">

                    <input type="hidden" id="id_precios3" name="id_precios3">

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO  MINIMO-->

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO MINIMO</h4>
                  
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="editarPrecioMinimi_3" name="editarPrecioMinimi_3" step="any" min="0" placeholder="Precio minimo">

                  </div>
                
                  <br>

                  

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

          <button type="submit" class="btn btn-primary">Actualizar Auto</button>

        </div>


      </form>

    </div>

  </div>

</div>
<script>
  /*
var año=  document.getElementById('editarTemporada');
año.addEventListener('input',function(){
  if (this.value.length > 4) 
     this.value = this.value.slice(0,4); 
})
*/

  
var tenencia =  document.getElementById('editarTenencia');
tenencia.addEventListener('input',function(){
  if (this.value.length > 4) 
     this.value = this.value.slice(0,4); 
})
  
</script>