<?php

require_once 'models/Usuario.php';

class UsuarioController{

    private $model;

    public function __CONSTRUCT(){

        $this->model = new Usuario();
    }


    public function Index(){
        require_once 'views/Vista_principal.php';
    }



      public function Crud(){
        $usuario = new Usuario();

        if(isset($_REQUEST['id'])){

            $usuario = $this->model->obtenerusuario($_REQUEST['id']);
        }

        require_once'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/guardar_usuario.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';

    }

    public function Guardar(){
        $usuario = new Usuario();

        $usuario->idusuario = $_REQUEST['txtIdusuario'];
        $usuario->nombre = $_REQUEST['txtNombre'];
        $usuario->apellido = $_REQUEST['txtApellido'];
        $usuario->telefono = $_REQUEST['txtTelefono'];
        $usuario->email = $_REQUEST['txtEmail'];
        $usuario->clave = $_REQUEST['txtClave'];
        $usuario->rol = $_REQUEST['txtRol'];
        $usuario->idusuario > 0 
            ? $this->model->modificarUsuario($usuario)
            : $this->model->guardarUsuario($usuario);
             echo'<script type="text/javascript">
        alert("Registro de Usuario  Guardado Exitosamente");
        window.location.href="index.php?c=Usuario&a=Consultar";
    </script>';

    }



    public function Consultar(){

        require_once 'cdn/links.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/consultar_usuario.php';
        require_once 'cdn/scripts.php';

    }

   public function Modificar(){
        $usuario = new Usuario();

        if(isset($_REQUEST['id'])){

            $usuario = $this->model->obtenerusuario($_REQUEST['id']);
        }

        require_once'cdn/cdn.php';
        require_once 'views/administrador/menu.php';
        require_once 'views/administrador/modificar_usuario.php';
        require_once 'views/administrador/pie_pagina.php';
        require_once 'cdn/footer.php';

    }

    public function Eliminar(){
         $usuario = new Usuario();

         if(isset($_REQUEST['id'])){
            $usuario = $this->model->eliminarusuario($_REQUEST['id']);


          echo'<script type="text/javascript">
        alert("Registro de Usuario Eliminado Correctamente");
        window.location.href="index.php?c=Usuario&a=Consultar";
    </script>';
            }
         }

}

?>