 <header class="main-header">
 	
	<!--=====================================
	LOGOTIPO
	======================================-->
	<a href="inicio" class="logo">
		<div>
			
			<!-- logo mini -->
			<span class="logo-mini">
				
				<img src="vistas/img/plantilla/iniciales.png" class="img-responsive" style="width: 100px; height: 45px;">

			</span>

			<!-- logo normal -->

			<span class="logo-lg" >
				
				<img id="center_1" src="vistas/img/plantilla/totalcar.png" class="img-responsive" style="padding:17px; position:relative; margin-top: -22px;">

			</span>
		</div>	

	</a>
	
	<!--=====================================
	BARRA DE NAVEGACIÓN
	======================================-->
	<nav class="navbar navbar-static-top" role="navigation">
		
		<!-- Botón de navegación -->

	 	<!-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> -->
        	
        	<span class="sr-only">Toggle navigation</span>
      	
      	</a>

		<!-- perfil de usuario -->

		<div class="navbar-custom-menu">
				
			<ul class="nav navbar-nav">
				
				<li class="dropdown user user-menu">
					
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					<?php

					
						if($_SESSION["perfil"] == "Administrador"){
							$item = "id"; 
							$valor = $_SESSION["id"];

							$user = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);
							
							echo '<span class="hidden-xs">'; echo $user["nombre"]; echo'</span>';

						
						}

					?>
		
					</a>

					<!-- Dropdown-toggle -->

					<ul class="dropdown-menu">
						
						<li class="user-body">
							
							<div class="pull-right">
								
								<a href="salir" class="btn btn-default btn-flat">Salir</a>

							</div>

						</li>

					</ul>

				</li>

			</ul>

		</div>

	</nav>

 </header>