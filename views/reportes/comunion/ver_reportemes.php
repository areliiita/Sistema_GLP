
<style>
     #printable { display: none; }

    @media print
    {
        #non-printable { display: none; }
        #printable { display: block; }
    }
</style>
<script>
    $(document).ready(function() {
        $("#asignar-p").click(function(event) {
            var nombre = $("#nombre-p").val();
            alert(nombre);
            event.preventDefault();
        });
    });
</script>
<div style="margin-left: 10px;margin-bottom: 15px;">
    <form method="post">
        <input type="text" class="form-control" placeholder="Nombre Parroco" name="nombre_p" required="ON" style="width:300px">
        <button class="btn btn-success" name="nombreParroco">Asignar Parroco a Imprimir en Reporte</button>
    </form>
</div>
<?php if (isset($_POST['nombreParroco'])):?>

<div class="mdl-grid">
<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
<a  href="javascript:Imprimir_Bautismo('reporte_bautismo')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i> IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>

<div id="reporte_bautismo" style="margin-bottom: 40px;">
 <div  style="background-color:ghostwhite;">
  <img style="float:left;margin-bottom:15px;margin-left: 20px; margin-right: 20px;white-space:pre ; margin-top: 20px" src=" ./views/administrador/logo/logo.png"  width="150px" alt="Logo">  &nbsp;
    <p>
    <br>

    <h3 style="margin-top:50px;margin-bottom:50px;text-align:center;"><b>PARROQUIA SAN ANTONIO DE PADUA</b></h3>
    </p>
     <br><br><br>
<div class="container">
<div class="container-fluid">
            <div class="page-header">
              <h4 class="text-cente"style="text-align: center;"> REPORTE MENSUAL DE PRIMERA COMUNIÓN </h4>
            </div>
        </div>
                            <table  class="table table-striped table-bordered" style=" width: 90%; border-collapse: collapse;border: 1px solid #000; margin: 0 auto;">
                                    <thead style="background-color: #C0C0C0; font-size: 16px;" ><tr>
                                        </tr>
                                            <th  style="width: 25%; text-align: center;vertical-align: top; border: 1px solid #000; ">AÑO</th>
                                            <th   style="width: 25%; text-align: center;vertical-align: top; border: 1px solid #000; border-spacing: 0;">MES</th>
                                            <th  style="width: 25%; text-align: center;vertical-align: top; border: 1px solid #000; border-spacing: 0;">TOTAL DE COMUNIONES</th>

                                        </tr>
                                    </thead>
                                    <tbody style="font-size: 20px;">
                                          <tr>
          <?php foreach($reportes = $comunion->obtenercomunionmes() as $r): ?>

            <td style="width: 25%; text-align: center;vertical-align: top; border: 1px solid #000; border-spacing: 0;">
              <?php echo $r->año; ?>
            </td>
            <td style="width: 25%; text-align: center;vertical-align: top; border: 1px solid #000; border-spacing: 0;">
     <?php echo $r->mes; ?>
            </td>
            <td style="width: 25%; text-align: center;vertical-align: top; border: 1px solid #000; border-spacing: 0;">
      <?php echo $r->total;?>
            </td>

          </tr>
          <?php endforeach;//Fin de bucle ?>
        </tbody>
      </table>
  </div>

  <br><br><br><br><br><br><br>



  <p style="text-align:center;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
    <?php
            if (isset($_POST['nombreParroco']))
            {
                echo"Pbro.". $_POST['nombre_p']."<br> Parroco";
            }
        ?>
        </p>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div>

           <p style="text-align:right;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
        Parroquia San Antonio de Padua <br>
            Agua Zarca San Antonio km 49 1/2, Carretera a Ilobasco, Cabañas<br>
            E-mail: sanantoniodepaduailob@gmail.com <br>
            Tel.7203-6039
         </p>
         </div>
          </div>
          </div>

<script language="Javascript">
  function Imprimir_Bautismo(nombre)
  {
  var ficha = document.getElementById(nombre);
  var Ventana_Impresion = window.open(' ', 'popimpr');
  Ventana_Impresion.document.write( ficha.innerHTML );
  Ventana_Impresion.document.close();
  Ventana_Impresion.print( );
  Ventana_Impresion.close();
  }
</script>


