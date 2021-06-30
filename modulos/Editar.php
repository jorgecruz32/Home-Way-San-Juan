<?php
  if(isset($_GET["id"])){

      $item = "id";
      $valor = $_GET["id"];
      $usuario = controladorFormularios::ctrSeleccionarRegistro($item, $valor);
  }


?>


<h2>Editar</h2>
<div>

<form method="post">
<label for="Nombre">Nombre:</label><br>
  <input type="text" value="<?php echo $usuario["Nombre"]; ?>" id="Nombre" name="Actualizarnombre" ><br>

  <label for="Apellido">Apellido:</label><br>
  <input type="text" value="<?php echo $usuario["Apellido"]; ?>" id="Apellido" name="Actualizarapellido"><br>

  <label for="Telefono">Teléfono:</label><br>
  <input type="text" value="<?php echo $usuario["Telefono"]; ?>" id="Telefono" name="Actualizartelefono"><br><br>

  <label for="Email">E-mail:</label><br>
  <input type="Email" value="<?php echo $usuario["Email"]; ?>" id="Email" name="Actualizaremail"><br>

  <label for="Contrasena">Contraseña:</label><br>
  <input type="password" id="Contrasena" placeholder="Escriba su contraseña" name="Actualizarcontrasena"><br>

  <input type="hidden" value="<?php echo $usuario["Contrasena"]; ?>" name="ContrasenaActualizada">
  <input type="hidden" value="<?php echo $usuario["id"]; ?>"  name="idUsuario">

  
  
    <?php
      
      $actualizar = new controladorFormularios();
      $actualizar -> ctrActualizarRegistro();

      
    ?>
    <input type="submit">


</form>


</div>