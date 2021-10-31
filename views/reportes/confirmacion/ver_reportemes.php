

<div class="mdl-grid">
<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
<a  href="javascript:Imprimir_Reporte('confirmacion_mes')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>     IMPRIMIR</button></a>
    </div>
     </div>

<div id="confirmacion_mes" style="margin-bottom: 40px;">
    <div  style="background-color:ghostwhite;">
  <img style="float:left;margin-bottom:15px;margin-left: 20px; margin-right: 20px;white-space:pre;" src=" ./views/administrador/logo/logo.png"  width="150px" alt="Logo">  &nbsp;
    <p>
    <br>
     <h3 style="margin-top:50px;margin-bottom:50px;text-align:center;"><b>PARROQUIA SAN ANTONIO DE PADUA</b></h3>
    </p>
     <br>
     <div class="container-fluid">
         <div class="page-header">
         <h3 class="text-titles" style="text-align: center;">  REGISTROS DE FE DE CONFIRMACION MENSUALES</h3>
            </div>
        </div>
        <hr>
        <hr>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px; background-color:#00798f">
        <li class="bg-primary"><a style="color: white; "> <b>Informe General</b></a></li>
                    </ul>
                    <div class="tab-content">
                        <div >
                                <table class="table table-hover table-condensed table-bordered" style="border-bottom: 2px black;">
                                    <thead><tr>
                                            <th class="text-center">N°</th>
                                            <th class="text-center">Nombre y Apellidos</th>
                                            <th class="text-center">Sexo</th>
                                            <th class="text-center">Confirmación-en</th>
                                            <th class="text-center">Fecha_Nacimiento</th>
                                            <th class="text-center">_Papa </th>
                                            <th class="text-center">Mama</th>
                                            <th class="text-center">Padrino</th>
                                            <th class="text-center">Madrina</th>
                                            <th class="text-center">Ministro</th>
                                            <th class="text-center">Fecha_Confirmación</th>
                                            <th class="text-center">Fecha_Bautismo</th>
                                            <th class="text-center">Parroquia_Bautismo</th>
                                            <th class="text-center">Diosesis</th>
                                            <th class="text-center">Folio</th>
                                        </tr>
                                    </thead>
                                    <tbody>
          <?php foreach($reportes = $confirmacion->obtenerconfirmacionmes() as $r): ?>
          <tr>
            <td>
              <?php echo $r->idconfirmacion; ?>
            </td>
            <td>
     <?php echo $r->nombre. " " .$r->apellidos;?>
            </td>
            <td>
      <?php echo $r->sexo; ?>
            </td>
            <td>
      <?php echo $r->Lugar_Confirmacion; ?>
            </td>
            <td>
      <?php echo $r->fecha_nacimiento; ?>
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
             <?php echo $r->ministro; ?>
            </td>
             <td>
              <?php echo $r->fecha_confirmacion; ?>
            </td>
            <td>
              <?php echo $r->fecha_bautismo; ?>
            </td>
            <td>
               <?php echo $r->parroquia_bautismo; ?>
            </td>
              <td>
               <?php echo $r->diosesis; ?>
            </td>
             <td>
               <?php echo $r->folio; ?>
            </td>
          </tr>
          <?php endforeach;//Fin de bucle ?>
        </tbody>
      </table>
    </div>
 </div>
  </div>
</div>

<script language="Javascript">
  function Imprimir_Reporte(nombre)
  {
  var ficha = document.getElementById(nombre);
  var Ventana_Impresion = window.open(' ', 'popimpr');
  Ventana_Impresion.document.write( ficha.innerHTML );
  Ventana_Impresion.document.close();
  Ventana_Impresion.print( );
  Ventana_Impresion.close();
  }
</script>


