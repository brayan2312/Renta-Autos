

<div id="modalAgregarCliente" class="modal fade" role="dialog"style="overflow-y: scroll;">
  
  <div style="position:fixed;margin-left: 75%; background-color: white; width: 20%;height: 73%;margin-top: 85px">
    <!-- ------------------------------------------------ -->
     <div style="margin-left: 10%; font-family: Arial; margin: 0px auto;width: 76%;">
     <label style="margin-top: 5%;">Total Renta de la Unidad</label>
     <div class="input-group">
    <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
     <input class="form-control input-lg" id="Total_label" disabled="" value="0">
     </div>

     <label style="margin-top: 5%;">Total Por Horas</label>
     <div class="input-group">
      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
      <input class="form-control input-lg" id="Total_Horas_label"disabled="" value="0">
     </div>


     <label style="margin-top: 5%;">Total Servicios</label>
     <div class="input-group">
      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
       <input class="form-control input-lg" id="Total_Servi_label" disabled="" value="0">
     </div>


     <label style="margin-top: 5%;">SubTotal</label>
     <div class="input-group">
        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
        <input class="form-control input-lg" id="Total_Sub_label" disabled="" value="0">
      </div>  


     <label style="margin-top: 5%;">Iva</label>
     <div class="input-group">
        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
        <input class="form-control input-lg" id="Total_Iva_label" disabled="" value="0">
      </div>


     <label style="margin-top: 5%;">Total a Pagar $</label>
     <div class="input-group">
        <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
        <input class="form-control input-lg" id="Total_Pagar_label"disabled="" value="0">
      </div>  
   </div>
    
    <!-- ------------------------------------------------ -->
    
  </div>
  <div class="modal-dialog" id="mdialTamanio">
    
    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" id="formCliente" name="formCliente" class="formCliente" autocomplete="off">

        <!--===============yyyy======================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Renta</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="overflow-y: scroll;">

          <div class="box-body">

          <!-- ENTRADA PARA EL CLIENTE -->
          <div class="form-group row">

              <div class="col-xs-12 col-sm-1">
                <div class="form-group">                  
                  <div class="input-group">
                    <button type="button" class="btn btn-warning btnNuevoCliente" id="btnNuevoCliente" title="Agregar Nuevo" data-toggle="modal" data-target="#modalNuevoCliente"><i class="fa fa-pencil"></i></button>                    
                  </div>
                </div>
              </div>         

              <div class="col-xs-12 col-sm-9">
                <!-- ENTRADA PARA EL ESTADO -->
                <div class="form-group">                  
                  <div class="input-group">                  
                    <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 
                   <input type="text" class="form-control input-lg" id="nuevo_BuscarRfcPersonal" name="nuevo_BuscarRfcPersonal" placeholder="Ingresa nombre R.F.C">
                    
                  </div>
                </div>
                
              </div>

              <div class="col-xs-12 col-sm-1">
                <div class="form-group">                  
                  <div class="input-group">
                    <button type="button" class="btn btn-warning btnBuscarClientePersonal" id="btnBuscarClientePersonal" title="Agregar Nuevo"><i class="fas fa-search"></i></button>                    
                  </div>
                </div>
              </div>
          </div>
          
           <!-- ENTRADA PARA FACTURA -->

            <div class="form-group row">

              <div class="col-xs-12 col-sm-3">
                  <div class="form-group">
                        
                      <div class="input-group">
                        
                        <h4 id="Alerta_Factura">¿REQUIERE FACTURA?</h4>
                          <label><input type="radio" class="si_factura" name="nuevoFactura" id="nuevoFactura" value="1">SI</label>
                           &nbsp; 
                          <label><input type="radio" class="no_factura" name="nuevoFactura" id="nuevoFactura" value="0">NO</label>

                      </div>
                  </div>
              </div> 

              <div class="col-xs-12 col-sm-3" id="tipo_factura">
              </div>

              <div class="col-xs-12 col-sm-3" id="datos">
              </div>

              <div class="col-xs-12 col-sm-3" id="otra_direccion">
              </div>



              

            </div>

            <div class="factura">


              

              


             <!--  <div class="form-group row">

                <div class="col-xs-12 col-sm-6">

                </div>

                <div class="col-xs-12 col-sm-6">

                </div>

              </div> -->


              
            </div>
            
            

            <!-- ENTRADA PARA LA FECHA DE REGRESO -->

            <div class="form-group row">

              <div class="col-xs-12 col-sm-5">
                <div class="form-group">
              
                  <div class="input-group">

                    <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> 
            

                    <input type="date" class="form-control input-lg" id="nuevoFechaRegreso" name="nuevoFechaRegreso">

                  </div>
                  <div id="dias"></div>

                </div>
              </div>

              <div class="col-xs-12 col-sm-2">
                

                    <button type="button" id="btn-ob" class="btn btn-primary btn-ob" style="position: absolute; left: 46px;">Ver</button>
                    
               
              </div>
         

              <div class="col-xs-12 col-sm-5">


                <div class="form-group">
                  
                  <div class="input-group">

                    

                    <span class="input-group-addon"><i class="fas fa-clock"></i></span> 
                      <div class="bootstrap-timepicker" id="horaa">
                     <input type="text" id="hora" class="form-control input-lg timepicker">
                    </div>    
                   
                    

                  </div> 

                </div>
              </div>
          </div>

           <div class="form-group">
                  
              <div class="input-group">
                
                <input type="checkbox" id="addDia" class="addDia" name="addDia1" value="0" disabled onclick="myFunction()">Añadir 1 Día de Renta
                <input type="hidden" id="DiaE" name="DiaE" value="0">
                    

              </div>

            </div>


                     
<!-- -------------------------------------------------- -->
        <h3>Seleccionar Unidad</h3>

        <div class="form-group">
                  
          <div class="input-group">
          
            <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 

            <select class="form-control input-lg" id="CochesDisponibles" name="CochesDisponibles" disabled>
              
              <option value="">Selecionar Unidad</option>


            </select>

          </div>

        </div>
        <!-- ------------------------------------------- -->

        <div class="form-group row">

          <div class="col-xs-12 col-sm-4">
            <div class="form-group">
              <div class="input-group">
                <label>Monto</label>
                <input type="text" class="form-control input-lg" name="input_monto" id="input_monto" disabled>
                <input type="hidden" id="monto_minimo" name="monto_minimo">
              </div>        
            </div> 
          </div>

          <div class="col-xs-12 col-sm-4">
            <div class="form-group">
              <div class="input-group">
                <label>Plus</label>
                <input type="text" class="form-control input-lg" name="input_plus" id="input_plus" disabled>
              </div>        
            </div> 
          </div> 

                    

        </div>
        <!-- ----------------------------------------------- -->

        <div class="form-group row">

            <div class="col-xs-12 col-sm-2">

              <div class="form-group">
                  
                <div class="input-group">
                  <h4>HORAS:</h4>

                  <input type="text" class="form-control input-lg" name="input_horas" id="input_horas" disabled="">
                  
                  <input type="hidden" id="num_dias" name="num_dias">
                  <input type="hidden" id="num_dias2" name="num_dias2">

                  <input type="hidden" id="num_horas" name="num_horas">
                  
                  <input type="hidden" name="fecha_salida" id="fecha_salida">

                  <input type="hidden" id="hora_salida" name="hora_salida">

                  <input type="hidden" name="fecha_regreso" id="fecha_regreso">


                  <input type="hidden" id="hora_regreso" name="hora_regreso">

                  <input type="hidden" id="id_auto" name="id_auto">

                  <?php 

                    echo '<input type="hidden" name="id_user" id="id_user" value="'.$_SESSION["id"].'">';
                   ?>


                </div> 

              </div> 

            </div> 

            <div class="col-xs-12 col-sm-2">

              <div class="form-group">
                  <h4 id="Alerta_Cobrar">¿COBRAR?</h4>
                  
                <div class="input-group">

                    <label><input type="radio" id="Cobrar" class="si_cobrar" name="Cobrar" value="1" disabled>SI</label>

           
                       
                    <label><input type="radio" id="Cobrar" class="no_cobrar" name="Cobrar" value="0" disabled>NO</label>

                </div> 

              </div> 

            </div> 

            <div class="col-xs-12 col-sm-3">

              <div class="form-group">
                  <h4 id="Alerta_Cobrar_Opc">¿CUANTO?</h4>
                  
                <div class="input-group">

                    <label><input type="radio"  id="por_horas" class="Por" name="Por" value="1" disabled="">Por Horas</label>

           
                       
                    <label><input type="radio" id="por_evento" class="Por_E" name="Por" value="0" disabled="">Por Evento</label>

                </div> 

              </div> 

            </div>

            <div class="col-xs-12 col-sm-2">

              <div class="form-group">
                  
                <div class="input-group">
                  <h4>Precio</h4>

                  <input type="text" class="form-control input-lg" name="input_precio" id="input_precio" disabled="">

                </div> 

              </div> 

            </div> 

            <div class="col-xs-12 col-sm-3">

              <div class="form-group">
                  
                <div class="input-group">
                  <h4>TOTAL:</h4>

                  <input type="text" class="form-control input-lg" name="input_total" id="input_total" disabled="">

                </div> 

              </div> 

            </div> 

          </div> 

          <div class="form-group row">

            <div class="col-xs-12 col-sm-2">
                    <div class="form-group">
                      <div class="input-group">
                        <label id="Alerta_Iva">¿Agregar IVA?</label><br><br>
                        <label><input type="radio" id="radio_iva" class="si_iva" name="radio_iva" value="1">SI</label>
                        &nbsp; 
                        <label><input type="radio" id="radio_iva" class="no_iva" name="radio_iva" value="0">NO</label>
                        
                    </div>        
                </div> 
            </div>

            <div class="col-xs-12 col-sm-2">
                <div class="form-group">
                    <div class="input-group">
                        <label id="Alerta_Iva">¿Agregar Checking?</label><br><br>
                        
                        <input type="checkbox" id="Checking" class="Checking" name="Checking" value="0" onclick="myChecking()">Agregar 
                        <input type="hidden" id="che" name="che" value="0">  
                        
                    </div>        
                </div> 
            </div>

            <div class="col-xs-12 col-sm-4">

                <div class="form-group">

                    <div class="input-group Chec">
                     
                      
                    </div>        

                </div> 

            </div>


       </div> 
        <!-- ------------------------------------------------ -->

        <h3>Sevicios Adicionales</h3>
        <input type="hidden" name="Servicios_Adicionales" id="Servicios_Adicionales">

        <input type="hidden" name="TotalRenta" id="TotalRenta" value="0">
        <input type="hidden" name="TotalPlus" id="TotalPlus" value="0">
        <input type="hidden" name="TotalIva" id="TotalIva" value="0">
        <input type="hidden" name="TotalHoras" id="TotalHoras" value="0">
        <input type="hidden" name="TotalServi" id="TotalServi" value="0">
        <input type="hidden" name="TotalPagar" id="TotalPagar" value="0">
        <input type="hidden" name="Placas" id="Placas" value="0">
        <input type="hidden" name="combo" id="combo" value="0">
        
        <button type="button" class="btn btn-default" id="btnAgregarServicio" name="btnAgregarServicio" disabled>Agregar Servicio Adicional</button>
          
        <div class="form-group row" id="nuevoServicioC">

              

        </div>


        <!-- ---------------------------- -->
          </div>

        </div>
      <div id="direcciones">


        <input type="hidden" name="direccion_particular" id="direccion_particular">
        <input type="hidden" name="direccion_fiscal" id="direccion_fiscal">
        <input type="hidden" id="direccion_moral">
        
      </div>


        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" id="Guardar_Renta" class="btn btn-primary">Guardar Renta</button>

          <div id="btnGardar">
            
          </div>

        </div>

       


      </form>

    </div>

  </div>

</div>
<script>
  

</script>