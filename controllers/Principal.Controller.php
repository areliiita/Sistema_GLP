<?php
class PrincipalController{

    public function Index(){


        session_start();
        if(isset($_SESSION['rol'])){

            if ($_SESSION['rol'] == 1) {

                 require'./views/administrador/Menu.php';
                require'./views/administrador/Vista_principal.php';

            }

        }else{
            # enviar al login
              header('Location: index.php?c=Login&a=Index');

        }


    }

}

?>