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
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/guardar_sacerdote.php';

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
        header('Location: index.php?c=Sacerdote&a=Consultar');

    }

    public function Consultar(){

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/consultar_sacerdotes.php';

    }

     public function Modificar(){
         $sacerdote = new Sacerdote();

        if(isset($_REQUEST['id'])){

            $sacerdote = $this->model->obtenersacerdote($_REQUEST['id']);

        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/modificar_sacerdote.php';

    }

    public function Eliminar(){
         $sacerdote = new Sacerdote();

         if(isset($_REQUEST['id'])){
            $sacerdote = $this->model->eliminarsacerdote($_REQUEST['id']);
                echo "<script>alert('eliminado');</script>";
                  header('Location: index.php?c=Sacerdote&a=Consultar');

            }
         }


}

?>