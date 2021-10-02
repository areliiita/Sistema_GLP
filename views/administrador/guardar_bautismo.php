<?php
require('../cdn/cdn.php');


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>F-R Bautismo</title>

</head>
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
					<img src="../assets/img/avatar.jpeg" alt="UserIcon">
					<figcaption class="text-center text-titles">PARROQUIA SAN ANTONIO DE PAUDA</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
					<li>
						<a href="Login.php" >
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="Vista_principal.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> LIBROS PARROQUIALES
					</a>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Libro Bautismo <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="formulario_bautismo.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nuevo Resgistro</a>
						</li>
						<li>
				    <a href="consultar_bautismo.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>

					</ul>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Libro Confirmación <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="formulario_confirmacion.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nuevo Registro</a>
						</li>
						<li>
				    <a href="consultar_confirmacion.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>

					</ul>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Libro Primera Comunión <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="formulario_comunion.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nuevo Registro</a>
						</li>
						<li>
				    <a href="consultar_comunion.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>

					</ul>
				</li>

				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Libro Matrimonio <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
					    <li>
							<a href="formulario_matrimonio.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Nuevo Registro</a>
						</li>
						<li>
				    <a href="consultar_matrimonio.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>

					</ul>
				</li>


				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Usuarios <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">

						<li>
							<a href="formulario_usuario.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Admin</a>
						</li>
						<li>
				    <a href="consultar_usuario.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>
					</ul>
				</li>


				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="fas fa-church"></i> </i> Parroquia<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">

						<li>
							<a href="formulario_parroquia.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Datos Generales</a>
						</li>
						<li>
				    <a href="consultar_parroquia.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
				</li>

					</ul>
				</li>


				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
					<i class="zmdi zmdi-account-add zmdi-hc-fw"></i> Sacerdotes<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">

						<li>
							<a href="formulario_sacerdote.php"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i> Datos Generales</a>
						</li>
						<li>
				    <a href="consultar_sacerdotes.php"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Informe General</a>
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
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		
</section>


		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="fas fa-address-card" style="width: 60px; margin-left: 100px; margin-top: 50px; height: 50px;"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					FORMULARIO DE INGRESO DE BAUTISMO
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Fe de Bautismo
					</div>
					<div class="full-width panel-content">
						<form>
							<div class="mdl-grid">

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="nombre_parroquia">
													<option value="" disabled="" selected="">Selecciona  Nombre de la parroquia</option>
													<option value="">Category 1</option>
													<option value="">Category 2</option>
												</select>
											</div>
										</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="fecha_bautismo">
										<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de bautismo</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_bautizado">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese el nombre de la persona.</label>
									</div>
								</div>



								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="fecha_nacimiento">
										<label class="mdl-textfield__label" for="NameCompany">Ingresa fecha de nacimiento</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_hospitalnacimiento">
										<label class="mdl-textfield__label" for="emailCompany">Ingrese nombre del hospital de nacimiento.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_padre">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del papa.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_madre">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de la mama.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_padrino">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del padrino.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_madrina">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de la madrina.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_padrino3">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del padrino tercero.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_libro">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el codigo de libro.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="codigo_folio">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el codigo del folio.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="numero_acta">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el número de acta.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="nombre_ministro">
													<option value="" disabled="" selected="">Selecciona  Nombre del ministro</option>
													<option value="">Category 1</option>
													<option value="">Category 2</option>
												</select>
											</div>
										</div>


									<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="hijo_legitimo">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese si es hijo legitimo</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="hijo_ilegitimo">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese si es hijo ilegitimo</label>
									</div>
								</div>
							</div>


			<p class="text-center">
			<button href="#!" class="btn btn bg-primary btn-raised btn-md"><i class="zmdi zmdi-floppy" id="btn-addCompany"></i> Save</button>
			</p>
						</form>


					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>