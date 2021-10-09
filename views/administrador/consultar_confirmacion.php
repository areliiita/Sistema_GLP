<!-- Content page -->
<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i> INFORME GENERAL  DE REGISTROS DE CONFIRMACIÓN</h1>
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
											<th class="text-center">Apellidos</th>
											<th class="text-center">Sexo</th>
											<th class="text-center">Lugar de Confirmación</th>
											<th class="text-center">Fecha_de_Nacimiento</th>
											<th class="text-center">Nombre_del_Papa </th>
											<th class="text-center">Nombre_de_Mama</th>
											<th class="text-center">Nombre_de_Padrino</th>
											<th class="text-center">Nombre_de_Madrina</th>
											<th class="text-center">Nombre_de_Ministro</th>
											<th class="text-center">Fecha_de_Confirmación</th>
											<th class="text-center">Fecha_de_Bautismo</th>
											<th class="text-center">Parroquia_de_Bautismo</th>
											<th class="text-center">Diosesis</th>
											<th class="text-center">Año_de_Bautismo</th>
											<th class="text-center">Libro</th>
											<th class="text-center">Folio</th>
											<th class="text-center">Numero</th>
											<th class="text-center">Editar</th>
											<th class="text-center">Eliminar</th>
											<th class="text-center">Imprimir</th>
											<th class="text-center">PDF</th>
										</tr>
									</thead>
									<tbody>
										<tr>
										<td><?php echo $r->idconfirmacion; ?></td>
										<td><?php echo $r->nombre; ?></td>
										<td><?php echo $r->apellido; ?></td>
										<td><?php echo $r->sexo; ?></td>
										<td><?php echo $r->confirmado_otro_lugar; ?></td>
										<td><?php echo $r->fecha_nacimiento; ?></td>
										<td><?php echo $r->nombre_padre; ?></td>
										<td><?php echo $r->nombre_madre; ?></td>
										<td><?php echo $r->nombre_padrino; ?></td>
										<td><?php echo $r->nombre_madrina; ?></td>
										<td><?php echo $r->ministro; ?></td>
										<td><?php echo $r->fecha_confirmacion; ?></td>
										<td><?php echo $r->fecha_bautismo; ?></td>
										<td><?php echo $r->parroquia_bautismo; ?></td>
										<td><?php echo $r->diosesis; ?></td>
										<td><?php echo $r->año_bautismo; ?></td>
										<td><?php echo $r->libro; ?></td>
										<td><?php echo $r->folio; ?></td>
										<td><?php echo $r->numero; ?></td>
										<td><a href="?c=Confirmacion&Modificar" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="?c=Confirmacion&Modificar" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                         <td><a href="" class="btn btn-info btn-raised btn-xs"><i class="fas fa-print"></i></a></td>
                                          <td><a href="" class="btn btn-info btn-raised btn-xs"><i class="fas fa-print"></i></a></td>
                                        </tr>
									
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