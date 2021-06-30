<?php

  if(!isset($_SESSION["ValidarIngreso"])){
      echo '<script> 

      window.location="index.php?action=Ingreso";

      </script>';

      return;
  }else{
      if($_SESSION["ValidarIngreso"]!="ok"){
        echo '<script> 
        
        window.location="index.php?action=Ingreso";

        </script>';

        return;
      }
  }

$usuario= controladorFormularios::ctrSeleccionarRegistro(null, null);

?>

<h1>Reporte</h1>
<table>
   <thead>
       <tr>
           <th>#</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Email</th>
           <th>Teléfono</th>
           <th colspan="2">Acciones</th>
       </tr>
   </thead>
    <tbody>
        <?php foreach($usuario as $key => $value){ ?>
      <tr>
           <td> <?php  echo ($key+1);?></td>
            <td> <?php  echo $value["Nombre"];?></td>
            <td> <?php  echo $value["Apellido"];?></td>
            <td> <?php  echo $value["Email"];?></td>
            <td> <?php  echo $value["Telefono"];?></td>
             <td>
             <form method="Post">

             <input type="Hidden" value="<?php echo $value['id']; ?>" name="editarRegistro" >
             <button type="submit">Editar</button>

                <script>
                    
                    <?php if(isset($_POST["editarRegistro"]))  {  ?>
                    var a= "<?php echo $_POST['editarRegistro']; ?>";
                    if(window.history.replaceState){
                     window.history.replaceState(null, null, window.location.href);
                    }

                    window.location="index.php?action=Editar&id=" + a;
                    <?php } ?>;

                   
                </script>
             </form>
             </td>

             <td>
             <form method="Post">

             <input type="Hidden" value="<?php echo $value['id']; ?>" name="eliminarRegistro" >
             <button type="submit">Eliminar</button>

             <?php

             if(isset($_POST["eliminarRegistro"])){
                 $eliminar = new controladorFormularios();
                 $eliminar -> ctrEliminarRegistro();
             }
             ?>
             </form>
             
             </td>
         </tr>
         <?php } ?>
       
    </tbody>

</table>