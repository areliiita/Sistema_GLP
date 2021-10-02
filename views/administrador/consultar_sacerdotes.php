
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Consultar_Sacerdote</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <head>

</head>
<body>
|</body>
</head>
<body>




<!-- Content page -->
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL <small> DE REGISTROS DE SACERDOTE</small></h1>
			</div>
			<p class="lead"></p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px; background-color: #0088b6">
					  	
		<li class="bg-primary"><a href="#listPeriod"  data-toggle="tab"><i class="zmdi zmdi-time-restore"></i> Informe General</a></li>
					</ul>
					<div class="tab-content">
					  	
					  	<div class="tab-pane fade" id="listPeriod">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">N°</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido</th>
											<th class="text-center">Cargo</th>
											<th class="text-center">Fecha de Nacimiento</th>
											<th class="text-center">DUI</th>
											<th class="text-center">Nacionalidad </th>
											<th class="text-center">Periodo desde</th>
											<th class="text-center">Periodo hasta</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>
											<th class="text-center">Imprimir</th>
										</tr>
									</thead>
									<tbody>
									 <?php foreach($this->model->listarSacerdote() as $r): ?>
									 <tr>
										<td><?php echo $r->idsacerdote; ?></td>
										<td><?php echo $r->nombre; ?></td>
										<td><?php echo $r->apellido; ?></td>
										<td><?php echo $r->cargo; ?></td>
										<td><?php echo $r->fecha_nacimiento; ?></td>
										<td><?php echo $r->dui; ?></td>
										<td><?php echo $r->nacionalidad; ?></td>
										<td><?php echo $r->periodo_desde; ?></td>
										<td><?php echo $r->periodo_hasta; ?></td>
										<td><a href="?c=Sacerdote&a=Modificar&id=<?php echo $r->idsacerdote; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>

										<td><a href="?c=Sacerdote&a=Eliminar&id=<?php echo $r->idsacerdote; ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                     
									 <td><a href="" class="btn btn-info btn-raised btn-xs"><i class="fas fa-print"></i></a></td>
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
	
</body>
</html>