<!--=====================================
MODAL AGREGAR AUTO
======================================-->

<div id="modalAgregarAuto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="formAuto" id="formAuto" class="formAuto">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Auto</h4>

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
                    $id = $_GET["id"];

                    $autos = ControladorAutos::ctrMostrarAutos($item, $valor,$id);

                    // var_dump($autos);

                    if(!$autos){

                      echo '<input type="text" class="form-control" id="nuevoAuto" name="nuevoSocio" value="A001" readonly>';


                      echo '<input type="hidden" class="form-control" id="nuevoFolio" name="nuevoFolio" value="1" readonly>';
                  

                    }else{

                   

                      $folio = $value["folio"] + 1;


                       if($folio  <= "9"){
                       
                       echo '<input type="text" class="form-control" id="nuevoAuto" name="nuevoAuto" value="A00'.$folio.'" readonly>';

                     }else if($folio > "9" && $folio < "99"){

                       echo '<input type="text" class="form-control" id="nuevoAuto" name="nuevoAuto" value="A0'.$folio.'" readonly>';

                     }else if($folio > "99" && $folio < "1000"){

                       echo '<input type="text" class="form-control" id="nuevoAuto" name="nuevoAuto" value="A'.$folio.'" readonly>';

                     }

                      echo '<input type="hidden" class="form-control" id="nuevoFolio" name="nuevoFolio" value="'.$folio.'" readonly>';

                      

                  

                    }

                    ?>

              </div>

            </div>
            <!-- ENTRADA PARA LA MARCA -->
            <h4>MARCA DEL AUTOMÓVIL:</h4>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-car-alt"></i></span> 

                <select class="form-control input-lg" name="nuevoMarca" id="nuevoMarca_Auto">
                  
                  <option>Selecionar Marca</option>

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

                <input type="text" class="form-control input-lg" name="nuevoModelo" id="nuevoModelo_Auto" placeholder="Ingresar el modelo">

                <?php 

                    echo '<input type="hidden" class="form-control" id="nuevoId" name="nuevoId" value="'.$id.'" readonly>';
                 ?>


              </div>

            </div>

            <!-- ENTRADA PARA EL AÑO DEL CARRO -->
              <h4>AÑO DEL AUTOMÓVIL:</h4>
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoTemporada" placeholder="Ingresar año" id="nuevoTemporada_Auto">

              </div>

            </div>

            <!-- ENTRADA EL COLOR -->
            <h4>COLOR:</h4>
             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-palette"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoColor" id="nuevoColor_Auto" placeholder="Ingresar el color">

              </div>

            </div>

            <!-- ENTRADA PARA LAS PLACAS -->
            <h4>NÚMERO DE PLACAS:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
            
                <input type="text" class="form-control input-lg" name="nuevoPlacas" id="nuevoPlacas" placeholder="Ingresa número de placas">


              </div>

            </div>

            <!-- ENTRADA PARA EL ESTADO -->
            <h4>ESTADO:</h4>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

                <select class="form-control input-lg" name="nuevoEstado" id="nuevoEstado_Auto">
                  
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

            <!-- ENTRADA PARA SELECCIONAR PARA EL TIPO DE VERIFICACIÓN -->
            <h4>TIPO DE VERIFICACIÓN:</h4>
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-check-square"></i></span> 

                <select class="form-control input-lg" name="nuevoVerificacion" id="nuevoVerificacion_Auto">
                  
                  <option value="">Selecionar Verificación</option>
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
            

                <input type="month" class="form-control input-lg" name="nuevoFechaV" id="nuevoFechaV_Auto" placeholder="Ingresa nombre de la calle">
               

              </div>

            </div>
            
            <!-- ENTRADA PARA LA MEDIDAS DE LAS LLANTAS -->
            <h4>MEDIDAS DE LAS LLANTAS:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fad fa-tire"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoLlantas" id="nuevoLlantas_Auto" placeholder="Ingresa la medida de las llantas">

              </div>

            </div>

            <!-- ENTRADA PARA EL KILOMETRAJE -->
            <h4>KILOMETRAJE:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-tachometer-alt"></i></span> 
              
                <!-- <input type="text" class="form-control input-lg" id="nuevokm" name="nuevokm" placeholder="Ingresa el kilometraje" required> -->
                <input type="text" class="form-control input-lg" id="nuevokm" name="nuevokm" placeholder="Ingresa el kilometraje">
                
                <input type="hidden" name="nuevoKilometraje" id="nuevoKilometraje">

              </div>

            </div>
            
            <!-- ENTRADA PARA EL ULTIMO SERVICIO -->
            <h4>ÚLTIMO SERVICIO:</h4>
              
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-down"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoUlt" name="nuevoUlt" placeholder="Ingresa el último servicio">

                <input type="hidden" id="nuevoUltimo" name="nuevoUltimo">

              </div>

            </div>

            <h4>PRÓXIMO SERVICIO:</h4>
          
            <!-- ENTRADA PARA EL PROXIMO SERVICIO -->

            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-sort-numeric-up"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoProx" name="nuevoProx" placeholder="Ingresa el proximo servicio">

                <input type="hidden" id="nuevoProximo" name="nuevoProximo">

              </div>

            </div>



            <!-- ENTRADA PARA LA PERIOCIDAD -->

            <h4>PERIODICIDAD DE SERVICIO:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-hourglass-start"></i></span> 
              
                <input type="text" class="form-control input-lg" id="nuevoPeri" name="nuevoPeri" placeholder="Ingresa periodicidad de servicios">

                <input type="hidden" id="nuevoPeriodo" name="nuevoPeriodo">

              </div>

            </div>

            


            <!-- ENTRADA PARA NÚMERO DE PASAJEROS -->
            <h4>NÚMERO DE PASAJEROS:</h4>
            
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-users"></i></span> 
              
                <input type="number" class="form-control input-lg" name="nuevoPasajeros" id="nuevoPasajeros" placeholder="Ingresa el número de pasajeros">

              </div>

            </div>

            <!-- ENTRADA PARA LA TRANSMISIÓN -->
            
             <div class="form-group">
                <h4 id="Alerta_transmision">TRANSMISIÓN DEL VEHÍCULO:</h4>
              
              <div class="input-group">
              <!-- <label >Tipo de Transmisión</label><br>  -->
                <label><input type="radio" name="nuevoTransmision" value="Estándar">Estándar</label>
                 &nbsp; 
                <label><input type="radio" name="nuevoTransmision" value="Automática">Automática</label>

              </div>

            </div>

           <!-- ENTRADA PARA SELECCIONAR COMBUSTIBLE -->
            <h4>TIPO DE COMBUSTIBLE PARA EL VEHÍCULO:</h4>
          
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fas fa-gas-pump"></i></span> 

                <select class="form-control input-lg" name="nuevoGas" id="nuevoGas_Auto">
                  
                  <option value="">Selecionar combustible</option>

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

                <select class="form-control input-lg" id="nuevoCilindros" name="nuevoCilindros">
                  
                  <option value="">Selecionar tipo número de Cilindros</option>

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

                <select class="form-control input-lg" id="nuevoVestiduras" name="nuevoVestiduras">
                  
                  <option value="">Selecionar Vestidura</option>
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

                <select class="form-control input-lg" id="nuevoLlaves" name="nuevoLlaves">
                  
                  <option value="">Selecionar</option>

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
              
                <input type="number" class="form-control input-lg" id="nuevoTenencia" name="nuevoTenencia" placeholder="Ingresa ultima tenencia">

              </div>

            </div>

            <h3>Datos del Seguro de Vehículo</h3>


              <!-- ENTRADA PARA LA ASEGURADORA -->
            <h4>NOMBRE DE LA ASEGURADORA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-car-crash"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoAseguradora" id="nuevoAseguradora" placeholder="Ingresa nombre de la aseguradora">

              </div>

            </div>

             <!-- ENTRADA PARA EL NÚMERO DE POLIZA -->
              <h4>NÚMERO DE POLIZA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-weight-hanging"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoPoloza" id="nuevoPoloza" placeholder="Ingresa número de poliza">

              </div>

            </div>


            <!-- ENTRADA PARA LA VIGENCIA -->
              <h4>VIGENCIA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-weight-hanging"></i></span> 
              

                <input type="text" class="form-control input-lg" name="nuevoVigencia" id="nuevoVigencia" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask placeholder="Ingresa fecha de vigencia">

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO DE EMERGENCIA-->
              <h4>NÚMERO DE EMERGENCIA:</h4>
            <div class="form-group">
              
              <div class="input-group">

                <span class="input-group-addon"><i class="fas fa-weight-hanging"></i></span> 
              
                <input type="text" class="form-control input-lg" name="nuevoNumEmergencia" id="nuevoNumEmergencia" placeholder="Ingresa número de emergencia">

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

                    <input type="number" class="form-control input-lg" id="nuevoRegular_1" name="nuevoRegular_1" min="0" placeholder="Precio regular">

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO MINIMO -->

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO MINIMO</h4>
                  
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioMinimi_1" name="nuevoPrecioMinimi_1" min="0" placeholder="Precio minimo">

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

                    <input type="number" class="form-control input-lg" id="nuevoRegular_2" name="nuevoRegular_2" min="0" placeholder="Precio regular">

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO  MINIMO-->

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO MINIMO</h4>
                  
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioMinimi_2" name="nuevoPrecioMinimi_2" min="0" placeholder="Precio minimo">

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

                    <input type="number" class="form-control input-lg" id="nuevoRegular_3" name="nuevoRegular_3" min="0" placeholder="Precio regular">

                  </div>

                </div>

                <!-- ENTRADA PARA PRECIO  MINIMO-->

                <div class="col-xs-12 col-sm-6">
                  
                  <h4>PRECIO MINIMO</h4>
                  
                  <div class="input-group">
                  
                    <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="nuevoPrecioMinimi_3" name="nuevoPrecioMinimi_3" min="0" placeholder="Precio minimo">

                  </div>
                
                  <br>

                  

                </div>

            </div>

            <h3>PAGO GPS</h3>
          
               
            <div class="form-group row">

              

              <div class="col-xs-12 col-sm-4">
                <div class="form-group">

                 <div class="input-group">

                  

                    <select class="form-control input-lg" id="Tipo_Pago_Gps" name="Tipo_Pago_Gps">
                      
                      <option value="">Selecionar</option>

                      <option value="Pendiente">Pendiente</option>
                      <option value="Efectivo">Efectivo</option>
                      <option value="Transferencia">Transferencia</option>
                      <option value="Terminal">Terminal</option>
                    

                    </select>
                     
                  </div>        
                </div>               
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="form-group">

                 <div class="input-group">
                     <input type="text" class="form-control input-lg" id="Gps" name="Gps" disabled>
                  </div>        
                </div>               
              </div>

              <div class="col-xs-12 col-sm-4">
                <div class="form-group">

                 <div class="input-group">
                     <input type="text" class="form-control input-lg" id="monto_Gps" name="monto_Gps" value="0" disabled>
                  </div>        
                </div>               
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

          <button type="submit" class="btn btn-primary">Guardar Auto</button>

        </div>

        <?php

   

        ?>

      </form>

    </div>

  </div>

</div>
<script>
  
// var año=  document.getElementById('nuevoTemporada');
// año.addEventListener('input',function(){
//   if (this.value.length > 4) 
//      this.value = this.value.slice(0,4); 
// })


  
var tenencia =  document.getElementById('nuevoTenencia');
tenencia.addEventListener('input',function(){
  if (this.value.length > 4) 
     this.value = this.value.slice(0,4); 
})
  
</script>