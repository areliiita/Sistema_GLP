
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
					<i class="zmdi zmdi-balance"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					FORMULARIO DE INGRESO DE DATOS GENERALES DE LA PARROQUIA
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Nueva Parroquia
					</div>
					<div class="full-width panel-content">


<form method="POST" action="?c=Parroquia&a=Guardar"  enctype="multipart/form-data">
							<div class="mdl-grid">
	 <input type="hidden" name="txtId_parroquia" value="<?php echo $parroquia->id_parroquia; ?>" />


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtNombre_parroquia">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese nombre de la parroquia.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtDireccion">
				<label class="mdl-textfield__label" for="urlCompany">Ingrese dirección.</label>
			</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtDepartamento">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese departamento.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtEmail">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese email de la parroquia.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="int" name="txtTelefono">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese número de teléfono.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtEncargado">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del encargardo de la parroquia.</label>
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

