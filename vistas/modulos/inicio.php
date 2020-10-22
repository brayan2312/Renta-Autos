<?php 

if($_SESSION["perfil"] == "Vendedor"){
  echo '<script>
    window.location = "autos-disponibles";
  </script>';

  return;
}

 ?>

<div id="contenedor">
<img id="background_imagen" src="vistas/img/imagenes/portada4.jpg">
    <!-- Cabecera -->
    <br>
    <br>
    <header id="cabecera_1">
    </header>
    <!-- Menu -->
    <nav id="menu_1">
        <ul class="ult">
            <li class="lis"><a class="aa" href="totalcar">
                <div id="icono1"></div>
                TOTALCAR.RENT
            </a></li>
            
            <li class="lis"><a class="aa" href="autos-disponibles">
                <div id="icono2"></div>
                AUTOS DISPONIBLES
            </a></li>
            
            <!-- <li class="lis"><a class="aa" href="#">
                <div id="icono3"></div>
                RENTA AUTOS
            </a></li>
            <li class="lis"><a class="aa" href="#">
                <div id="icono4"></div>
                RENTAS CAMIONETAS
            </a></li> -->
        </ul>
    </nav>
    
</div>



    <!-- <footer class="main-footer">
    
    <strong>Copyright &copy; 2019 <a href="#" target="_blank" class= >BRAYAN FERNANDO ANTUNEZ NAVA</a></strong>

    Todos los derechos reservados.


</footer>
 -->