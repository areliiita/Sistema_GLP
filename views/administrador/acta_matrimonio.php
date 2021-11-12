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
<a  href="javascript:Imprimir_Matrimonio1('acta_matrimonio')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>  IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>


<script>
    $(document).ready(function() {
        $("#asignar-v").click(function(event) {
            var nombrev = $("#nombre-v").val();
            alert(nombre);
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
<a  href="javascript:Imprimir_Matrimonio('acta_matrimonio')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>  IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>

<div id="acta_matrimonio">
<div style="background-color:#E6E6FA">
    <img style="float:left;margin-bottom:0px;margin-left: 40px; margin-right:40px; margin-top: 20px;white-space:pre;" src="./views/administrador/logo/logo.png" width="150px" alt="Logo"> &nbsp;
    <p>
        <br>
    <h2 style="margin-top:50px;margin-bottom:60px;text-align:justify;"><b>ACTA DE MATRIMONIO</b></h2>
    </p>

    <p style="text-align:justify;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;">
     Hoy  a las <u><?php echo $matrimonio->hora_matrimonio; ?></u> horas del día <u><?php echo $matrimonio->fecha_matrimonio; ?></u> en la Parroquia <b>
   <?php echo $matrimonio->parroquia; ?></b>. Diócesis de <?php echo $matrimonio->diocesis; ?>, en presencia del Párroco o delegado: <u> Pbro.<?php echo $matrimonio->ministro_matrimonio; ?></u> se presentaron para contraer matrimonio los Señores:
   <br>
            <b><u><?php echo $matrimonio->nombrecompleto_novio; ?> y </b> <b><?php echo $matrimonio->nombrecompleto_novia; ?></u></b>.</p>
          <p style="text-align:justify;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;">
            Quienes Amonestados e interrogados manifestaron su libre y mutuo consentimiento, estando de acuerdo en contraer matrimonio tal como lo enseña la Santa Iglesia Católica. </p>
        <p style="text-align:justify;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;">
           Padrinos: <u><?php echo $matrimonio->padrino_boda; ?> y <?php echo $matrimonio->madrina_boda; ?>.</u>

     <p style="text-align:justify;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 18px;">
    La presente es copia fiel del  original, la que  me remito y la expido en la Oficina Paroquial  el día
    <?php
date_default_timezone_set('America/El_Salvador');
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Domingo");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

echo $dias[date('w')]." ".date('d')." del mes de  ".$meses[date('n')-1]. " del año ".date('Y.') ;
?>
</p>

<p style="text-align:center;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 18px;">
 <?php
            if (isset($_POST['nombreParroco']))
            {
                echo "Pbro.".$_POST['nombre_p']."<br> Parroco.";
            }
        ?>
        <?php
            if (isset($_POST['nombreVicario']))
            {
                echo $_POST['nombre_v']."<br> Vicario.";
            }
        ?>
        </p>

 <p style="text-align:justify;margin-left:70px;margin-right:50px;line-height: 20pt; font-size: 18px;">
          <b>AUTENTICIDAD<br></b>Se certifica que el sello de la Paroquia  de__________________________________
<br>
Y la firma del Párroco P.___________________________________son auténticos.
<br>
SELLO.
</P>
          <p style="text-align:right;margin-left:70px;margin-right:50px;line-height: 20pt; font-size: 18px;">
         VICARIO GENERAL
        </p>


         <p style="text-align:justify;margin-left:70px;margin-right:50px;line-height: 20pt; font-size: 18px;">
        San Vicente, a_______________ de _____________del Dos mil ______________
    </p>


           <p style="text-align:right;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 18px;">
           <i> <small>Parroquia San Antonio de Padua <br>
            Agua Zarca San Antonio km 49 1/2, Carretera a Ilobasco, Cabañas<br>
            E-mail: sanantoniodepaduailob@gmail.com <br>
            Tel.7203-6039</small></i>
         </p>

         </div>
</div>
</div>
<script language="Javascript">
  function Imprimir_Matrimonio1(nombre)
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
  function Imprimir_Matrimonio(nombrev)
  {
  var ficha = document.getElementById(nombrev);
  var Ventana_Impresion = window.open(' ', 'popimpr');
  Ventana_Impresion.document.write( ficha.innerHTML );
  Ventana_Impresion.document.close();
  Ventana_Impresion.print( );
  Ventana_Impresion.close();
  }
</script>
