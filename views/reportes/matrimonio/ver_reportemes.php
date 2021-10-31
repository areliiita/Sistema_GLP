<div class="mdl-grid">
<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
<a  href="javascript:Imprimir_Reporte('matrimonio_mes')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>     IMPRIMIR</button></a>
    </div>
     </div>

<div id="matrimonio_mes" style="margin-bottom: 40px;">
 <div  style="background-color:ghostwhite;">
  <img style="float:left;margin-bottom:15px;margin-left: 20px; margin-right: 20px;white-space:pre;" src=" ./views/administrador/logo/logo.png"  width="150px" alt="Logo">  &nbsp;
    <p>
    <br>

    <h3 style="margin-top:50px;margin-bottom:50px;text-align:center;"><b>PARROQUIA SAN ANTONIO DE PADUA</b></h3>
    </p>
     <br>

     <div class="container-fluid">
         <div class="page-header">
         <h3 class="text-titles" style="text-align: center;">  REGISTROS DE FE DE BAUTISMOS MENSUALES</h3>
            </div>
        </div>
        <hr>
        <hr>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav nav-tabs" style="margin-bottom: 15px; background-color:#00798f">

        <li class="bg-primary"><a style="color: white; "> <b> Informe General</b></a></li>
                    </ul>
                    <div class="tab-content">
                        <div >
                                <table class="table table-hover table-condensed table-bordered" style="border-bottom: 2px black;">
                                    <thead><tr>
                                            <th class="text-center">N°</th>
                                            <th class="text-center">Fecha de Matrimonio</th>
                                            <th class="text-center">Ministro</th>
                                            <th class="text-center">Jurisdicción</th>
                                            <th class="text-center">Folio</th>
                                            <th class="text-center">Padre_novio</th>
                                            <th class="text-center">Madre_novio</th>
                                            <th class="text-center">Novio</th>
                                            <th class="text-center">Padre_novia</th>
                                            <th class="text-center">Madre_novia</th>
                                            <th class="text-center">Novia</th>
                                            <th class="text-center">Parroquia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
          <?php foreach($reportes = $matrimonio->obtenermatrimoniomes() as $r): ?>
          <tr>
            <td>
              <?php echo $r->idmatrimonio; ?>
            </td>
            <td>
     <?php echo $r->fecha_matrimonio;?>
            </td>
            <td>
      <?php echo $r->ministro_matrimonio; ?>
            </td>
            <td>
      <?php echo $r->jurisdiccion; ?>
            </td>
            <td>
      <?php echo $r->folio; ?>
            </td>
            <td>
      <?php echo $r->padre_novio; ?>
            </td>
            <td>
               <?php echo $r->madre_novio; ?>
            </td>
            <td>
             <?php echo $r->nombrecompleto_novio; ?>
            </td>
             <td>
              <?php echo $r->padre_novia; ?>
            </td>
            <td>
              <?php echo $r->madre_novia; ?>
            </td>
             <td>
               <?php echo $r->nombrecompleto_novia; ?>
            </td>
             <td>
               <?php echo $r->parroquia; ?>
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

