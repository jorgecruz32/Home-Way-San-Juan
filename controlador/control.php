<?php

class MvControl{
    public function proyecto(){
        include "vista/proyecto.php";
    }

    /*Nueva Función*/ 
    public function enlacesPaginasControl(){
        
        if(isset($_GET["action"])){
            $enlacescontrol=$_GET["action"];

        }
        else{
            $enlacescontrol="index";
        }

        $respuesta = EnlacesPaginas::enlacesPaginasModelo($enlacescontrol);
        include $respuesta;
    }
}

?>