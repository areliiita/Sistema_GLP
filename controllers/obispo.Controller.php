<?php
require_once 'models/Obispo.php';

class ObispoController{
    private $model;
    public function __CONSTRUCT(){

        $this->model = new Obispo();
    }


      public function Crud(){
        $obispo = new Obispo();

        if(isset($_REQUEST['id'])){

            $obispo = $this->model->obtenerobispo($_REQUEST['id']);
        }

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/guardar_obispo.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';
    }


    public function Guardar(){
        $obispo = new Obispo();

        $obispo->idobispo = $_REQUEST['txtIdobispo'];
        $obispo->nombre = $_REQUEST['txtNombre'];
        $obispo->apellido = $_REQUEST['txtApellido'];
        $obispo->cargo = $_REQUEST['txtCargo'];
        $obispo->nacionalidad = $_REQUEST['txtNacionalidad'];
        $obispo->periodo_desde = $_REQUEST['txtPeriodo_desde'];
        $obispo->periodo_hasta = $_REQUEST['txtPeriodo_hasta'];

        $obispo->idobispo > 0
            ? $this->model->modificarobispo($obispo)
            : $this->model->guardarObispo($obispo);

         echo'<script type="text/javascript">
        alert("Registro de Obispo  Guardado  Exitosamente");
        window.location.href="index.php?c=Obispo&a=Consultar";
        </script>';
    }


    public function Consultar(){

        require_once 'cdn/links.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/consultar_obispo.php';
        require_once 'cdn/scripts.php';
    }


     public function Modificar(){
         $obispo = new Obispo();
        if(isset($_REQUEST['id'])){

        $obispo = $this->model->obtenerobispo($_REQUEST['id']);
        }

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/modificar_obispo.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';
    }


    public function Eliminar(){
    $obispo = new Obispo();

    if(isset($_REQUEST['id'])){

    $obispo = $this->model->eliminarobispo($_REQUEST['id']);

    echo'<script type="text/javascript">
    alert("Registro de Obispo Eliminado Exitosamente");
    window.location.href="index.php?c=Obispo&a=Consultar";
    </script>';

            }
         }
}

?>