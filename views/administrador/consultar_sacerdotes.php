
<div class="container">
<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL <small> DE SACERDOTES</small></h1>
			</div>
                <div class="table-responsive">
                     <table id="employee_data" class="table  table-bordered" style="background-color:#EAF2F8;">
                          <thead style="background-color: black; color: white;">
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





