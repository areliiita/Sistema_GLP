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
					FORMULARIO DE INGRESO DE CONFIRMACIÓN
				</p>
			</div>
		</section>


		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Nuevo Registro
					</div>

					<div class="full-width panel-content">

<form  class="col s12" action="?c=Confirmacion&a=Guardar" method="post" enctype="multipart/form-data">

							<div class="mdl-grid">

 <input type="hidden" name="txtIdconfirmacion" value="<?php echo $confirmacion->idconfirmacion; ?>" />

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre">
										<label class="mdl-textfield__label" >Ingrese el nombre de la persona.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtApellidos">
										<label class="mdl-textfield__label" >Ingrese apellidos de la persona.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtSexo">
										<label class="mdl-textfield__label" >Ingrese sexo de la persona.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtConfirmado_otro_lugar">
										<label class="mdl-textfield__label" >Ingrese el lugar de la confirmación.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="txtFecha_nacimiento">
										<label >Ingresa fecha de nacimiento</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_padre">
										<label class="mdl-textfield__label" >Ingrese el nombre completo del papá.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_madre">
										<label class="mdl-textfield__label" >Ingrese el nombre completo de la mamá.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_padrino">
										<label class="mdl-textfield__label" >Ingrese el nombre completo del padrino.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_madrina">
										<label class="mdl-textfield__label" >Ingrese el nombre completo de la madrina..</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtMinistro">
													<option value="" disabled="" selected="">Seleccionar Ministro</option>
													<?php
													if ($confirmacion->ministro !=null) {

													$objSacerdote = $modeloSacerdote->obtenersacerdote($confirmacion->ministro);
													echo  '<option value="'.$objSacerdote->nombre.'" selected>'.$objSacerdote->nombre.'</option>';
													}else{echo "string";}
													 ?>
													 <?php foreach($modeloSacerdote->listarSacerdote() as $r): ?>
													 	    <option value="<?php echo $r->idsacerdote; ?>"><?php echo $r->nombre; ?></option>
													 	    <?php endforeach; ?>
												</select>
											</div>
										</div>

										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="txtFecha_confirmacion">
										<label >Selecciona fecha de confirmacion</label>
									</div>
								</div>

										<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="txtFecha_bautismo">
										<label >Selecciona fecha de bautismo</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtParroquia_bautismo">
													<option value="" disabled="" selected="">Seleccionar Parroquia de bautismo</option>
													<?php
													if ($confirmacion->parroquia_bautismo !=null) {

													$objParroquia = $modeloParroquia->obtenerparroquia($confirmacion->parroquia_bautismo);
													echo  '<option value="'.$objParroquia->nombre_parroquia.'" selected>'.$objParroquia->nombre_parroquia.'</option>';
													}else{echo "strring";}
													 ?>
													 <?php foreach($modeloParroquia->listarParroquia() as $r): ?>
													 	    <option value="<?php echo $r->id_parroquia; ?>"><?php echo $r->nombre_parroquia; ?></option>
													 	    <?php endforeach; ?>
												</select>
											</div>
										</div>



								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtDiosesis">
										<label class="mdl-textfield__label" >Ingrese diosesis.</label>
									</div>
								</div>



								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtFolio">
										<label class="mdl-textfield__label" >Ingrese el codigo del folio.</label>
									</div>
								</div>


								</div>



							
		<p class="text-center">
			<button href="#!" class="btn btn bg-primary btn-raised btn-md"><i class="zmdi zmdi-floppy" id="btn-addCompany"></i> GUARDAR</button>
			</p>
						</form>


					</div>
				</div>
			</div>
		</div>
	</section>
