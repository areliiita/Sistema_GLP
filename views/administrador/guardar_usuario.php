<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>F-R USUARIOS</title>

</head>
<body>
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="fas fa-address-card" style="width: 60px; margin-left: 100px; margin-top: 50px; height: 50px;"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					FORMULARIO DE INGRESO DE USUARIO
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



<form method="POST" action="?c=Usuario&a=Guardar"  enctype="multipart/form-data">
							<div class="mdl-grid">
	 <input type="hidden" name="txtIdusuario" value="<?php echo $usuario->idusuario; ?>" />

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtNombre">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre .</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtApellido">
				<label class="mdl-textfield__label" for="urlCompany">Ingrese los apellidos.</label>
			</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="int" name="txtTelefono">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese número telefonico.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtEmail">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese cuenta de email.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtClave">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese su contraseña.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="number" name="txtRol">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese su rol</label>
				</div>
			</div>

</div>

			<p class="text-center">
			<button href="#!" type="submit" class="btn btn bg-primary btn-raised btn-md"><i class="zmdi zmdi-floppy" id="btn-addCompany"></i> GUARDAR</button>
			</p>
						</form>


					</div>
				</div>
			</div>
		</div>
	</section>

</body>
</html>