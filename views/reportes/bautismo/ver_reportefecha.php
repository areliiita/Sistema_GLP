
		<div class="mdl-grid">
			<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
				<a href="?c=Bautismo&a=ImprimirReporteFechas"><button type="submit" class="btn btn bg-success btn-raised btn-md"><i class="fas fa-print"></i>IMPRIMIR</button></a>
				</div>

	</div>

      <div class="container-fluid">
			<div class="page-header">
			  <h3 class="text-titles "><i class="zmdi zmdi-book zmdi-hc-fw"></i>  REGISTROS DE FE DE BAUTISMOS MENSUALES</h3>
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
					  	<div >
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead><tr>
											<th class="text-center">N°</th>
											<th class="text-center">Parroquia</th>
											<th class="text-center">Fecha_Bautismo</th>
											<th class="text-center">Bautizado</th>
											<th class="text-center">Fecha_Nacimiento</th>
											<th class="text-center">Hospital</th>
											<th class="text-center">papa</th>
											<th class="text-center">Mama</th>
											<th class="text-center">Padrino</th>
											<th class="text-center">Madrina</th>
											<th class="text-center">Padrino3</th>
											<th class="text-center">Folio</th>
											<th class="text-center">Nombre_Ministro</th>
											<th class="text-center">Hijo</th>
										</tr>
									</thead>
									<tbody>
          <?php foreach($reportes = $bautismo->obtenerbautismofecha($_REQUEST['fechadesde'],$_REQUEST['fechahasta']) as $r): ?>
          <tr>
            <td>
              <?php echo $r->idbautismo; ?>
            </td>
            <td>
     <?php echo $r->nombre_parroquia; ?>
            </td>
            <td>
      <?php echo $r->fecha_bautismo;?>
            </td>
            <td>
      <?php echo $r->nombre_bautizado; ?>
            </td>
            <td>
      <?php echo $r->fecha_nacimiento; ?>
            </td>
            <td>
      <?php echo $r->hospital; ?>
            </td>
            <td>
      <?php echo $r->papa; ?>
            </td>
            <td>
               <?php echo $r->mama; ?>
            </td>
            <td>
              <?php echo $r->padrino; ?>
            </td>
            <td>
               <?php echo $r->madrina; ?>
            </td>
            <td>
             <?php echo $r->padrino3; ?>
            </td>
             <td>
              <?php echo $r->folio; ?>
            </td>
            <td>
              <?php echo $r->nombre_ministro; ?>
            </td>
            <td>
               <?php echo $r->hijo; ?>
            </td>
          </tr>
          <?php endforeach;//Fin de bucle ?>
        </tbody>
      </table>



    </div>

  </div>
</div>


