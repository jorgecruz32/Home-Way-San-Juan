<?php

require_once "conexion.php";

class Modeloformularios{

  //Registro
    static public function mdlRegistro($tabla, $dato){

    
       $sql="INSERT INTO $tabla (Nombre, Apellido, Email, Contrasena, Telefono) VALUES (:Nombre, :Apellido, :Email, :Contrasena, :Telefono)";
       $stmt = conexion::conectar()->prepare($sql);

       $stmt ->bindParam(":Nombre", $dato["Nombre"], PDO::PARAM_STR);
       $stmt ->bindParam(":Apellido", $dato["Apellido"], PDO::PARAM_STR);
       $stmt ->bindParam(":Email", $dato["Email"], PDO::PARAM_STR);
       $stmt ->bindParam(":Contrasena", $dato["Contrasena"], PDO::PARAM_STR);
       $stmt ->bindParam(":Telefono", $dato["Telefono"], PDO::PARAM_STR);

       if($stmt->execute()){

        return "ok";

       }else{

         print_r(conexion::conectar()->errorInfo());
       }
    }


    //Seleccionar Registro
    static public function mdlSeleccionarRegistro($tabla, $item, $valor){

        if($item==null && $valor==null){
        $sql="SELECT * FROM $tabla";
        $stmt = conexion::conectar()->prepare($sql);
        $stmt->execute();

        return $stmt -> fetchAll();
        } else{

         $sql="SELECT * FROM $tabla WHERE $item = :$item";
         $stmt = conexion::conectar()->prepare($sql);

         $stmt ->bindParam(":".$item, $valor, PDO::PARAM_STR);

         $stmt->execute();
         
         return $stmt ->fetch();

        }
    }

     // ActualizarRegistro
     static public function mdlActualizarRegistro($tabla, $dato){

    
      $sql="UPDATE $tabla SET Nombre=:Nombre, Apellido=:Apellido, Email=:Email, Contrasena=:Contrasena, Telefono=:Telefono WHERE id=:id";
      $stmt = conexion::conectar()->prepare($sql);

      $stmt ->bindParam(":Nombre", $dato["Nombre"], PDO::PARAM_STR);
      $stmt ->bindParam(":Apellido", $dato["Apellido"], PDO::PARAM_STR);
      $stmt ->bindParam(":Email", $dato["Email"], PDO::PARAM_STR);
      $stmt ->bindParam(":Contrasena", $dato["Contrasena"], PDO::PARAM_STR);
      $stmt ->bindParam(":Telefono", $dato["Telefono"], PDO::PARAM_STR);
      $stmt ->bindParam(":id", $dato["id"], PDO::PARAM_INT);

      if($stmt->execute()){

       return "ok";

      }else{

        print_r(conexion::conectar()->errorInfo());
      }
   }
   // Eliminar Registro
   static public function mdlEliminarRegistro($tabla, $valor){

    
    $sql="DELETE FROM $tabla WHERE id=:id";
    $stmt = conexion::conectar()->prepare($sql);

    
    $stmt ->bindParam(":id", $valor, PDO::PARAM_INT);

    if($stmt->execute()){

     return "ok";

    }else{

      print_r(conexion::conectar()->errorInfo());
    }
 }
}

?>