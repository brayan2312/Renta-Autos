<!--=====================================
MODAL EDITAR SOCIO
======================================-->

<div id="modalAgregarFotos" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data" name="formSocio" class="formSocio">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Fotos</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA NUMERO DE SOCIO -->
            
             <div class="form-group text-black">

               <input id="archivos"  accept="image/png, .jpeg, .jpg, image/gif" type="file" name="archivossubidos[]" multiple required></input>

               <input type="hidden" id="id" name="id">

               <input type="hidden" id="id_socio" name="id_socio">

                
               
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

          <button type="submit" name="btn_subir" class="btn btn-primary btn-sm">Subir archivos</button>


        </div>
<?php 

  ControladorAutos::subirArchivos();


 ?>
      

      </form>

    </div>

  </div>

</div>
