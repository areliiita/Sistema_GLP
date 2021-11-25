<div class="container">
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL DE REGISTROS DE MATRIMONIO </h1>
			</div>
		</div>

								<table id="employee_data" class="table  table-bordered" style="background-color:#EAF2F8;">
									<thead style="background-color: black; color: white;">
										<tr>
											<th class="text-center">N°</th>
											<th class="text-center">Hora_boda</th>
											<th class="text-center">Nombre_de_Novio</th>
											<th class="text-center">Nombre_de_Novia</th>
											<th class="text-center">Fecha de Matrimonio</th>
											<th class="text-center">Parroquia</th>
											<th class="text-center">Folio</th>
											<th class="text-center">Padrino</th>
											<th class="text-center">Madrina</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>
											<th class="text-center">Ver</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php foreach($this->model->listarmatrimonio() as $r): ?>
												<td><?php echo $r->idmatrimonio; ?></td>
												<td><?php echo $r->hora_matrimonio; ?></td>
												<td><?php echo $r->nombrecompleto_novio; ?></td>
												<td><?php echo $r->nombrecompleto_novia; ?></td>
												<td><?php echo $r->fecha_matrimonio; ?></td>
												<td><?php echo $r->parroquia; ?></td>
												<td><?php echo $r->folio; ?></td>
												<td><?php echo $r->padrino_boda; ?></td>
												<td><?php echo $r->madrina_boda; ?></td>

											<td><a href="?c=Matrimonio&a=Modificar&id=<?php echo $r->idmatrimonio; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="?c=Matrimonio&a=Eliminar&id=<?php echo $r->idmatrimonio; ?>" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                            <td><a href="?c=Matrimonio&a=ConsultarActaMatrimonio&id=<?php echo $r->idmatrimonio; ?>" class="btn btn-info btn-raised btn-xs"><i class="fas fa-print"></i></a></td>
                                        </tr>
					<?php endforeach; ?></tbody>
								</table>

	</div>
	<script>
 $(document).ready(function(){
      $('#employee_data').DataTable();
 });
 </script>
