<?php

require_once 'models/Bautismo.php';

class BautismoController{

    private $model;

    public function __CONSTRUCT(){

        $this->model = new Bautismo();
    }



      public function Crud(){
        $bautismo = new Bautismo();

        if(isset($_REQUEST['id'])){

            $bautismo = $this->model->obtenerbautismo($_REQUEST['id']);
        }

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/guardar_bautismo.php';
        require_once 'cdn/footer.php';

    }

    public function Guardar(){
        $bautismo = new Bautismo();

        $bautismo->idbautismo = $_REQUEST['txtIdbautismo'];
        $bautismo->nombre_parroquia = $_REQUEST['txtNombre_parroquia'];
        $bautismo->fecha_bautismo = $_REQUEST['txtFecha_bautismo'];
        $bautismo->nombre_bautizado = $_REQUEST['txtNombre_bautizado'];
        $bautismo->fecha_nacimiento = $_REQUEST['txtFecha_nacimiento'];
        $bautismo->nombre_hospitaldenacimiento = $_REQUEST['txtNombre_hospital'];
        $bautismo->nombre_padre = $_REQUEST['txtNombre_de_padre'];
        $bautismo->nombre_madre = $_REQUEST['txtNombre_de_madre'];
        $bautismo->nombre_padrino = $_REQUEST['txtNombre_padrino'];
        $bautismo->nombre_madrina = $_REQUEST['txtNombre_madrina'];
        $bautismo->nombre_padrino3 = $_REQUEST['txtNombre_padrino3'];
        $bautismo->codigo_folio = $_REQUEST['txtCodigo_folio'];
        $bautismo->nombre_ministro = $_REQUEST['txtNombre_de_ministro'];
        $bautismo->hijo = $_REQUEST['txtHijo'];

        $bautismo->idbautismo > 0

            ? $this->model->modificarBautismo($bautismo)
            : $this->model->guardarBautismo($bautismo);

              echo'<script type="text/javascript">
    alert("Registro de Bautismo Guardado Exitosamente");
    window.location.href="index.php?c=Bautismo&a=Consultar";
    </script>';

    }

    public function Consultar(){

        require_once 'cdn/links.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/consultar_bautismo.php';
        require_once 'cdn/scripts.php';

    }

     public function Modificar(){
         $bautismo = new Bautismo();

        if(isset($_REQUEST['id'])){

            $bautismo = $this->model->obtenerbautismo($_REQUEST['id']);

        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/modificar_bautismo.php';
        require_once 'cdn/footer.php';

    }

    public function Eliminar(){
         $bautismo = new Bautismo();

         if(isset($_REQUEST['id'])){
            $bautismo = $this->model->eliminarbautismo($_REQUEST['id']);

              echo'<script type="text/javascript">
    alert("Registro de Bautismo Eliminado Exitosamente");
    window.location.href="index.php?c=Bautismo&a=Consultar";
    </script>';

            }
         }

 public function ConsultarActaBautismo(){

 $bautismo = new Bautismo();

      if(isset($_REQUEST['id'])){

            $bautismo = $this->model->obtenerbautismo($_REQUEST['id']);
        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/acta_bautismo.php';
        require_once 'cdn/footer.php';

    }


 public function CrearReporte(){
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/reportes/crear_reporte.php';
        require_once 'cdn/footer.php';
    }

    public function ConsultarReporteMes(){
        $bautismo = new Bautismo();

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/reportes/bautismo/ver_reportemes.php';
        require_once 'cdn/footer.php';

    }

    public function ConsultarReporteFechas(){
        $bautismo = new Bautismo();

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/reportes/bautismo/ver_reportefecha.php';
        require_once 'cdn/footer.php';
    }

}

?>