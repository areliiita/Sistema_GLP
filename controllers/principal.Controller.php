<?php
require_once 'models/Bautismo.php';
require_once 'models/Confirmacion.php';
require_once 'models/Comunion.php';
require_once 'models/Matrimonio.php';


class PrincipalController{
    private $model;
    private $model1;
    private $model2;
    private $model3;
     public function __CONSTRUCT(){
        $this->model = new Bautismo();
        $this->model1 = new Confirmacion();
        $this->model2 = new Comunion();
        $this->model3 = new Matrimonio();
    }

    public function Index(){


        session_start();
        if(isset($_SESSION['rol'])){

            if ($_SESSION['rol'] == 1) {

                require 'cdn/links.php';
                require './views/administrador/menu.php';
                require'./views/administrador/Vista_principal.php';
                require './views/administrador/pie_pagina.php';
                require'cdn/scripts.php';
                $bautismo = new  Bautismo();
                $confirmacion = new  Confirmacion();
                $comunion = new  Comunion();
                $matrimonio = new  Matrimonio();

            }

        }else{
            # enviar al login
              header('Location: index.php?c=Login&a=Index');
        }

    }

}

?>