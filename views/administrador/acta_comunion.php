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
<a  href="javascript:Imprimir_Contenido('acta_comunion')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>IMPRIMIR</button></a>
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
<a  href="javascript:Imprimir_Contenido('acta_bautismo')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>

<div id="acta_comunion">
<div style="background-color:#E6E6FA">
    <img style="float:left;margin-bottom:15px;margin-left: 40px; margin-right: 40px;white-space:pre; margin-top: 20px" src="./views/administrador/logo/logo.png" width="150px" alt="Logo"> &nbsp;
    <p>
         <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <h2 style="margin-top:50px;margin-bottom:50px;text-align:center;"><b>CONSTANCIA DE PRIMERA COMUNIÓN</b></h2>


    <p style="text-align:justify;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 20px; margin-top: 80px;">
        El infrascrito <?php
            if (isset($_POST['nombreParroco']))
            {
                echo "Pbro.".$_POST['nombre_p']." ";
            }
        ?>

        <?php
            if (isset($_POST['nombreVicario']))
            {
                echo "Vicario.".$_POST['nombre_v']." ";
            }
        ?>
        , de la Parroquia de <b><?php echo $comunion->parroquia_bautismo; ?></b>, de Ilobasco, Cabañas, hace constar que: <b><?php echo $comunion->nombre. " " .$comunion->apellidos; ?></b>  recibió su primera
        comunión en esta jurisdicción el día, <?php echo $comunion->fecha_comunion; ?>. <br><br>
        Y para los usos que se estime conveniente, se extiende la presente en la Oficina Parroquial el dia,
        <?php
date_default_timezone_set('America/El_Salvador');
$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Domingo");
$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
?>.
</p>


 <p style="text-align:center;margin-left:50px;margin-right:50px;line-height: 20pt; font-size: 20px; margin-top: 100px;"> <?php
            if (isset($_POST['nombreParroco']))
            {
                echo " <br>  <br>  Pbro.".$_POST['nombre_p']."<br> Parroco.";
            }
        ?>
        <?php
            if (isset($_POST['nombreVicario']))
            {
                echo $_POST['nombre_v']."<br> Vicario. <br>";
            }
        ?>

        </p>

    <div style="margin-top: 100px;">

          <i><small><p style="text-align:right;margin-left:70px;margin-right:50px;line-height: 20pt; font-size: 18px;">
             Parroquia San Antonio de Padua <br>
            Agua Zarca San Antonio km 49 1/2, Carretera a Ilobasco, Cabañas<br>
            E-mail: sanantoniodepaduailob@gmail.com <br>
            Tel.7203-6039</small></i>
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


