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
<a  href="javascript:Imprimir_Contenido('acta_confirmacion')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>IMPRIMIR</button></a>
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
<a  href="javascript:Imprimir_Contenido('acta_confirmacion')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i> IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>

<div id="acta_confirmacion">
<div style="background-color:#E6E6FA">
    <img style="float:left;margin-bottom:15px;margin-left: 40px; margin-right: 40px;white-space:pre;" src="./views/administrador/logo/logo.png" width="150px" alt="Logo"> &nbsp;
    <p>
    	<br>
    	<br>
    	<br>
    	<br>
    <h2 style="margin-top:50px;margin-bottom:50px;text-align:center;"><b> FE DE CONFIRMACIÓN</b></h2>
    </p>

    <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
     Partida de confirmacion de: <b><?php echo $confirmacion->nombre . " " .$confirmacion->apellidos; ?></b>.</p>

<p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;"> El infraescrito   <b>  <?php
            if (isset($_POST['nombreParroco']))
            {
                echo "Pbro:". $_POST['nombre_p']."<br>";
            }
        ?>
             <?php
            if (isset($_POST['nombreVicario']))
            {
                echo "Vicario:". $_POST['nombre_v']."<br>";
            }
        ?>
        </b></p>

<p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;"> De la parroquia <b><?php echo $confirmacion->parroquia_bautismo; ?></b>, Ilobasco,Cabañas certifica que:
<br>
<br>

 <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">El Excelentísimo Señor obispo de la diosecis <?php echo $confirmacion->diosesis; ?>, <?php echo $confirmacion->obispo; ?>, autorizo al Pbro<?php echo $confirmacion->ministro; ?>,
  quien impartio el sacramento de la confirmación a: <b><?php echo $confirmacion->nombre . " " .$confirmacion->apellidos; ?></b> de  <?php echo $confirmacion->edad; ?> años de edad, el dia <?php echo $confirmacion->fecha_confirmacion; ?>, en el <?php echo $confirmacion->confirmado_otro_lugar; ?> de  la parroquia <b><?php echo $confirmacion->parroquia_bautismo; ?></b>,siendo <?php echo $confirmacion->hijo; ?> de, <?php echo $confirmacion->nombre_padre; ?> y <?php echo $confirmacion->nombre_madre; ?></p>.
        <br>

     <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
     <b>Padrino:</b><?php echo $confirmacion->nombre_padrino; ?>,<?php echo $confirmacion->nombre_madrina; ?>.</p>
     <br>

     <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
    La presente es copia fiel del  originario, la que  me remitio y la expide en la Oficina Paroquial  el dia.
<?php
date_default_timezone_set('America/El_Salvador');
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Domingo");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
?>
</p>
<br><br>

 <p style="text-align:center;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
  <?php
            if (isset($_POST['nombreParroco']))
            {
                echo $_POST['nombre_p']."<br> Parroco.";
            }
        ?>
        <?php
            if (isset($_POST['nombreVicario']))
            {
                echo $_POST['nombre_v']."<br> Vicario.";
            }
        ?>
        </p>



 <p style="text-align:justify;margin-left:100px;margin-right:50px;line-height: 20pt; font-size: 20px;">
          <b>AUTENTICIDAD<br></b>Se certifica que el sello de la Paroquia  de_______________________________________________________
</p>

 <p style="text-align:justify;margin-left:100px;margin-right:50px;line-height: 20pt; font-size: 20px;">
          Y la firma del Párroco P._________________________________________________________son auténticos.
  </p>
           <br><br>
   <p style="text-align:justify;margin-left:100px;margin-right:50px;line-height: 20pt; font-size: 20px;">
          SELLO__________________________________________________________________________________<br>
  <p style="text-align:justify;margin-left:800px;margin-right:50px;line-height: 20pt; font-size: 20px;">VICARIO GENERAL
  </p>
         <br>
         <br>
         <br>
         <br>
  <p style="text-align:justify;margin-left:100px;margin-right:50px;line-height: 20pt; font-size: 20px;">
        San Vicente, a_____________________ de _____________________ del Dos mil _____________________</p>.
    </p>
    <br>
   <div>
        <hr>
           <p style="text-align:right;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
         <small>  <i>Parroquia San Antonio de Padua <br>
            Agua Zarca San Antonio km 49 1/2, Carretera a Ilobasco, Cabañas<br>
            E-mail: sanantoniodepaduailob@gmail.com <br>
            Tel.7203-6039
            </i>
            </small>
         </p>
         </div>
</div>
</div>
</div>



<script language="Javascript">
  function Imprimir_Contenido(nombre)
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




