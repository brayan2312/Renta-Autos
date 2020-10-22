<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Salidas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Salida </li>
    
    </ol>

  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
      <div class="box-header with-border">
      
      <button class="btn btn-danger" data-toggle="modal" data-target="#modalAgregarSalida">
          
          Agregar salida

        </button>

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarEntrada">
          
          Agregar Entrada

        </button>
        
      </div>

      <div class="box-body">
        <?php 
            if($_SESSION["perfil"] == "Administrador"){
         ?>
        <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>MOnto</th>
           <th>Razón</th>
           <th>Proveedor</th>
           
         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = 1;

          $respuesta = ControladorVentas::ctrMostrarVentasPedidos($item, $valor);

          foreach ($respuesta as $key => $value) {
           

           echo '<tr>

                  <td>'.($key+1).'</td>

                  <td>'.$value["codigo"].'</td>';

                  $itemCliente = "id";
                  $valorCliente = $value["id_cliente"];

                  $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                 

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_vendedor"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>

                

                  <td>'.$value["fecha"].'</td>

                  <td>

                    <div class="btn-group">

                 

                      

                      <button class="btn btn-warning" data-toggle="modal" data-target="#ModalEditarSalida" id="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                      
                     
                      <button class="btn btn-danger btnEliminarASalida" idSalida="'.$value["id"].'"><i class="fa fa-times"></i></button>

                    </div>  

                  </td>

                </tr>';
            }

        ?>
               
        </tbody>

       </table>
       <?php
     }

      $CumplirPedido = new ControladorVentas();
      $CumplirPedido -> ctrEntregarPedido();

      ?>

      </div>
    </div>
    <!-- /.box -->
    

      <div class="col-lg-12"> 

        <?php 

          if($_SESSION["perfil"] == "Vendedor" || $_SESSION["perfil"] == "Especial"){

            echo '<div class="box box-success">
            <div class="box-header">
              <h1>Bienvenido' .$_SESSION["nombre"].'</h1>
            </div>

            </div>';


          }

         ?>

      </div>
      

    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include "vistas/modulos/Modales/modalSDE/salidaEFV.php";
include "vistas/modulos/Modales/modalSDE/EditarSalidaEFV.php";
include "vistas/modulos/Modales/modalSDE/entradaEFV.php";
include "vistas/modulos/Modales/modalSDE/editarentradaEFV.php";


?>



        <?php

          $EditarProvedor = new ProvedoresControlador();
          $EditarProvedor -> ctrEditarProvedor();

        ?>

      </form>

    </div>

  </div>

</div>
