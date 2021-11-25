
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
					<i class="zmdi zmdi-accounts"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
					MODIFICAR REGISTROS  DE OBISPO
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
						<form method="post" action="?c=Obispo&a=Guardar" enctype="multipart/form-data">
							<div class="mdl-grid">
	<input type="hidden" name="txtIdobispo" value="<?php echo $obispo->idobispo; ?>">


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtNombre" value="<?php echo $obispo->nombre; ?>">
					<label class="mdl-textfield__label" >Ingrese el nombre .</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtApellido"value="<?php echo $obispo->apellido; ?>">
				<label class="mdl-textfield__label">Ingrese los apellidos.</label>
			</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtCargo" value="<?php echo $obispo->cargo; ?>">
					<label class="mdl-textfield__label" >Ingrese el cargo del obispo.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNacionalidad" value="<?php echo $obispo->nacionalidad; ?>">
					<label class="mdl-textfield__label" >Ingrese la nacionalidad del obispo..</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtPeriodo_desde" value="<?php echo $obispo->periodo_desde; ?>">
					<label class="mdl-textfield__label">Periodo desde.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtPeriodo_hasta" value="<?php echo $obispo->periodo_hasta; ?>">
					<label class="mdl-textfield__label" >Periodo hasta.</label>
				</div>
			</div>
</div>
	<p class="text-center">
	<button href="#!"  type="submit" class="btn btn bg-primary btn-raised btn-md"><i class="zmdi zmdi-floppy"></i> MODIFICAR</button>
	</p>
</form>

</div>
				</div>
			</div>
		</div>
		<br><br><br><br>

