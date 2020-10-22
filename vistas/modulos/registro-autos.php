<?php 

if($_SESSION["perfil"] == "Vendedor"){
  echo '<script>
    window.location = "autos-disponibles";
  </script>';

  return;
}

 ?>
<!-- <script>
  
   var id_var  = "<?php echo $ejemplo; ?>";

        console.log(id_var);
        

</script> -->
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Registros de Autos

    
    </h1>
<?php 
// $originalDate = "24-01-2020";
// $newDate = date("2020-01-24", strtotime($originalDate));
// echo $newDate;


 ?>
    <p id="mensaje" class="hola"></p>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Registros de Autos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarAuto">
          
          Agregar Auto

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Folio</th>
           <th>Marca</th>
           <th>Modelo</th>
           <th>Placas</th>
           <th>Estado</th>
           <th>Proximo Servicio</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;
        $idS = $_GET["id"];
        $autos = ControladorAutos::ctrMostrarAutos($item, $valor,$idS);
        
       foreach ($autos as $key => $value){

         $item2 = "id";
         $valor2 = $value["id_estado"];

        $estados = ControladorPlantilla::ctrMostrarEstados($item2, $valor2);

        
        $valor3 = $value["id_marca"];

        $marcas = ControladorAutos::ctrMostrarMarcas("id", $valor3);
   
      
         
          echo ' <tr>
                  <td>'.($key+1).'</td>';
          if($value["folio"] < "10"){

             echo '  <td>'.'A00'.$value["folio"].'</td>';


          }else if($value["folio"] > "9" && $value["folio"] < "100"){

             echo '  <td>'.'A0'.$value["folio"].'</td>';


          }else if($value["folio"] > "99" && $value["folio"] < "1000"){

             echo '  <td>'.'A'.$value["folio"].'</td>';


          } 


          echo '  <td>'.$marcas["nombre"].'</td>';
          
          echo '  <td>'.$value["modelo"].'</td>';

          echo '  <td>'.$value["placas"].'</td>';

          echo '  <td>'.$estados["nombre"].'</td>';

          echo '  <td>'.$value["proximo_servicio"].'</td>';

          echo '  <td>

                    <div class="btn-group">';

          

                        
          if($value["confirmar"] == 0){

          
            echo'<button class="btn btn-success btnSubirArchivos" idAuto="'.$value["id"].'" idSocio="'.$value["id_socio"].'" title="Editar Auto"><i class="fas fa-cloud-upload-alt"></i></button>';

             echo    '<button class="btn btn-info btnContratos" idAuto="'.$value["id"].'" data-toggle="modal" title="Agregar Auto"><i class="fas fa-file-pdf"></i></button>';
             
            echo    '<button class="btn btn-warning btnEditarAuto" idAuto="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarAuto" title="Editar Auto"><i class="fa fa-pencil"></i></button>';

            $campo = "id_auto";
            $val = $value["id"];

            $au = ControladorAutos::ctrMostrarPrecios($campo,$val);

            // if($au != false){

            //    echo    '<button class="btn btn-success btnEditarPrecios" idAuto="'.$value["id"].'" idSocio="'.$_GET["id"].'" data-toggle="modal" data-target="#modalEditarAuto" title="Editar Auto"><i class="fas fa-money-check-alt"></i></button>';

            // }else{

            //    echo  '<button class="btn btn-success btnAgregarPrecios" idAuto="'.$value["id"].'" idSocio="'.$_GET["id"].'" data-toggle="modal" data-target="#modalAgregarPrecios" title="Editar Auto"><i class="fas fa-dollar-sign"></i></button>';

            // }

            



            echo    '<button class="btn btn-danger btnEliminarAuto" idAuto="'.$value["id"].'" idSocio="'.$_GET["id"].'" title="Eliminar Auto"><i class="fa fa-times"></i></button>';
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

  include "modales/Modal_Agregar_Auto.php";

  include "modales/Modal_Agregar_Fotos.php";

  include "modales/Modal_Editar_Auto.php";



  $confirmarDatos = new ControladorAutos();
  $confirmarDatos -> ctrConfirmarDatos();
  $confirmarDatos -> ctrEliminarAuto();





 ?>