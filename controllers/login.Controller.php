<?php

    require_once 'models/Usuario.php';

    class loginController{

        private $model;

        public function __CONSTRUCT(){

            $this->model = new Usuario();
        }

        public function Index(){

            require_once 'views/Login.php';
        }

        public function Entrar(){
            $usuario = new Usuario();


            $email = $_REQUEST['txtEmail'];
            $clave = $_REQUEST['txtContrasena'];


            $usuario = $this->model->entrar($email, $clave);



        if ($usuario != null) {

            session_start();
            $_SESSION["idusuario"] = $usuario->idusuario;
            $_SESSION["nombre"] = $usuario->nombre;
            $_SESSION["apellido"] = $usuario->apellido;
            $_SESSION["telefono"] = $usuario->telefono;
            $_SESSION["email"] = $usuario->email;
             $_SESSION["rol"] = $usuario->rol;

            # entrar
            header('Location: index.php?c=Principal&a=Index');
        } else {
            # enviar al login
         header('Location: index.php?c=Login&a=Index');
        }



        }

    }


?>