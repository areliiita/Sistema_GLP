<div class="container" >
	<div class="container-fluid">
<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL   DE REGISTROS DE PRIMERAS COMUNIONES</h1>
			</div>
		</div>
		<div class="table-responsive">
			<table id="employee_data" class="table table-striped table-bordered">
				<thead>
					<tr>
											<th class="text-center">N°</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellidos</th>
											<th class="text-center">Fecha_Nacimiento</th>
											<th class="text-center">Domicilio</th>
											<th class="text-center">Fecha_Comunion</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>
											<th class="text-center">Ver</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach($this->model->listarcomunion() as $r): ?>
										<tr>
											<td><?php echo $r->idprimeracomunion; ?></td>
											<td><?php echo $r->nombre; ?></td>
											<td><?php echo $r->apellidos; ?></td>
											<td><?php echo $r->fecha_nacimiento; ?></td>
											<td><?php echo $r->domicilio; ?></td>
											<td><?php echo $r->fecha_comunion; ?></td>

											<td><a href="?c=Comunion&a=Modificar&id=<?php echo $r->idprimeracomunion; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="?c=Comunion&a=Eliminar&id=<?php echo $r->idprimeracomunion; ?>" class="btn btn-warning btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
											 <td><a href="?c=Comunion&a=ConsultarActaComunion&id=<?php echo $r->idprimeracomunion; ?>" class="btn btn-info btn-raised btn-xs"><i class="fas fa-print"></i></a></td>
                                        </tr>
                                        	<?php endforeach; ?>
									</tbody>
								</table>
							</div>
		</div>
		<script>
 $(document).ready(function(){
      $('#employee_data').DataTable();
 });
 </script>



