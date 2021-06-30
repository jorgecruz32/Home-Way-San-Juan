<?php

 class controladorFormularios{

    static public function ctrRegistro(){

        if(isset($_POST["registronombre"])){
            $tabla="registro";

            $dato= array("Nombre"=>$_POST["registronombre"],
                         "Apellido"=>$_POST["registroapellido"], 
                         "Email"=>$_POST["registroemail"],            
                         "Contrasena"=>$_POST["registrocontrasena"],  
                         "Telefono"=>$_POST["registrotelefono"]);
            $respuesta = Modeloformularios::mdlRegistro($tabla, $dato);
            return $respuesta;
        }
    }

    //Selecionar los registros

        static public function ctrSeleccionarRegistro($item, $valor){

            $tabla="registro";

            $respuesta= Modeloformularios::mdlSeleccionarRegistro($tabla, $item, $valor);

            return $respuesta;
        }

    //Ingresar

        public function ctrIngreso(){


            if(isset($_POST["ingresoemail"])){

                $tabla="registro";
                $item="Email";
                $valor=$_POST["ingresoemail"];

                $respuesta= Modeloformularios::mdlSeleccionarRegistro($tabla, $item, $valor);

                if($respuesta["Email"] == $_POST["ingresoemail"] && $respuesta["Contrasena"] == $_POST["ingresocontrasena"] ){
                  
                    $_SESSION["ValidarIngreso"]= "ok";
                    
                    echo '<script>

                    if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                   }

                   window.location="index.php?action=Reporte";
                 </script>';
                    
                }else{

                    echo '<script>
                    
                    if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                   }

                   
                 </script>';

                  echo "El Email y/o la Contraseña no coincide <br>";
                }
            }
            
        }
         //Actualizar los registros

        public function ctrActualizarRegistro(){

            if(isset($_POST["Actualizarnombre"])){

                if($_POST["Actualizarcontrasena"] !=""){

                    $password = $_POST["Actualizarcontrasena"];

                }else{

                    $password = $_POST["ContrasenaActualizada"];
                }
                $tabla="registro";

                $dato = array ("id"=>$_POST["idUsuario"],
                              "Nombre"=>$_POST["Actualizarnombre"],
                              "Apellido"=>$_POST["Actualizarapellido"], 
                              "Telefono"=>$_POST["Actualizartelefono"],
                              "Email"=>$_POST["Actualizaremail"],            
                              "Contrasena"=> $password);//=>$_POST["Actualizarcontrasena"]); 
                             
                $respuesta = Modeloformularios::mdlActualizarRegistro($tabla, $dato);
                
                if($respuesta == "ok"){

                    echo '<script>
                    
                    if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                   }

                   
                 </script>';

                  echo "El usuario ha sido actualizado <br>";


                }
            }
        }

        //Eliminar los registros

        public function ctrEliminarRegistro(){

            if(isset($_POST["eliminarRegistro"])){

                $tabla = "registro";
                $valor = $_POST["eliminarRegistro"];

                $respuesta = Modeloformularios::mdlEliminarRegistro($tabla, $valor);

                if($respuesta = "ok"){

                    echo '<script>

                    if(window.history.replaceState){
                    window.history.replaceState(null, null, window.location.href);
                   }

                   window.location="index.php?action=Reporte";
                 </script>';
                }

            }
        }
 }

?>