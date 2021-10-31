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
<a  href="javascript:Imprimir_Contenido('acta')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>




<div id="acta">
<div  style="background-color:#E6E6FA">
    <img style="float:left;margin-bottom:15px;margin-left: 40px; margin-right: 40px;white-space:pre;" src="./views/administrador/logo/logo.png" width="150px" alt="Logo"> &nbsp;
    <p>
    	<br>
    	<br>
    	<br>
    	<br>
    <h2 style="margin-top:50px;margin-bottom:50px;text-align:center;"><b> FE DE BAUTISMO</b></h2>
    </p>

    <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
     Partida de bautismo de: <b><?php echo $bautismo->nombre_bautizado; ?></b>.</p>

    <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;"> El infraescrito  Pbro. <b>  <?php
            if (isset($_POST['nombreParroco']))
            {
                echo $_POST['nombre_p']."<br>";
            }
        ?></b></p>

        <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;"> De la parroquia <b><?php echo $bautismo->nombre_parroquia; ?></b>, Ilobasco,Cabañas certifica que:

          <br>
        <br>
         <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;"> En la parroquia <b><?php echo $bautismo->nombre_parroquia; ?></b>, Ilobasco a <?php echo $bautismo->fecha_bautismo; ?>. Recibió El Sacramento del Bautismo: <b><?php echo $bautismo->nombre_bautizado; ?></b>, que nació el <?php echo $bautismo->fecha_nacimiento; ?>, en el  <?php echo $bautismo->nombre_hospitaldenacimiento; ?>, siendo <?php echo $bautismo->hijo; ?> de <?php echo $bautismo->nombre_padre; ?> y de <?php echo $bautismo->nombre_madre; ?>.</p>
         <br>
         <br>

         <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
     <b>Padrinos: </b><?php echo $bautismo->nombre_padrino; ?>, <?php echo $bautismo->nombre_madrina; ?>  <?php echo $bautismo->nombre_padrino3;?>.</p>
     <br>
     <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
     <b>Ministro: </b><?php echo $bautismo->nombre_ministro; ?>.</p>
     <br>
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
     <br>
     <br>
     <br>
     <br>


 <p style="text-align:center;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">Pbro.  <?php
            if (isset($_POST['nombreParroco']))
            {
                echo $_POST['nombre_p']."<br>";
            }
        ?></p>
         <p style="text-align:center;margin-left:80px;margin-right:50px;line-height: 5pt; font-size: 20px;">
            Parroco.
        </p>
         <br><br>


      <p style="text-align:justify;margin-left:100px;margin-right:50px;line-height: 20pt; font-size: 20px;">
          <b>AUTENTICIDAD:<br></b>Se certifica que el sello de la Paroquia  de_______________________________________________________
        </p>
         <p style="text-align:justify;margin-left:100px;margin-right:50px;line-height: 20pt; font-size: 20px;">
          Y la firma del Párroco P._________________________________________________________son auténticos.</p> <br><br>
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