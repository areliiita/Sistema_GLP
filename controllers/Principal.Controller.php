<?php
class PrincipalController{

    public function Index(){


        session_start();
        if(isset($_SESSION['rol'])){

            if ($_SESSION['rol'] == 1) {

                require 'cdn/links.php';
                require './views/administrador/Menu.php';
                require'./views/administrador/Vista_principal.php';
                require'cdn/scripts.php';

            }

        }else{
            # enviar al login
              header('Location: index.php?c=Login&a=Index');

        }


    }

}

?>