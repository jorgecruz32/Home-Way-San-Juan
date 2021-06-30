<?php

class EnlacesPaginas{
    public static function enlacesPaginasModelo($enlacesModelo){

        if( $enlacesModelo=="Inicio"||
            $enlacesModelo=="Ingreso"||
            $enlacesModelo=="Editar"||
            $enlacesModelo=="Informacion_Nosotros"||
            
            $enlacesModelo=="Colchas"||
            $enlacesModelo=="Cobertores"||
            $enlacesModelo=="Cortinas"||
            $enlacesModelo=="Sabanas"||
            $enlacesModelo=="Registro"||
            $enlacesModelo=="Reporte"||
            $enlacesModelo=="Cubresalas"||
            $enlacesModelo=="Salir"){

                $modulo="vista/modulos/".$enlacesModelo.".php";


            }
            else if($enlacesModelo=="index"){
                $modulo="vista/modulos/inicio.php";
            }
        return $modulo;

    }
}

?>