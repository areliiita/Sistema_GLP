<div class="container">
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL  DE REGISTROS DE CONFIRMACIÓN</h1>
			</div>
			<p class="lead"></p>
		</div>
		<div class="table-responsive">
								<table id="employee_data" class="table  table-bordered" style="background-color:#EAF2F8;">
									<thead style="background-color: black; color: white;">
										<tr>
											<th class="text-center">N°</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellidos</th>
											<th class="text-center">Sexo</th>
											<th class="text-center">Lugar de Confirmación</th>
											<th class="text-center">Fecha_de_Nacimiento</th>
											<th class="text-center">Obispo</th>
											<th class="text-center">Edad</th>
											<th class="text-center">Hijo</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>
											<th class="text-center">Ver</th>

										</tr>
									</thead>
									<tbody>
										<?php foreach($this->model->listarconfirmacion() as $r): ?>
										<tr>
										<td><?php echo $r->idconfirmacion; ?></td>
										<td><?php echo $r->nombre; ?></td>
										<td><?php echo $r->apellidos; ?></td>
										<td><?php echo $r->sexo; ?></td>
										<td><?php echo $r->confirmado_otro_lugar; ?></td>
										<td><?php echo $r->fecha_nacimiento; ?></td>
										<td><?php echo $r->obispo; ?></td>
										<td><?php echo $r->edad; ?></td>
										<td><?php echo $r->hijo; ?></td>


										<td><a href="?c=Confirmacion&a=Modificar&id=<?php echo $r->idconfirmacion; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>

										<td><a href="?c=Confirmacion&a=Eliminar&id=<?php echo $r->idconfirmacion; ?>" class="btn btn-warning btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                       <td><a href="?c=Confirmacion&a=ConsultarActaConfirmacion&id=<?php echo $r->idconfirmacion; ?>" class="btn btn-info btn-raised btn-xs"><i class="fas fa-print"></i></a></td>

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