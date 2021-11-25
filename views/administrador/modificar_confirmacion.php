<?php
require_once 'models/Sacerdote.php';
$Sacerdote = new sacerdote();
$modeloSacerdote = new Sacerdote();

require_once 'models/Obispo.php';
$Obispo = new Obispo();
$modeloObispo = new Obispo();

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
					MODIFICAR RESGISTROS DE  CONFIRMACIÓN
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Modificar el Registro
					</div>

					<div class="full-width panel-content">

<form  class="col s12" action="?c=Confirmacion&a=Guardar" method="post" enctype="multipart/form-data">

							<div class="mdl-grid">
 <input type="hidden" name="txtIdconfirmacion" value="<?php echo $confirmacion->idconfirmacion; ?>" />

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre" value="<?php echo $confirmacion->nombre; ?>">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese el nombre de la persona.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtApellidos" value="<?php echo $confirmacion->apellidos; ?>">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese apellidos de la persona.</label>
									</div>
								</div>



				 <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield">
				<select class="mdl-textfield__input" name="txtSexo" value="<?php echo $confirmacion->sexo; ?>">

					<?php
						if ($confirmacion->sexo=="Femenino") {
					?>
					<option value="Femenino" selected="">Femenino</option>
					<option value="Masculino">Masculino</option>
					<?php
					} else {
					?>
					<option value="Femenino">Femenino</option>
					<option value="Masculino" selected="">Masculino</option>
					<?php
						}
					?>
				</select>
							</div>
							</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtConfirmado_otro_lugar" value="<?php echo $confirmacion->confirmado_otro_lugar; ?>">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese el lugar de la confirmación.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="txtFecha_nacimiento" value="<?php echo $confirmacion->fecha_nacimiento; ?>">
										<label class="mdl-textfield__label" for="NameCompany">Ingresa fecha de nacimiento</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_padre" value="<?php echo $confirmacion->nombre_padre; ?>">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo del papá.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_madre" value="<?php echo $confirmacion->nombre_madre; ?>">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo de la mamá.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_padrino" value="<?php echo $confirmacion->nombre_padrino; ?>">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo del padrino.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_madrina" value="<?php echo $confirmacion->nombre_madrina; ?>">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el nombre completo de la madrina..</label>
									</div>
								</div>


										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtMinistro" value="<?php echo $confirmacion->ministro; ?>" >

												<?php foreach ($modeloSacerdote->listarSacerdote() as $r):?>
												<option value="<?php echo $r->idsacerdote; ?>" <?php if($confirmacion->ministro==$r->idsacerdote) echo "selected"; ?> ><?php echo $r->nombre; ?></option>
												<?php endforeach; ?>

												</select>
											</div>
										</div>

										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtObispo" value="<?php echo $confirmacion->obispo; ?>" >

												<?php foreach ($modeloObispo->listarobispo() as $r):?>
												<option value="<?php echo $r->idobispo; ?>" <?php if($confirmacion->obispo==$r->idobispo) echo "selected"; ?> ><?php echo $r->nombre; ?></option>
												<?php endforeach; ?>

												</select>
											</div>
										</div>


										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="txtFecha_confirmacion" value="<?php echo $confirmacion->fecha_confirmacion; ?>">
										<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de confirmacion</label>
									</div>
								</div>

										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="txtFecha_bautismo" value="<?php echo $confirmacion->fecha_bautismo; ?>">
										<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de bautismo</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield">
				<select class="mdl-textfield__input" name="txtParroquia_bautismo" value="<?php echo $confirmacion->parroquia_bautismo; ?>" >
				<?php foreach ($modeloParroquia->listarParroquia() as $r):?>
					<option value="<?php echo $r->id_parroquia; ?>" <?php if($confirmacion->parroquia_bautismo==$r->id_parroquia) echo "selected"; ?> ><?php echo $r->nombre_parroquia; ?></option>
				<?php endforeach; ?>

					</select>
				</div>
			</div>




								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtDiosesis" value="<?php echo $confirmacion->diosesis; ?>">
										<label class="mdl-textfield__label" for="addressCompany">Ingrese diosesis.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtFolio" value="<?php echo $confirmacion->folio; ?>">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese el codigo del folio.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="int" name="txtEdad" value="<?php echo $confirmacion->edad; ?>">
										<label class="mdl-textfield__label" for="urlCompany">Ingrese la edad del  confirmado.</label>
									</div>
								</div>


			 <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
			<div class="mdl-textfield mdl-js-textfield">
			<select class="mdl-textfield__input" name="txtHijo" value="<?php echo $confirmacion->hijo; ?>">
					<?php
						if ($confirmacion->hijo=="Hijo Legitimo") {
					?>
					<option value="Hijo Legitimo" selected="">Hijo Legitimo</option>
					<option value="Hijo Ilegitimo">Hijo Ilegitimo</option>
					<?php
					} else {
					?>
					<option value="Hijo Legitimo">Hijo Legitimo</option>
					<option value="Hijo Ilegitimo" selected="">Hijo Ilegitimo</option>
					<?php
						}
					?>
				</select>
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

