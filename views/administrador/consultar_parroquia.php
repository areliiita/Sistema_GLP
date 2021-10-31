
<!-- Content page -->
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL <small> DE DATOS GENERALES DE LA PARROQUIA</small></h1>
			</div>
			<p class="lead"></p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px; background-color: #00798f">

		<li class="bg-primary"><a href="#listPeriod"  data-toggle="tab"><i class="zmdi zmdi-time-restore"></i> Informe General</a></li>
					</ul>
					<div class="tab-content">

					  	<div class="tab-pane fade" id="listPeriod">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">N°</th>
											<th class="text-center">Nombre de la parroquia</th>
											<th class="text-center">Dirección</th>
											<th class="text-center">Departamento</th>
											<th class="text-center">Email</th>
											<th class="text-center">Teléfono</th>
											<th class="text-center">Encargado </th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>

										</tr>
									</thead>
									<tbody>
									<?php foreach($this->model->listarParroquia() as $r): ?>
										<tr>
											<td><?php echo $r->id_parroquia; ?></td>
											<td><?php echo $r->nombre_parroquia; ?></td>
											<td><?php echo $r->direccion; ?></td>
											<td><?php echo $r->departamento; ?></td>
											<td><?php echo $r->email; ?></td>
											<td><?php echo $r->telefono; ?></td>
											<td><?php echo $r->encargado; ?></td>

											<td><a href="?c=Parroquia&a=Modificar&id=<?php echo $r->id_parroquia; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="?c=Parroquia&a=Eliminar&id=<?php echo $r->id_parroquia; ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                        </tr>
									<?php endforeach; ?></tbody></tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class=""><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>


<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>