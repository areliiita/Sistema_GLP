
<!-- Content page -->
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL  DE REGISTROS DE OBISPO</h1>
			</div>
			<p class="lead"></p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px; background-color:#00798f">

		<li class="bg-primary"><a href="#listPeriod"  data-toggle="tab"><i class="zmdi zmdi-time-restore"></i> Informe General</a></li>
					</ul>
					<div class="tab-content">

					  	<div >
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">N°</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido</th>
											<th class="text-center">Cargo</th>
											<th class="text-center">Nacionalidad</th>
											<th class="text-center">Periodo desde</th>
											<th class="text-center">Periodo hasta</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>

										</tr>
									</thead>
									<tbody>
									 <?php foreach($this->model->listarObispo() as $r): ?>
									 <tr>
										<td><?php echo $r->idobispo; ?></td>
										<td><?php echo $r->nombre; ?></td>
										<td><?php echo $r->apellido; ?></td>
										<td><?php echo $r->cargo; ?></td>
										<td><?php echo $r->nacionalidad; ?></td>
										<td><?php echo $r->periodo_desde; ?></td>
										<td><?php echo $r->periodo_hasta; ?></td>
										<td><a href="?c=Obispo&a=Modificar&id=<?php echo $r->idobispo; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="?c=Obispo&a=Eliminar&id=<?php echo $r->idobispo; ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>


                                        </tr>
									<?php endforeach; ?></tbody></tbody>
									</tbody>
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


