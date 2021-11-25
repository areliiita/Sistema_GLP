-<?php
  //validar la sesión
  @session_start();
  if(!isset($_SESSION["idusuario"])){
    header('Location: index.php?c=Login&a=Index');
  }


?>
<body>
<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				SGLP <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar.jpeg" alt="UserIcon">
					<figcaption class="text-center text-titles">PARROQUIA SAN ANTONIO DE PAUDA</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="?c=Bautismo&a=CrearReporte"> Reportes
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="#" class="btn-exit-system" style="text-decoration: none;" > 
						<p class="palabra" style="background-color:#e0dad6; width:60px; text-decoration: none;">Salir</p> 
						
							<i class="zmdi zmdi-power"></i>
						</a>
						<style>
							.palabra{
								visibility:hidden;
							}

							a:hover .palabra {
								visibility: visible;
							}
						</style>
					</li>
				</ul>
			</div>



			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="?c=Principal&a=Index">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> LIBROS PARROQUIALES
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Libro Bautismo <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="?c=Bautismo&a=Crud"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nuevo Resgistro</a>
						</li>
						<li>
				    <a href="?c=Bautismo&a=Consultar"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Libro Confirmación <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="?c=Confirmacion&a=Crud"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nuevo Registro</a>
						</li>
						<li>
				    <a href="?c=Confirmacion&a=Consultar"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Libro Primera Comunión <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="?c=Comunion&a=Crud"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nuevo Registro</a>
						</li>
						<li>
				    <a href="?c=Comunion&a=Consultar"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Libro Matrimonio <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="?c=Matrimonio&a=Crud"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nuevo Registro</a>
						</li>
						<li>
				    <a href="?c=Matrimonio&a=Consultar"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>


				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="?c=Usuario&a=Crud"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Administradores</a>
						</li>
						<li>
				    <a href="?c=Usuario&a=Consultar"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="fas fa-church"></i> </i> Parroquia<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="?c=Parroquia&a=Crud"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nueva Parroquia</a>
						</li>
						<li>
				    <a href="?c=Parroquia&a=Consultar"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Sacerdotes<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="?c=Sacerdote&a=Crud"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Nuevo Ingreso</a>
						</li>
						<li>
				    <a href="?c=Sacerdote&a=Consultar"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>


				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-account-add zmdi-hc-fw"></i>  Obispo<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="?c=Obispo&a=Crud"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Nuevo Obispo</a>
						</li>
						<li>
				    <a href="?c=Obispo&a=Consultar"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>

			</ul>
		</div>
	</section>

	
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>

				<li class="pull-left">
				</li>
				<li><small class="btn-modal-help" >Ayuda</small></li>

				<li>
					<a href=""  style="text-decoration: none;" >
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
