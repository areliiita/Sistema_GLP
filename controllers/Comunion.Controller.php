<?php

require_once 'models/Comunion.php';

class ComunionController{

    private $model;

    public function __CONSTRUCT(){

        $this->model = new Comunion();
    }



      public function Crud(){
        $comunion = new Comunion();

        if(isset($_REQUEST['id'])){

            $comunion = $this->model->obtenercomunion($_REQUEST['id']);
        }

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/guardar_comunion.php';
        require_once 'cdn/footer.php';

    }

    public function Guardar(){
        $comunion = new Comunion();

        $comunion->idprimeracomunion = $_REQUEST['txtIdcomunion'];
        $comunion->nombre = $_REQUEST['txtNombre'];
        $comunion->apellidos = $_REQUEST['txtApellidos'];
        $comunion->fecha_nacimiento = $_REQUEST['txtFecha_nacimiento'];
        $comunion->domicilio= $_REQUEST['txtDomicilio'];
        $comunion->nombre_padre = $_REQUEST['txtNombre_de_padre'];
        $comunion->nombre_madre = $_REQUEST['txtNombre_de_madre'];
        $comunion->parroquia_bautismo = $_REQUEST['txtNombre_parroquia_bautismo'];
        $comunion->fecha_bautismo = $_REQUEST['txtFecha_bautismo'];
        $comunion->folio = $_REQUEST['txtFolio'];
        $comunion->fecha_confesion = $_REQUEST['txtFecha_de_confesion'];
        $comunion->fecha_comunion = $_REQUEST['txtFecha_de_comunion'];
        $comunion->catequista = $_REQUEST['txtCatequista'];
        $comunion->celebrante_comunion = $_REQUEST['txtCelebrante_de_comunion'];

        $comunion->idprimeracomunion > 0

            ? $this->model->modificarComunion($comunion)
            : $this->model->guardarComunion($comunion);
        header('Location: index.php?c=Comunion&a=Consultar');

    }

    public function Consultar(){

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/consultar_comunion.php';
        require_once 'cdn/footer.php';

    }

     public function Modificar(){
         $comunion = new Comunion();

        if(isset($_REQUEST['id'])){

            $comunion = $this->model->obtenercomunion($_REQUEST['id']);

        }
        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/modificar_comunion.php';
        require_once 'cdn/footer.php';

    }

    public function Eliminar(){
         $comunion= new Comunion();

         if(isset($_REQUEST['id'])){
            $comunion = $this->model->eliminarComunion($_REQUEST['id']);

                  header('Location: index.php?c=Comunion&a=Consultar');

            }
         }


}

?>