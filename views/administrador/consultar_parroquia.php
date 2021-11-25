<div class="container">
<div class="container-fluid">
<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL DE PARROQUIA </h1>
			</div>
			</div>
				<div class="table-responsive">
								<table id="employee_data" class="table table-bordered" style="background-color:#EAF2F8;">
									<thead style="background-color: black; color: white;">
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
									<?php endforeach; ?></tbody>
								</table>
								</div>
	</div>
	<script>
 $(document).ready(function(){
      $('#employee_data').DataTable();
 });
 </script>