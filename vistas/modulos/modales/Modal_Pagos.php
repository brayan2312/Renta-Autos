<!--=====================================
MODAL AGREGAR NUEVO DOMICILIO
======================================-->

<div id="modalPagos" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="formPagos" id="formPagos">

        <!--===============yyyy======================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">PAGOS/ADELANTOS</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

          <div class="form-group row">

            <div class="col-xs-12 col-sm-10">
                <!-- ENTRADA PARA EL ESTADO -->
                <div class="form-group">                  
                  <div class="input-group">                  
                    <span class="input-group-addon"><i class="fas fa-location-arrow"></i></span> 
                   <input type="text" class="form-control input-lg" id="BuscarRenta" name="BuscarRenta" placeholder="Ingresa NO° de contrato">
                    
                  </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-2">
                <div class="form-group">                  
                  <div class="input-group">
                    <button type="button" class="btn btn-warning btnBuscarContrato" id="btnBuscarContrato" title="Agregar Nuevo"><i class="fas fa-search"></i></button>                    
                  </div>
                </div>
            </div>

          </div>         


           <div class="panel panel-default" id="Datos_Auto">
            <div class="panel-heading">

              <label id="Placas_Auto">Placas:</label>&nbsp;
              <label id="Modelo_Auto">Modelo:</label>&nbsp;
              <label id="Dias_Auto">Dias:</label><br>
              <input type="hidden" id="id_Renta" name="id_Renta">


              <label id="Nombre_Cliente">Nombre Cliente:</label>&nbsp;
              <label id="Rfc_Cliente">RFC:</label><br>

            </div>
          </div> 

          <div id="Datos_Factura" >

            <div id="Datos">
              
            </div>
              
          </div>

          
          <div class="form-group row">
          
            <div class="col-xs-12 col-sm-6">
              
              <label id="Monto_Apagar">MONTO A PAGAR</label>&nbsp;
    
            </div>

            <div class="col-xs-12 col-sm-6">
              
              <div class="input-group">
               <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
               <input type="text" class="form-control input-lg" id="Total_Monto" name="Total_Monto" disabled="" value="0">
               <input type="hidden" id="Total" name="Total">
              </div>
    
            </div>

          </div> 

          <div class="form-group row">
          
            <div class="col-xs-12 col-sm-6">
              
              <label id="Monto_Apagar">USTED DEBE</label>&nbsp;
    
            </div>

            <div class="col-xs-12 col-sm-6">
              
              <div class="input-group">
               <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
               <input type="text" class="form-control input-lg" name="Total_Debe" id="Total_Debe" disabled="" value="0">
              </div>
    
            </div>

          </div>  


          <div class="form-group row">
          
            <div class="col-xs-12 col-sm-3">
              
              <label id="Monto_Apagar">PAGAR/ABONAR</label>&nbsp;
    
            </div>

            <div class="col-xs-12 col-sm-4">
              
              <div class="form-group">
                  
                <div class="input-group">
          
                
                  <select class="form-control input-lg" id="FormaPago" name="FormaPago">
              
                    <option value="">Selecionar</option>
                    <option value="efectivo">EFECTIVO</option>
                    <option value="tarjetaD">TARJETA DÉBITO</option>
                    <option value="tarjetaC">TARJETA CREDITO</option>
                    <option value="transferencia">TRANSFERENCIA</option>


                  </select>

                </div>

              </div>
    
            </div>

            <div class="col-xs-12 col-sm-5">
              
              <div class="input-group">
               <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
               <input class="form-control input-lg" id="inputPago" name="inputPago">

               <input type="hidden" id="Pagos" name="Pagos" value="">
               <input type="hidden" id="PagosT" name="PagosT" value="">
               <input type="hidden" id="Abonos" name="Abonos" value="">

               <input type="hidden" id="id_renta" name="id_renta">
              </div>
    
            </div>

          </div>        

         
          

          
          

            

          

          </div>

        </div>



        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" id="btn-pagos" idrenta="" class="btn btn-primary">Imprimir</button>

          <button type="button" id="btn_Pagos" class="btn btn-primary">Guardar Pago</button>

        </div>

      </form>

    </div>

  </div>

</div>

