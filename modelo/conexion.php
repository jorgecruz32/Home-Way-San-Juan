
<?php


class conexion{
    static public function conectar(){
        //PDO (Php Data Objects)
        $link = new PDO("mysql:host=localhost;dbname=proyecto","root","");
        $link ->exec("set names utf8");

        return $link;
    }
}

?>
