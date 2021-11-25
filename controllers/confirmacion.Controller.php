<?php

require_once 'models/Confirmacion.php';

class ConfirmacionController{

    private $model;

    public function __CONSTRUCT(){

        $this->model = new Confirmacion();
    }



      public function Crud(){
        $confirmacion = new Confirmacion();

        if(isset($_REQUEST['id'])){

            $confirmacion = $this->model->obtenerconfirmacion($_REQUEST['id']);
        }

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/guardar_confirmacion.php';
        require_once 'cdn/footer.php';

    }

    public function Guardar(){
        $confirmacion = new Confirmacion();

        $confirmacion->idconfirmacion = $_REQUEST['txtIdconfirmacion'];
        $confirmacion->nombre = $_REQUEST['txtNombre'];
        $confirmacion->apellidos = $_REQUEST['txtApellidos'];
        $confirmacion->sexo = $_REQUEST['txtSexo'];
        $confirmacion->confirmado_otro_lugar = $_REQUEST['txtConfirmado_otro_lugar'];
        $confirmacion->fecha_nacimiento = $_REQUEST['txtFecha_nacimiento'];
        $confirmacion->nombre_padre = $_REQUEST['txtNombre_padre'];
        $confirmacion->nombre_madre = $_REQUEST['txtNombre_madre'];
        $confirmacion->nombre_padrino = $_REQUEST['txtNombre_padrino'];
        $confirmacion->nombre_madrina = $_REQUEST['txtNombre_madrina'];
        $confirmacion->ministro = $_REQUEST['txtMinistro'];
        $confirmacion->obispo = $_REQUEST['txtObispo'];
        $confirmacion->fecha_confirmacion = $_REQUEST['txtFecha_confirmacion'];
        $confirmacion->fecha_bautismo = $_REQUEST['txtFecha_bautismo'];
        $confirmacion->parroquia_bautismo = $_REQUEST['txtParroquia_bautismo'];
        $confirmacion->diosesis = $_REQUEST['txtDiosesis'];
        $confirmacion->folio = $_REQUEST['txtFolio'];
        $confirmacion->edad = $_REQUEST['txtEdad'];
        $confirmacion->hijo = $_REQUEST['txtHijo'];

        $confirmacion->idconfirmacion > 0

            ? $this->model->modificarConfirmacion($confirmacion)
            : $this->model->guardarConfirmacion($confirmacion);

         echo'<script type="text/javascript">
         alert("Registro de Confirmación Guardado Exitosamente");
        window.location.href="index.php?c=Confirmacion&a=Consultar";
        </script>';

    }

    public function Consultar(){

        require_once 'cdn/links.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/consultar_confirmacion.php';
        require_once 'cdn/scripts.php';

    }

     public function Modificar(){
         $confirmacion = new Confirmacion();

        if(isset($_REQUEST['id'])){

            $confirmacion = $this->model->obtenerconfirmacion($_REQUEST['id']);

        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/modificar_confirmacion.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';

    }

    public function Eliminar(){
         $confirmacion = new Confirmacion();

         if(isset($_REQUEST['id'])){
            $confirmacion = $this->model->eliminarConfirmacion($_REQUEST['id']);

             echo'<script type="text/javascript">
            alert("Registro de Confrimación  Eliminado Exitosamente");
            window.location.href="index.php?c=Confirmacion&a=Consultar";
            </script>';
            }
   }


 public function ConsultarActaConfirmacion(){

 $confrimacion= new Confirmacion();
      if(isset($_REQUEST['id'])){
            $confirmacion = $this->model->obtenerconfirmacion1($_REQUEST['id']);
        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/acta_confirmacion.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';

    }


    public function CrearReporte(){
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/reportes/crear_reporte.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';
    }


    public function ConsultarReporteMes(){
        $confirmacion = new Confirmacion();

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/reportes/confirmacion/ver_reportemes.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';

    }


}

?>