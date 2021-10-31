
<!-- Content page -->
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL <small> DE USUARIOS</small></h1>
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
											<th class="text-center">Nombre </th>
											<th class="text-center">Apellido</th>
											<th class="text-center">Teléfono</th>
											<th class="text-center">Email</th>
											<th class="text-center">Rol </th>
										    <th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>

										</tr>
									</thead>
									<tbody>
										 <?php foreach($this->model->listarUsuario() as $r): ?>
										<tr>
											<td><?php echo $r->idusuario; ?></td>
											<td><?php echo $r->nombre; ?></td>
											<td><?php echo $r->apellido; ?></td>
											<td><?php echo $r->telefono; ?></td>
											<td><?php echo $r->email; ?></td>
											<td><?php echo $r->rol; ?></td>
											<td><a href="?c=Usuario&a=Modificar&id=<?php echo $r->idusuario; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>

											<td><a href="?c=Usuario&a=Eliminar&id=<?php echo $r->idusuario; ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>


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