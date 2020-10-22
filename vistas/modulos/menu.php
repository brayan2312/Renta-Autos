<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">
		<?php 

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "integradora" || $_SESSION["perfil"] == "estadia" || $_SESSION["perfil"] == "alumno"){

			echo  '<li class="active">

					<a href="inicio">

						<i class="fa fa-home"></i>
						<span>Inicio</span>

					</a>

				</li>';
		}
		if($_SESSION["perfil"] == "Administrador"){
			echo    '<li>

					<a href="usuarios">

						<i class="fa fa-user"></i>
						<span>Usuarios</span>

					</a>


				</li>
		

			<li>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>

			<li>

				<a href="provedores">

					<i class="glyphicon glyphicon-copy"></i>
					<span>Provedores</span>

				</a>

			</li>

			<li>

			<a href="salida">

				<i class="ion-cash"></i>
				<span>Salida</span>

			</a>

		</li>


			<li>

				<a href="productos">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>';
		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){
		echo    '<li>


					<a href="clientes">

						<i class="fa fa-users"></i>
						<span>Clientes</span>

					</a>


				</li>';

		}	

		if($_SESSION["perfil"] == "Administrador"){
			echo    '<li>

					<a href="totalcar">

						<i class="fa fa-user"></i>
						<span>Total Car</span>

					</a>

				</li>';

		}		
	
		
		 ?>
		</ul>

	 </section>

</aside>
