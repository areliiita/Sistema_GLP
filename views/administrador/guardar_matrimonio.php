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
	<title>F-R Matrimonio</title>

</head>
<body>

		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="fas fa-address-card" style="width: 60px; margin-left: 100px; margin-top: 50px; height: 50px;"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					FORMULARIO DE INGRESO DE MATRIMONIO
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
				<input class="mdl-textfield__input" type="date" name="fecha_matrimonio">
				<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de matrimonio.</label>
				</div>
			</div>


		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield">
			<select class="mdl-textfield__input" name="ministro_matrimonio">
			<option value="" disabled="" selected="">Selecciona  el misnitro de matrimonio.</option>
			<option value="">Category 1</option>
			<option value="">Category 2</option>
			</select>
		</div>
		</div>


		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="jurisdiccion">
					<label class="mdl-textfield__label" for="addressCompany">Ingrese la jurisdicción.</label>
			</div>
		</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="int" name="año">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese año de matrimonio.</label>
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
					<input class="mdl-textfield__input" type="text" name="numero">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el número de acta.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="padre_novio">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del padre de novio.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="madre_novio">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de la madre de novio.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="testigo1_novio">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de testigo1 del novio.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="testigo2_novio">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de testigoe del novio..</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="nombrecompleto_novio">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo del novio.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="padre_novia">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del padre de la novia.</label>
				</div>
			</div>



			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="madre_novia">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de la madre de la novia.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="testigo1_novia">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de testigo1 de la novia.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="testigo2_novia">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de testigo2 de la novia..</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="nombrecompleto_novia">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo de la novia.</label>
				</div>
			</div>



		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield">
			<select class="mdl-textfield__input" name="parroquia">
				<option value="" disabled="" selected="">Selecciona  Nombre de la parroquia </option>
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