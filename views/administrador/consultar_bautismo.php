<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL   DE REGISTROS DE FE DE BAUTISMOS</h1>
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
											<th class="text-center">Parroquia</th>
											<th class="text-center">Fecha_Bautismo</th>
											<th class="text-center">Nombre_Bautizado</th>
											<th class="text-center">Fecha_Nacimiento</th>
											<th class="text-center">Hospital_de_Nacimiento</th>
											<th class="text-center">Nombre_papa</th>
											<th class="text-center">Nombre_Mama</th>
											<th class="text-center">Nombre_Padrino</th>
											<th class="text-center">Nombre_Madrina</th>
											<th class="text-center">Nombre_Padrino3</th>
											<th class="text-center">Codigo_Folio</th>
											<th class="text-center">N°_de_Acta</th>
											<th class="text-center">Nombre_Ministro</th>
											<th class="text-center">Hijo</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>
											<th class="text-center">Imprimir</th>

										</tr>
									</thead>
									<tbody>
									<?php foreach($this->model->listarbautismo() as $r): ?>
										<tr>
											<td><?php echo $r->idbautismo; ?></td>
											<td><?php echo $r->nombre_parroquia; ?></td>
											<td><?php echo $r->fecha_bautismo; ?></td>
											<td><?php echo $r->nombre_bautizado; ?></td>
											<td><?php echo $r->fecha_nacimiento; ?></td>
											<td><?php echo $r->nombre_hospitaldenacimiento; ?></td>
											<td><?php echo $r->nombre_padre; ?></td>
											<td><?php echo $r->nombre_madre; ?></td>
											<td><?php echo $r->nombre_padrino; ?></td>
											<td><?php echo $r->nombre_madrina; ?></td>
											<td><?php echo $r->nombre_padrino3; ?></td>
											<td><?php echo $r->codigo_folio; ?></td>
											<td><?php echo $r->numero_de_acta; ?></td>
											<td><?php echo $r->nombre_ministro; ?></td>
											<td><?php echo $r->hijo; ?></td>
											<td><a href="?c=Bautismo&a=Modificar&id=<?php echo $r->idbautismo; ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="?c=Bautismo&a=Eliminar&id=<?php echo $r->idbautismo; ?>" class="btn btn-warning btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
											 <td><a href="?c=Bautismo&a=Imprimir&id=<?php echo $r->idbautismo; ?>" class="btn btn-info btn-raised btn-xs"><i class="fas fa-print"></i></a></td>
                                        </tr>
									<?php endforeach; ?></tbody></tbody>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class=""><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>


