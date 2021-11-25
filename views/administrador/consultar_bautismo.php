<div class="container">
<div class="container-fluid">
	<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL  DE REGISTROS DE BAUTISMO</h1>
			</div>
			<p class="lead"></p>
		</div>
				<div class="table-responsive" style="font-size:;">
								<table id="employee_data" class="table  table-bordered" style="background-color:#EAF2F8;">
									<thead  style="background-color: black; color: white;">
										<tr>
											<th class="text-center">N°</th>
											<th class="text-center">Parroquia</th>
											<th class="text-center">Fecha</th>
											<th class="text-center">Nombre_bautizado</th>
											<th class="text-center">Hospital_Nacimiento</th>
											<th class="text-center">Madre</th>
											<th class="text-center">Padre</th>
											<th class="text-center">Ministro</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>
											<th class="text-center">Ver</th>

										</tr>
									</thead>
									<tbody>
										<tr>
											<?php foreach($this->model->listarbautismo() as $r): ?>
												<td><?php echo $r->idbautismo; ?></td>
												<td><?php echo $r->nombre_parroquia; ?></td>
												<td><?php echo $r->fecha_bautismo; ?></td>
												<td><?php echo $r->nombre_bautizado; ?></td>

												<td><?php echo $r->nombre_hospitaldenacimiento; ?></td>
												<td><?php echo $r->nombre_madre; ?></td>
												<td><?php echo $r->nombre_padre; ?></td>
												<td><?php echo $r->nombre_ministro; ?></td>

											<td><a href="?c=Bautismo&a=Modificar&id=<?php echo $r->idbautismo; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="?c=Bautismo&a=Eliminar&id=<?php echo $r->idbautismo; ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                            <td><a href="?c=Bautismo&a=ConsultarActaBautismo&id=<?php echo $r->idbautismo; ?>" class="btn btn-info btn-raised btn-xs"><i class="fas fa-print"></i></a></td>
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

