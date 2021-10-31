<?php

require_once 'models/Matrimonio.php';

class MatrimonioController{

    private $model;

    public function __CONSTRUCT(){

        $this->model = new Matrimonio();
    }


      public function Crud(){
        $matrimonio = new Matrimonio();

        if(isset($_REQUEST['id'])){

            $matrimonio = $this->model->obtenermatrimonio($_REQUEST['id']);
        }

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/guardar_matrimonio.php';
        require_once 'cdn/footer.php';

    }

    public function Guardar(){
        $matrimonio = new Matrimonio();

        $matrimonio->idmatrimonio = $_REQUEST['txtIdmatrimonio'];
        $matrimonio->hora_matrimonio = $_REQUEST['txtHora_matrimonio'];
        $matrimonio->fecha_matrimonio = $_REQUEST['txtFecha_matrimonio'];
        $matrimonio->ministro_matrimonio = $_REQUEST['txtMinistro_matrimonio'];
        $matrimonio->jusrisdiccion = $_REQUEST['txtJurisdiccion'];
         $matrimonio->diocesis = $_REQUEST['txtDiocesis'];
        $matrimonio->folio= $_REQUEST['txtFolio'];
        $matrimonio->padre_novio = $_REQUEST['txtNombre_padre_novio'];
        $matrimonio->madre_novio = $_REQUEST['txtNombre_madre_novio'];
        $matrimonio->nombrecompleto_novio = $_REQUEST['txtNombre_del_novio'];
        $matrimonio->padre_novia = $_REQUEST['txtNombre_padre_novia'];
        $matrimonio->madre_novia = $_REQUEST['txtNombre_madre_novia'];
        $matrimonio->nombrecompleto_novia = $_REQUEST['txtNombre_de_novia'];;
        $matrimonio->parroquia = $_REQUEST['txtNombre_de_parroquia'];
        $matrimonio->padrino_boda = $_REQUEST['txtPadrino_boda'];
        $matrimonio->madrina_boda = $_REQUEST['txtMadrina_boda'];

        $matrimonio->idmatrimonio > 0

            ? $this->model->modificarMatrimonio($matrimonio)
            : $this->model->guardarMatrimonio($matrimonio);

         echo'<script type="text/javascript">
        alert("Registro de Matrimonio  Guardado Exitosamente");
        window.location.href="index.php?c=Matrimonio&a=Consultar";
        </script>';

    }

    public function Consultar(){
        require_once 'cdn/links.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/consultar_matrimonio.php';
        require_once 'cdn/scripts.php';

    }

     public function Modificar(){
         $matrimonio = new Matrimonio();

        if(isset($_REQUEST['id'])){

            $matrimonio = $this->model->obtenermatrimonio($_REQUEST['id']);

        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/modificar_matrimonio.php';
        require_once 'cdn/footer.php';

    }


    public function Eliminar(){
         $matrimonio = new Matrimonio();

         if(isset($_REQUEST['id'])){
            $matrimonio = $this->model->eliminarMatrimonio($_REQUEST['id']);

              echo'<script type="text/javascript">
             alert("Registro de Matrimonio  Eliminado  Exitosamente");
            window.location.href="index.php?c=Matrimonio&a=Consultar";
            </script>';

            }
         }

public function ConsultarActaMatrimonio(){

 $matrimonio = new Matrimonio();
      if(isset($_REQUEST['id'])){
            $matrimonio = $this->model->obtenermatrimonio($_REQUEST['id']);
        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/acta_matrimonio.php';
        require_once 'cdn/footer.php';
}

 public function CrearReporte(){
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/reportes/crear_reporte.php';
        require_once 'cdn/footer.php';
    }

    public function ConsultarReporteMes(){
        $matrimonio = new Matrimonio();

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/reportes/matrimonio/ver_reportemes.php';
        require_once 'cdn/footer.php';

    }

    public function ConsultarReporteFechas(){
        $matrimonio = new Matrimonio();
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/reportes/matrimonio/ver_reportefecha.php';
        require_once 'cdn/footer.php';

    }


}

?>