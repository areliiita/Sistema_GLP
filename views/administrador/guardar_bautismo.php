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
					FORMULARIO DE INGRESO DE  BAUTISMO
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

<form  class="col s12" action="?c=Bautismo&a=Guardar" method="post" enctype="multipart/form-data">

							<div class="mdl-grid">

 <input type="hidden" name="txtIdbautismo" value="<?php echo $bautismo->idbautismo; ?>" />


<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtNombre_parroquia" required="">
													<option value="" disabled="" selected="">Seleccionar Parroquia de bautismo</option>
													<?php
													if ($comunion->parroquia_bautismo !=null) {

													$objParroquia = $modeloParroquia->obtenerparroquia($comunion->parroquia_bautismo);
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
									<input class="mdl-textfield__input" type="date" name="txtFecha_bautismo" required="">
										<label >Ingrese fecha de bautismo.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_bautizado" required="">
										<label class="mdl-textfield__label" >Ingrese nombre de la persona a bautizar.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="txtFecha_nacimiento" required="">
										<label >Ingrese fecha de nacimiento..</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_hospital" required="">
										<label class="mdl-textfield__label">Ingrese el nombre del hospital de nacimiento</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_de_padre" required="">
										<label class="mdl-textfield__label" >Ingrese el nombre completo del papá.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_de_madre" required="">
										<label class="mdl-textfield__label" >Ingrese el nombre completo de la mamá.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_padrino" required="">
										<label class="mdl-textfield__label">Ingrese el nombre completo del padrino.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_madrina" required="">
										<label class="mdl-textfield__label" >Ingrese el nombre completo de la madrina..</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_padrino3">
										<label class="mdl-textfield__label">Ingrese el nombre completo del padrino3..</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="int" name="txtCodigo_folio" required="">
										<label class="mdl-textfield__label">Ingrese el codigo de folio</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtNombre_de_ministro" required="">
													<option value="" disabled="" selected="">Seleccionar Ministro</option>
													<?php
													if ($comunion->nombre_ministro !=null) {

													$objSacerdote = $modeloSacerdote->obtenersacerdote($comunion->nombre_ministro);
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
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtHijo" required="">
													<option value="" disabled="" selected="">Seleccionar Tipo de Hijo</option>
													 	    <option value="Hijo Legitimo">Hijo Legitimo</option>
													 	    <option value="Hijo Ilegitimo">Hijo Ilegitimo</option>
												</select>
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

