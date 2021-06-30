<div>
<header><b>Registro</b></header>
<form method="post">



  <label for="Nombre">Nombre:</label><br>
  <input type="text" id="Nombre" name="registronombre" ><br>

  <label for="Apellido">Apellido:</label><br>
  <input type="text" id="Apellido" name="registroapellido"><br>

  <label for="Email">E-mail:</label><br>
  <input type="Email" id="Email" name="registroemail"><br>

  <label for="Contrasena">Contraseña:</label><br>
  <input type="password" id="Contrasena"  name="registrocontrasena"><br>

  <label for="Telefono">Teléfono:</label><br>
  <input type="text" id="Telefono" name="registrotelefono"><br><br>

    <?php
      $registro=controladorFormularios::ctrRegistro();
      if($registro=="ok"){
         
        echo '<script>
           if(window.history.replaceState){
           window.history.replaceState(null, null, null, null, window.location.href);
          }
      </script>';

        echo "Los datos fueron guardados";
      }

      
    ?>


        <input type="submit">

</form>
  

    
</div>