
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>F-R SACERDOTE</title>

</head>
<body>

		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="fas fa-address-card" style="width: 60px; margin-left: 100px; margin-top: 50px; height: 50px;"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					MODIFICAR REGISTROS  DE SACERDOTE
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
						<form method="post" action="?c=Sacerdote&a=Guardar" enctype="multipart/form-data">
							<div class="mdl-grid">
	<input type="hidden" name="txtIdsacerdote" value="<?php echo $sacerdote->idsacerdote; ?>" />
						

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtNombre" value="<?php echo $sacerdote->nombre; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre .</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtApellido"value="<?php echo $sacerdote->apellido; ?>">
				<label class="mdl-textfield__label" for="urlCompany">Ingrese los apellidos.</label>
			</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtCargo" value="<?php echo $sacerdote->cargo; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el cargo del sacerdote.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="date" name="txtFecha_nacimiento" value="<?php echo $sacerdote->fecha_nacimiento; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese su fecha de nacimiento.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtDui" value="<?php echo $sacerdote->dui; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese su número de documento de identiedad DUI.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNacionalidad" value="<?php echo $sacerdote->nacionalidad; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese su nacionalidad.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtPeriodo_desde" value="<?php echo $sacerdote->periodo_desde; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Periodo desde.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtPeriodo_hasta" value="<?php echo $sacerdote->periodo_hasta; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Periodo hasta.</label>
				</div>
			</div>
</div>
	<p class="text-center">
	<button href="#!"  type="submit" class="btn btn bg-primary btn-raised btn-md"><i class="zmdi zmdi-floppy" id="btn-addCompany"></i> GUARDAR</button>
	</p>
</form>

</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>