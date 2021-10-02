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
	<title>F-R Primera Comunión</title>

</head>
<body>

		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="fas fa-address-card" style="width: 60px; margin-left: 100px; margin-top: 50px; height: 50px;"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					FORMULARIO DE INGRESO DE PRIMERA cOMUNIÓN
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Ingrese los registros 
					</div>
					<div class="full-width panel-content">
						<form>
							<div class="mdl-grid">

					<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="nombre_bautizado">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese el nombre de la persona.</label>
									</div>
					</div>

					<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="nombre_bautizado">
						<label class="mdl-textfield__label" for="addressCompany">Ingrese los apellidos de la persona.</label>
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
						<input class="mdl-textfield__input" type="text" name="domicilio">
						<label class="mdl-textfield__label" for="addressCompany">Ingrese el domicilio de la persona.</label>
						</div>
					</div>

					<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="email" name="email">
						<label class="mdl-textfield__label" for="addressCompany">Ingrese el correo electronico de la persona.</label>
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
							<div class="mdl-textfield mdl-js-textfield">
							<select class="mdl-textfield__input" name="parroquia_bautismo">
								<option value="" disabled="" selected="">Selecciona  Nombre de la parroquia de bautismo</option>
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
				<input class="mdl-textfield__input" type="date" name="fecha_confesion">
				<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de confesión</label>
				</div>
			</div>

				<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="date" name="fecha_comunion">
				<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de primera comunión</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="catequista">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese la catequista.</label>
				</div>
			</div>



		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield">
			<select class="mdl-textfield__input" name="celebrante_comunion">
			<option value="" disabled="" selected="">Selecciona  celebrante de comunion </option>
			<option value="">Category 1</option>
			<option value="">Category 2</option>
			</select>
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