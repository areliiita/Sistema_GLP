<?php
require('../cdn/cdn.php');
require('Menu.php');
require('Menu_dasboard.php');


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>F-R Confirmación</title>

</head>
<body>

		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="fas fa-address-card" style="width: 60px; margin-left: 100px; margin-top: 50px; height: 50px;"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					FORMULARIO DE INGRESO DE CONFIRMACIÓN
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Fe de Confirmación
					</div>
					<div class="full-width panel-content">
						<form>
							<div class="mdl-grid">


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese el nombre de la persona.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="apellidos">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese apellidos de la persona..</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="sexo">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese sexo de la persona.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="sexo">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese el lugar de la confirmación.</label>
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
										<input class="mdl-textfield__input" type="text" name="nombre_padre">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo del papa.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_madre">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo de la mama.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_padrino">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo del padrino.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_madrina">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo de la madrina..</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="ministro">
													<option value="" disabled="" selected="">Selecciona  Nombre del ministro</option>
													<option value="">Category 1</option>
													<option value="">Category 2</option>
												</select>
											</div>
										</div>

										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="fecha_confirmacion">
										<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de confirmacion</label>
									</div>
								</div>

										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="fecha_bautismo">
										<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de bautismo</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="parroquia_bautismo">
													<option value="" disabled="" selected="">Selecciona  la parroquia de bautismo </option>
													<option value="">Category 1</option>
													<option value="">Category 2</option>
												</select>
											</div>
										</div>


			
								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="diosesis">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese la diosesis.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="int" name="hijo_ilegitimo">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese año del bautismo</label>
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