<?php

require_once 'models/Parroquia.php';

class ParroquiaController{

    private $model;

    public function __CONSTRUCT(){

        $this->model = new Parroquia();
    }


      public function Crud(){
        $parroquia = new Parroquia();

        if(isset($_REQUEST['id'])){

            $parroquia = $this->model->obtenerparroquia($_REQUEST['id']);
        }

        require_once'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/guardar_parroquia.php';
        require_once 'cdn/footer.php';

    }

    public function Guardar(){
        $parroquia = new Parroquia();

        $parroquia->id_parroquia = $_REQUEST['txtId_parroquia'];
        $parroquia->nombre_parroquia = $_REQUEST['txtNombre_parroquia'];
        $parroquia->direccion = $_REQUEST['txtDireccion'];
        $parroquia->departamento = $_REQUEST['txtDepartamento'];
        $parroquia->email = $_REQUEST['txtEmail'];
        $parroquia->telefono = $_REQUEST['txtTelefono'];
        $parroquia->encargado = $_REQUEST['txtEncargado'];

        $parroquia->id_parroquia > 0
            ? $this->model->modificarParroquia($parroquia)
            : $this->model->guardarParroquia($parroquia);
        header('Location: index.php?c=Parroquia&a=Consultar');

    }



    public function Consultar(){

        require_once'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/consultar_parroquia.php';
        require_once 'cdn/footer.php';

    }

   public function Modificar(){
        $parroquia = new Parroquia();

        if(isset($_REQUEST['id'])){

            $parroquia = $this->model->obtenerparroquia($_REQUEST['id']);
        }

        require_once'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/modificar_parroquia.php';
        require_once 'cdn/footer.php';

    }

    public function Eliminar(){
         $parroquia = new Parroquia();

         if(isset($_REQUEST['id'])){
            $parroquia = $this->model->eliminarparroquia($_REQUEST['id']);
                echo "<script>alert('eliminado');</script>";
                  header('Location: index.php?c=Parroquia&a=Consultar');

            }
         }

}

?>