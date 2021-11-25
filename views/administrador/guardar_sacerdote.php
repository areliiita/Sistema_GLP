		<section class="full-width header-well">
			<div class="full-width header-well-icon">
						<i class="zmdi zmdi-accounts"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					FORMULARIO DE INGRESO DE SACERDOTE
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Nuevo Sacerdote
					</div>
					<div class="full-width panel-content">
						<form method="post" action="?c=Sacerdote&a=Guardar">
							<div class="mdl-grid">
		<input type="hidden" name="txtIdsacerdote" value="<?php echo $sacerdote->idsacerdote; ?>" />
			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtNombre" required="">
					<label class="mdl-textfield__label">Ingrese el nombre .</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtApellido" required="">
				<label class="mdl-textfield__label">Ingrese los apellidos.</label>
			</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtCargo" required="">
					<label class="mdl-textfield__label" >Ingrese el cargo del sacerdote.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			 <input  class="mdl-textfield__input"  type="date" name="txtFecha_nacimiento" required="">
			   <label>Ingrese fecha de nacimiento </label>
			</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtDui" required="">
					<label class="mdl-textfield__label">Ingrese su número de documento de identiedad DUI.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNacionalidad" required="">
					<label class="mdl-textfield__label" >Ingrese su nacionalidad.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtPeriodo_desde"  required="">
					<label class="mdl-textfield__label">Periodo desde.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtPeriodo_hasta" required="">
					<label class="mdl-textfield__label" >Periodo hasta.</label>
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

