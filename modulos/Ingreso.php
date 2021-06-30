<h1>Ingreso</h1>
<div>
  <form method="post">

   <label for="Email">Email:</label><br>
   <input type="Email" id="Email" name="ingresoemail"><br>

   <label for="Contraseña">Contraseña:</label><br>
   <input type="password" id="Contrasena" name="ingresocontrasena"><br>

   <?php
    $ingreso = new controladorFormularios();
    $ingreso -> ctrIngreso();
   ?>

   <input type="submit" value="Ingresar">

  </form>
</div>