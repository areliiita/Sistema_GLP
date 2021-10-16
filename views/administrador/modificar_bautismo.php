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
				MODIFICAR REGISTROS DE BAUTISMO
				</p>
			</div>
</section>
		<div class="full-width divider-menu-h"></div>
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--12-col">
				<div class="full-width panel mdl-shadow--2dp">
					<div class="full-width panel-tittle bg-primary text-center tittles">
						<i class="zmdi zmdi-border-color"></i> Fe de Bautismo
					</div>
					<div class="full-width panel-content">
						<form  class="col s12" action="?c=Bautismo&a=Guardar" method="post" enctype="multipart/form-data">
							<div class="mdl-grid">
								<div class="mdl-grid">
		<input type="hidden" name="txtIdbautismo" value="<?php echo $bautismo->idbautismo; ?>" />

		<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<div class="mdl-textfield mdl-js-textfield">
				<select class="mdl-textfield__input" name="txtNombre_parroquia" value="<?php echo $bautismo->nombre_parroquia; ?>" >
				<option value="" disabled="" selected="">Seleccionar Parroquia</option>
				<?php
					if ($bautismo->nombre_parroquia !=null) {
						$objParroquia = $modeloParroquia->obtenerparroquia($bautismo->nombre_parroquia);
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
										<input class="mdl-textfield__input" type="date" name="txtFecha_bautismo" value="<?php echo $bautismo->fecha_bautismo; ?>">
										<label class="mdl-textfield__label" for="NameCompany">Selecciona fecha de bautismo</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_bautizado" value="<?php echo $bautismo->nombre_bautizado; ?>">
										<label class="mdl-textfield__label">Ingrese el nombre de la persona.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="date" name="txtFecha_nacimiento" value="<?php echo $bautismo->fecha_nacimiento; ?>">
										<label class="mdl-textfield__label">Ingresa fecha de nacimiento</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_hospital" value="<?php echo $bautismo->nombre_hospitaldenacimiento; ?>">
										<label class="mdl-textfield__label" >Ingrese nombre del hospital de nacimiento.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_de_padre" value="<?php echo $bautismo->nombre_padre; ?>">
										<label class="mdl-textfield__label">Ingrese el nombre del papa.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_de_madre" value="<?php echo $bautismo->nombre_madre; ?>">
										<label class="mdl-textfield__label">Ingrese el nombre de la mama.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_padrino" value="<?php echo $bautismo->nombre_padrino; ?>">
										<label class="mdl-textfield__label" >Ingrese el nombre del padrino.</label>
									</div>
								</div>

								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_madrina" value="<?php echo $bautismo->nombre_madrina; ?>">
										<label class="mdl-textfield__label" >Ingrese el nombre de la madrina.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtNombre_padrino3" value="<?php echo $bautismo->nombre_padrino3; ?>">
										<label class="mdl-textfield__label" >Ingrese el nombre del padrino tercero.</label>
									</div>
								</div>


								<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
										<input class="mdl-textfield__input" type="text" name="txtCodigo_folio" value="<?php echo $bautismo->codigo_folio; ?>">
										<label class="mdl-textfield__label" >Ingrese el codigo del folio.</label>
									</div>
								</div>


<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
											<div class="mdl-textfield mdl-js-textfield">
												<select class="mdl-textfield__input" name="txtNombre_de_ministro" value="<?php echo $bautismo->nombre_ministro; ?>" >
													<option value="" disabled="" selected="">Seleccionar Ministro</option>
													<?php
													if ($bautismo->nombre_ministro !=null) {

													$objSacerdote = $modeloSacerdote->obtenersacerdote($bautismo->nombre_ministro);
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
				<select class="mdl-textfield__input" name="txtHijo" value="<?php echo $bautismo->hijo; ?>">
				<option value="" disabled="" selected="">Selecciona Hijo</option>
				<option value="Hijo Legitimo">Hijo Legitimo</option>
				<option value="Hijo Ilegitimo">Hijo Ilegitimo</option>
				</select>
							</div>
							</div>


							</div>


			<p class="text-center">
			<button href="#!" type="submit" class="btn btn bg-primary btn-raised btn-md"><i class="zmdi zmdi-floppy" ></i> GUARDAR</button>
			</p>
			</form>
					</div>
				</div>
			</div>
		</div>
	</section>