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
        $matrimonio->fecha_matrimonio = $_REQUEST['txtFecha_matrimonio'];
        $matrimonio->ministro_matrimonio = $_REQUEST['txtMinistro_matrimonio'];
        $matrimonio->jusrisdiccion = $_REQUEST['txtJurisdiccion'];
        $matrimonio->folio= $_REQUEST['txtFolio'];
        $matrimonio->padre_novio = $_REQUEST['txtNombre_padre_novio'];
        $matrimonio->madre_novio = $_REQUEST['txtNombre_madre_novio'];
        $matrimonio->testigo1_novio = $_REQUEST['txtNombre_de_testigo1'];
        $matrimonio->testigo2_novio = $_REQUEST['txtNombre_de_testigo2'];
        $matrimonio->nombrecompleto_novio = $_REQUEST['txtNombre_del_novio'];
         $matrimonio->padre_novia = $_REQUEST['txtNombre_padre_novia'];
        $matrimonio->madre_novia = $_REQUEST['txtNombre_madre_novia'];
        $matrimonio->testigo1_novia = $_REQUEST['txtNombre_de_testigo1'];
        $matrimonio->testigo2_novia = $_REQUEST['txtNombre_de_testigo2'];
        $matrimonio->nombrecompleto_novia = $_REQUEST['txtNombre_de_novia'];;
        $matrimonio->parroquia = $_REQUEST['txtNombre_de_parroquia'];

        $matrimonio->idmatrimonio > 0

            ? $this->model->modificarMatrimonio($matrimonio)
            : $this->model->guardarMatrimonio($matrimonio);
        header('Location: index.php?c=Matrimonio&a=Consultar');

    }

    public function Consultar(){

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/consultar_matrimonio.php';
        require_once 'cdn/footer.php';

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

                  header('Location: index.php?c=Matrimonio&a=Consultar');

            }
         }


}

?>