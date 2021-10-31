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
<a  href="javascript:Imprimir_Contenido('acta_matrimonio')"><button type="submit" class="btn btn bg-primary btn-raised btn-md" style="color:white;"><i class="fas fa-print"></i>IMPRIMIR</button></a>
    </div>
     </div>
<?php endif?>

<div id="acta_matrimonio">
<div style="background-color:#E6E6FA">
    <img style="float:left;margin-bottom:15px;margin-left: 40px; margin-right: 40px;white-space:pre;" src="./views/administrador/logo/logo.png" width="150px" alt="Logo"> &nbsp;
    <p>
        <br>
        <br>
        <br>
        <br>
    <h2 style="margin-top:50px;margin-bottom:50px;text-align:center;"><b>ACTA DE MATRIMONIO</b></h2>
    </p>


    <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
     Hoy  a las <b><?php echo $matrimonio->hora_matrimonio; ?></b> horas del dia <?php echo $matrimonio->fecha_matrimonio; ?> en la parroquia de <b>
   <?php echo $matrimonio->parroquia; ?></b>. Diocesis de <?php echo $matrimonio->diocesis; ?>, en presencia del párroco o delegado: Pbro.<?php echo $matrimonio->ministro_matrimonio; ?> se presentaron para contraer matrimonio los señores:</p>
        <br>
        <br>
         <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
            <b><?php echo $matrimonio->nombrecompleto_novio; ?> y </b> <b><?php echo $matrimonio->nombrecompleto_novia; ?></b>.</p>
            <br>
            <br>
          <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
            Quienes Amonestados e interrogados manifestaron su libre y mutuo consentimineto, estando de acuerdo en contraer matrimonio tal como lo enseña la Santa Iglesia Católica.</p>
<br>
<br>
        <p style="text-align:justify;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
            <b>Padrinos:</b><?php echo $matrimonio->padrino_boda; ?> y <?php echo $matrimonio->madrina_boda; ?>.
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
      	  <b>AUTENTICIDAD<br></b>Se certifica que el sello de la Paroquia  de_______________________________________________________
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

         <p style="text-align:justify;margin-left:100px;margin-right:50px;line-height: 20pt; font-size: 20px;">
        San Vicente, a_____________________ de _____________________ del Dos mil _____________________</p>.
    </p>
    <br>
    <br>
 <div>
        <hr>
           <p style="text-align:right;margin-left:80px;margin-right:50px;line-height: 20pt; font-size: 20px;">
            <i>Parroquia San Antonio de Padua <br>
            Agua Zarca San Antonio km 49 1/2, Carretera a Ilobasco, Cabañas<br>
            E-mail: sanantoniodepaduailob@gmail.com <br>
            Tel.7203-6039
            </i>
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


