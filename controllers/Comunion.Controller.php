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
        $comunion->idbautismo = $_REQUEST['txtIdbautismo'];
        $comunion->nombre_parroquia = $_REQUEST['txtNombre_parroquia'];
        $comunion->fecha_bautismo = $_REQUEST['txtFecha_bautismo'];
        $comunion->nombre_bautizado = $_REQUEST['txtNombre_bautizado'];
        $comunion->fecha_nacimiento = $_REQUEST['txtFecha_nacimiento'];
        $comunion->nombre_hospitaldenacimiento = $_REQUEST['txtNombre_hospital'];
        $comunion->nombre_padre = $_REQUEST['txtNombre_de_padre'];
        $comunion->nombre_madre = $_REQUEST['txtNombre_de_madre'];
        $comunion->nombre_padrino = $_REQUEST['txtNombre_padrino'];
        $comunion->nombre_madrina = $_REQUEST['txtNombre_madrina'];
        $comunion->nombre_padrino3 = $_REQUEST['txtNombre_padrino3'];
        $comunion->codigo_folio = $_REQUEST['txtCodigo_folio'];
        $comunion->numero_de_acta = $_REQUEST['txtN°_de_acta'];
        $comunion->nombre_ministro = $_REQUEST['txtNombre_de_ministro'];
        $comunion->hijo_legitimo = $_REQUEST['txtHijo_legitimo'];
        $comunion->hijo_ilegitimo = $_REQUEST['txtHijo_ilegitimo'];

        $comunion->idcomunion > 0

            ? $this->model->modificarComunion($comunion)
            : $this->model->guardarComunion($comunion);
        header('Location: index.php?c=Bautismo&a=Consultar');

    }

    public function Consultar(){

        require_once 'cdn/cdn.php';
        require_once 'views/administrador/Menu.php';
        require_once 'views/administrador/consultar_bautismo.php';
        require_once 'cdn/footer.php';

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
                echo "<script>alert('eliminado');</script>";
                  header('Location: index.php?c=Bautismo&a=Consultar');

            }
         }


}

?>