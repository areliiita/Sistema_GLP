<?php
require_once 'models/Sacerdote.php';
$Sacerdote = new sacerdote();
$modeloSacerdote = new Sacerdote();

require_once 'models/Parroquia.php';
$Parroquia = new Parroquia();
$modeloParroquia = new Parroquia();
 ?>


				<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="fas fa-address-card" style="width: 60px; margin-left: 100px; margin-top: 50px; height: 50px;"></i>
			</div>
			<div class="full-width header-well-text">
				<p class="text-condensedLight">
				MODIFICAR REGISTROS DE PRIMERA COMUNION
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i>Modificar el registro
					</div>
					<div class="full-width panel-content">
<form method="POST" action="?c=Comunion&a=Guardar"  enctype="multipart/form-data">
							<div class="mdl-grid">
	 <input type="hidden" name="txtIdcomunion" value="<?php echo $comunion->idprimeracomunion; ?>" />

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtNombre" value="<?php echo $comunion->nombre; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese  nombre de la Persona</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtApellidos" value="<?php echo $comunion->apellidos; ?>" >
				<label class="mdl-textfield__label" for="urlCompany">Ingrese Apellidos de la persona</label>
			</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="date" name="txtFecha_nacimiento"  value="<?php echo $comunion->fecha_nacimiento; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese Fecha de nacimiento.</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtDomicilio" value="<?php echo $comunion->domicilio; ?>" >
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el domicilio de la persona.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNombre_de_padre" value="<?php echo $comunion->nombre_padre; ?>">
					<label class="mdl-textfield__label" >Ingrese nombre de padre </label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNombre_de_madre" value="<?php echo $comunion->nombre_madre; ?>">
					<label class="mdl-textfield__label" >Ingrese nombre de madre</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
	<div class="mdl-textfield mdl-js-textfield">
				<select class="mdl-textfield__input" name="txtNombre_parroquia_bautismo" value="<?php echo $comunion->parroquia_bautismo; ?>" >
				<?php foreach ($modeloParroquia->listarParroquia() as $r):?>
					<option value="<?php echo $r->id_parroquia; ?>" <?php if($comunion->parroquia_bautismo==$r->id_parroquia) echo "selected"; ?> ><?php echo $r->nombre_parroquia; ?></option>
				<?php endforeach; ?>

					</select>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="date" name="txtFecha_bautismo"  value="<?php echo $comunion->fecha_bautismo; ?>">
					<label class="mdl-textfield__label" >Ingrese la fecha de bautismo</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtFolio" value="<?php echo $comunion->folio; ?>">
					<label class="mdl-textfield__label" >Ingrese el folio</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="date" name="txtFecha_de_confesion" value="<?php echo $comunion->fecha_confesion; ?>">
					<label class="mdl-textfield__label" >Ingrese la fecha de confesion</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="date" name="txtFecha_de_comunion" value="<?php echo $comunion->fecha_comunion; ?>">
					<label class="mdl-textfield__label" >Ingrese la fecha de comunion</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtCatequista" value="<?php echo $comunion->catequista; ?>">
					<label class="mdl-textfield__label" >Ingrese el catequista</label>
				</div>
			</div>

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtCelebrante_de_comunion" value="<?php echo $comunion->celebrante_comunion; ?>" >

												<?php foreach ($modeloSacerdote->listarSacerdote() as $r):?>
												<option value="<?php echo $r->idsacerdote; ?>" <?php if($comunion->celebrante_comunion==$r->idsacerdote) echo "selected"; ?> ><?php echo $r->nombre; ?></option>
												<?php endforeach; ?>

												</select>
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
