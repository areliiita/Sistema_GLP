<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-balance"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					MODIFICAR REGISTROS DE PARROQUIA
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Modificar los registros
					</div>
					<div class="full-width panel-content">



<form method="POST" action="?c=Parroquia&a=Guardar"  enctype="multipart/form-data">
							<div class="mdl-grid">
	 <input type="hidden" name="txtId_parroquia" value="<?php echo $parroquia->id_parroquia; ?>" />

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtNombre_parroquia" value="<?php echo $parroquia->nombre_parroquia; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese  nombre de la Parroquia.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtDireccion" value="<?php echo $parroquia->direccion; ?>">
				<label class="mdl-textfield__label" for="urlCompany">Ingrese dirección.</label>
			</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtDepartamento" value="<?php echo $parroquia->departamento; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese departamento.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtEmail" value="<?php echo $parroquia->email; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese email de la parroquia.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="int" name="txtTelefono" value="<?php echo $parroquia->telefono; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese número de teléfono</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtEncargado" value="<?php echo $parroquia->encargado; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del encargado de la parroquia.</label>
				</div>
			</div>

</div>

			<p class="text-center">
			<button href="#!" type="submit" class="btn btn bg-primary btn-raised btn-md"><i class="zmdi zmdi-floppy" id="btn-addCompany"></i> MODIFICAR</button>
			</p>
						</form>


					</div>
				</div>
			</div>
		</div>
	</section>