<?php 

if($_SESSION["perfil"] == "Vendedor"){
  echo '<script>
    window.location = "autos-disponibles";
  </script>';

  return;
}

 ?>

<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Registros de Socios

    
    </h1>

    <p id="mensaje" class="hola"></p>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Registros de Socios</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarSocio">
          
          Agregar Socio

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Folio</th>
           <th>Nombre</th>
           <th>RFC</th>
           <th>Tipo Socio</th>
           <th>Estado</th>
           <th>Correo</th>
           <th>Número de Autos</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $socios = ControladorSocios::ctrMostrarSocios($item, $valor);
       foreach ($socios as $key => $value){

         $item = "id";
         $valor = $value["id_estado"];

        $estados = ControladorPlantilla::ctrMostrarEstados($item, $valor);

        $id_socio = $value["id"];
        $num_coches = ControladorAutos::ctrMostrarNumCoches("id_socio",$id_socio);
         
          echo ' <tr>
                  <td>'.($key+1).'</td>';
          if($value["folio"] < 10){
          
            echo '  <td>'.'S00'.$value["folio"].'</td>';

          }else if($value["folio"] > 9 && $value["folio"] < 100){
          
            echo '  <td>'.'S0'.$value["folio"].'</td>';

          }else if($value["folio"] > 99 && $value["folio"] < 1000){
          
            echo '  <td>'.'S'.$value["folio"].'</td>';

          }        

          echo '  <td>'.$value["nombres"].' '.$value["apellido_p"].' '.$value["apellido_m"].'</td>';
          

          echo '  <td>'.$value["rfc"].'</td>';

          echo '  <td>'.$value["tipo_socio"].'</td>';

          echo '  <td>'.$estados["nombre"].'</td>';

          echo '  <td>'.$value["correo"].'</td>';

          echo '<td>'.$num_coches["count(folio)"].'</td>

                  <td>

                    <div class="btn-group">';

           if($value["confirmar"] == 1){

            echo    '<a href="index.php?ruta=registro-autos&id='.$value["id"].'"> <button class="btn btn-info btnAgregarAuto" idSocio="'.$value["id"].'" data-toggle="modal" title="Agregar Auto"><i class="fas fa-car"></i></button></a>';

            

           }     

          
                        
          if($value["confirmar"] == 0){   


           echo    '<button class="btn btn-success btnConfirmarDatos" idSocio="'.$value["id"].'" data-toggle="modal" title="confirmar Datos"><i class="fas fa-clipboard-check"></i></button>';    


            echo    '<button class="btn btn-warning btnEditarSocio" idSocio="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarSocio" title="Editar Socio"><i class="fa fa-pencil"></i></button>';


            echo    '<button class="btn btn-danger btnEliminarSocio" idSocio="'.$value["id"].'" title="Eliminar Socio"><i class="fa fa-times"></i></button>';
          }

          echo      '</div>  

                  </td>

                </tr>';
        }


        ?> 

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<?php 

  include "modales/Modal_Agregar_Socio.php";
  include "modales/Modal_Editar_Socio.php";



  $confirmarDatos = new ControladorSocios();
  $confirmarDatos -> ctrConfirmarDatos();
  $confirmarDatos -> ctrEliminarDatos();





 ?>