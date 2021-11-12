
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
        <button class="btn btn-success" name="nombreParroco">Asignar Parroco a Imprimir en Acta</button>
    </form>
</div>
<?php if (isset($_POST['nombreParroco'])):?>

<div class="mdl-grid">
<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
<a  href="javascript:Imprimir_Contenido1('acta_bautismo')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>

<script>
    $(document).ready(function() {
        $("#asignar-v").click(function(event) {
            var nombrev = $("#nombre-v").val();
            alert(nombrev);
            event.preventDefault();
        });
    });
</script>
<div style="margin-left: 10px;margin-bottom: 15px;">
    <form method="post">
        <input type="text" class="form-control" placeholder="Nombre Vicario" name="nombre_v" required="ON" style="width:300px">
        <button class="btn btn-success" name="nombreVicario">Asignar Vicario a Imprimir en Acta</button>
    </form>
</div>
<?php if (isset($_POST['nombreVicario'])):?>

<div class="mdl-grid">
<div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
<a  href="javascript:Imprimir_Contenido('acta_bautismo')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i> IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>




<div id="acta_bautismo">
<div  style="background-color:#E6E6FA">
    <img style="float:left;margin-bottom:0px; margin-top: 10px;margin-left: 40px; margin-right: 40px;white-space:pre;" src="./views/administrador/logo/logo.png" width="130px" alt="Logo"> &nbsp;
    <p>
    <h2 style="margin-top:50px;margin-bottom:60px;text-align:justify;"><b> FE DE BAUTISMO</b></h2>
    </p>
    <p style="text-align:justify;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;">
     Partida de Bautismo de: <b><?php echo $bautismo->nombre_bautizado; ?></b>.<br>
        El infrascrito <b>
     <?php
            if (isset($_POST['nombreParroco']))
            {
                echo "Pbro:". $_POST['nombre_p']."<br>";
            }
        ?>
         <?php
            if (isset($_POST['nombreVicario']))
            {
                echo "Vicario: ". $_POST['nombre_v']."<br>";
            }
        ?>
        </u></b>
     De la Parroquia <b><u><?php echo $bautismo->nombre_parroquia; ?></b>, Ilobasco,Cabañas</u> certifica que:
    </p>
         <p style="text-align:justify;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;"> En la Parroquia <b><?php echo $bautismo->nombre_parroquia; ?></b>, Ilobasco a
<?php echo $bautismo->fecha_bautismo; ?>. Recibió El Sacramento del Bautismo: <b><?php echo $bautismo->nombre_bautizado; ?></b>, que nació el <?php echo $bautismo->fecha_nacimiento; ?>, en el  <?php echo $bautismo->nombre_hospitaldenacimiento; ?>, siendo <?php echo $bautismo->hijo; ?> de <?php echo $bautismo->nombre_padre; ?> y de <?php echo $bautismo->nombre_madre; ?>.
         <br>
     <b><u>Padrinos: </b><?php echo $bautismo->nombre_padrino; ?>, <?php echo $bautismo->nombre_madrina; ?>  <?php echo $bautismo->nombre_padrino3;?>.</u>
     <br>
     <b><u>Ministro: </b>Pbro.<?php echo $bautismo->nombre_ministro; ?></u>.</p>


     <p style="text-align:justify;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;">
    La presente es copia fiel del  original, la que  me remito y la expido en la Oficina Paroquial  el dia

<?php
date_default_timezone_set('America/El_Salvador');
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Domingo");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
?>.<br>
</p>

 <p style="text-align:center;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;">
    <?php
            if (isset($_POST['nombreParroco']))
            {
                echo "Pbro.".$_POST['nombre_p']."<br> Párroco.";
            }
        ?>
    <?php
            if (isset($_POST['nombreVicario']))
            {
                echo $_POST['nombre_v']."<br> Vicario. ". "<br>";
            }
        ?>

        </p>



      <p style="text-align:justify;margin-left:70px;margin-right:50px;line-height: 20pt; font-size: 18px;">
          <b>AUTENTICIDAD:<br></b>Se certifica que el sello de la Paroquia  de_________________________________
            <br>
          Y la firma del Párroco P.__________________________________son auténticos.
          <br>
          SELLO
        </p>
        <p style="text-align:right;margin-left:70px;margin-right:50px;line-height: 20pt; font-size: 18px;">
         VICARIO GENERAL
        </p>
         <p style="text-align:justify;margin-left:70px;margin-right:50px;line-height: 20pt; font-size: 18Px;">
         San Vicente, a______________ de ______________ del Dos mil _____________</p>.

           <p style="text-align:right;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;">
        <i><small> Parroquia San Antonio de Padua <br>
            Agua Zarca San Antonio km 49 1/2, Carretera a Ilobasco, Cabañas<br>
            E-mail: sanantoniodepaduailob@gmail.com <br>
            Tel.7203-6039
            </small></i>
         </p>
    </div>
</div>
</div>


<script language="Javascript">
  function Imprimir_Contenido1(nombre)
  {
  var ficha = document.getElementById(nombre);
  var Ventana_Impresion = window.open(' ', 'popimpr');
  Ventana_Impresion.document.write( ficha.innerHTML );
  Ventana_Impresion.document.close();
  Ventana_Impresion.print( );
  Ventana_Impresion.close();
  }
</script>

<script language="Javascript">
  function Imprimir_Contenido(nombrev)
  {
  var ficha = document.getElementById(nombrev);
  var Ventana_Impresion = window.open(' ', 'popimpr');
  Ventana_Impresion.document.write( ficha.innerHTML );
  Ventana_Impresion.document.close();
  Ventana_Impresion.print( );
  Ventana_Impresion.close();
  }
</script>
