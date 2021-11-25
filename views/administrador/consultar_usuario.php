<div class="container">
<div class="container-fluid">
<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL DE REGISTROS  DE USUARIOS </h1>
			</div>
		</div>
							<div class="table-responsive">
								<table id="employee_data" class="table  table-bordered" style="background-color:#EAF2F8;" >
									<thead style="background-color: black; color: white;">
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
									
									<?php endforeach; ?></tbody>
								</table>
								</div>
	</div>
	<script>
 $(document).ready(function(){
      $('#employee_data').DataTable();
 });
 </script>

