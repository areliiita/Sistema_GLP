<?php

require_once 'models/Sacerdote.php';

class SacerdoteController{

    private $model;

    public function __CONSTRUCT(){

        $this->model = new Sacerdote();
    }



      public function Crud(){
        $sacerdote = new Sacerdote();

        if(isset($_REQUEST['id'])){

            $sacerdote = $this->model->obtenersacerdote($_REQUEST['id']);
        }

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/guardar_sacerdote.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';

    }

    public function Guardar(){
        $sacerdote = new Sacerdote();

        $sacerdote->idsacerdote = $_REQUEST['txtIdsacerdote'];
        $sacerdote->nombre = $_REQUEST['txtNombre'];
        $sacerdote->apellido = $_REQUEST['txtApellido'];
        $sacerdote->cargo = $_REQUEST['txtCargo'];
        $sacerdote->fecha_nacimiento = $_REQUEST['txtFecha_nacimiento'];
        $sacerdote->dui = $_REQUEST['txtDui'];
        $sacerdote->nacionalidad = $_REQUEST['txtNacionalidad'];
        $sacerdote->periodo_desde = $_REQUEST['txtPeriodo_desde'];
        $sacerdote->periodo_hasta = $_REQUEST['txtPeriodo_hasta'];

        $sacerdote->idsacerdote > 0
            ? $this->model->modificarSacerdote($sacerdote)
            : $this->model->guardarSacerdote($sacerdote);

         echo'<script type="text/javascript">
    alert("Registro de Sacerdote  Guardado  Exitosamente");
    window.location.href="index.php?c=Sacerdote&a=Consultar";
    </script>';
    }

    public function Consultar(){
        require_once 'cdn/links.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/consultar_sacerdotes.php';
        require_once 'cdn/scripts.php';

    }


     public function Modificar(){
         $sacerdote = new Sacerdote();

        if(isset($_REQUEST['id'])){

            $sacerdote = $this->model->obtenersacerdote($_REQUEST['id']);

        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/modificar_sacerdote.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';

    }

    public function Eliminar(){
         $sacerdote = new Sacerdote();

         if(isset($_REQUEST['id'])){
            $sacerdote = $this->model->eliminarsacerdote($_REQUEST['id']);
                echo'<script type="text/javascript">
    alert("Registro de Sacerdote Eliminado Exitosamente");
    window.location.href="index.php?c=Sacerdote&a=Consultar";
    </script>';

            }
         }


}

?>