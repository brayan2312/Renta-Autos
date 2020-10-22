<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      INICIO
      
     <!--  <small>Panel de Control</small> -->
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active"></li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">


      <div class="box-header with-border">
        
        <!--  <img src="entrada.png">
        <h3 class="box-title">MATEST</h3>
 -->
        <div class="alert alert-linght" role="alert">
          <center>
            <a href="https://conafelaunion.000webhostapp.com">Sitio Web</a>
             <h1>
               Bienvenidos!!
             </h1>
          </center>
        </div>
        


       
      </div>
      
    </div>
    <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--=====================================
MODAL AGREGAR CARRERA
======================================-->

<div id="modalEjemplo" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" class="FormularioAlum">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar carrera</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg nuevaCategoria" id="nuevaCategoria" name="nuevaCategoria" required>
                  
                  <option value="">Selecionar categoría</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $carrera = ControladorCarrera::ctrMostrarCarrera($item, $valor);
                  $value;
                  foreach ($carrera as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'" pre="'.$value["id"].'">'.$value["nombre"].'</option>';

                  }
                  
                  

                  ?>
  
                </select>

              </div>

            </div>
<!-- -------------------------------------------- -->
          <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg comboxx" id="comboxx" name="comboxx" required>
                  
                  <option value="">Selecionar Grupo</option>

                  
  
                </select>

              </div>

            </div>


  <!-- ------------------------------------------ -->
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar carrera</button>

        </div>

        <?php

          $crearCarrera = new ControladorGrupos();
          $crearCarrera -> ctrIngresar();

        ?>

      </form>

    </div>

  </div>

</div>


