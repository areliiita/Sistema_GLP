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
					MODIFICAR REGISTRO  DE MATRIMONIO
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Modificar Registros
					</div>
					<div class="full-width panel-content">
						<form method="post" action="?c=Matrimonio&a=Guardar">
							<div class="mdl-grid">
			<input type="hidden" name="txtIdmatrimonio" value="<?php echo $matrimonio->idmatrimonio; ?>" />

			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtHora_matrimonio" value="<?php echo $matrimonio->hora_matrimonio; ?>">
					<label class="mdl-textfield__label" >Ingrese hora de matrimonio.</label>
			</div>
		</div>



			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="date" name="txtFecha_matrimonio" value="<?php echo $matrimonio->fecha_matrimonio; ?>" >
				<label>Ingrese fecha de matrimonio.</label>

				</div>
			</div>


		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
						<div class="mdl-textfield mdl-js-textfield">
							<select class="mdl-textfield__input" name="txtMinistro_matrimonio" value="<?php echo $matrimonio->ministro_matrimonio; ?>" >
											<?php foreach ($modeloSacerdote->listarSacerdote() as $r):?>
												<option value="<?php echo $r->idsacerdote; ?>" <?php if($matrimonio->ministro_matrimonio==$r->idsacerdote) echo "selected"; ?> ><?php echo $r->nombre; ?></option>
												<?php endforeach; ?>

												</select>
											</div>
										</div>


		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtJurisdiccion" value="<?php echo $matrimonio->jurisdiccion; ?>">
					<label class="mdl-textfield__label" for="addressCompany">Ingrese la jurisdicción.</label>
			</div>
		</div>


		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtDiocesis" value="<?php echo $matrimonio->diocesis; ?>">
					<label class="mdl-textfield__label">Ingrese nombre de la diocesis.</label>
			</div>
		</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="txtFolio" value="<?php echo $matrimonio->folio; ?>">
				<label class="mdl-textfield__label" for="urlCompany">Ingrese el codigo de Folio.</label>
			</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNombre_padre_novio" value="<?php echo $matrimonio->padre_novio; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del padre de novio.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNombre_madre_novio" value="<?php echo $matrimonio->madre_novio; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de la madre de novio.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNombre_del_novio" value="<?php echo $matrimonio->nombrecompleto_novio; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo del novio.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNombre_padre_novia" value="<?php echo $matrimonio->padre_novia; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del padre de la novia.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNombre_madre_novia" value="<?php echo $matrimonio->madre_novia; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de la madre de la novia.</label>
				</div>
			</div>



			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtNombre_de_novia" value="<?php echo $matrimonio->nombrecompleto_novia; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo de la novia.</label>
				</div>
			</div>

		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
	<div class="mdl-textfield mdl-js-textfield">
				<select class="mdl-textfield__input" name="txtNombre_de_parroquia" value="<?php echo $matrimonio->parroquia; ?>" >
				<?php foreach ($modeloParroquia->listarParroquia() as $r):?>
					<option value="<?php echo $r->id_parroquia; ?>" <?php if($matrimonio->parroquia==$r->id_parroquia) echo "selected"; ?> ><?php echo $r->nombre_parroquia; ?></option>
				<?php endforeach; ?>

					</select>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtPadrino_boda" value="<?php echo $matrimonio->padrino_boda; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre del padrino.</label>
				</div>
			</div>


			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
					<input class="mdl-textfield__input" type="text" name="txtMadrina_boda" value="<?php echo $matrimonio->madrina_boda; ?>">
					<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre de la madrina</label>
				</div>
			</div>
		</div>

			<p class="text-center">
			<button href="#!" class="btn btn bg-primary btn-raised btn-md"><i class="zmdi zmdi-floppy" id="btn-addCompany"></i> MODIFICAR</button>
			</p>
						</form>


					</div>
				</div>
			</div>
		</div>