<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacta a Nosotros</title>
<link rel="stylesheet" href="Contacta.css">

</head>
<body>
    <div class="contenedor">
        <header class="header">
            <?php include "modulos/Contacta_con_Nosotros/titulo.php"; ?>
        </header>
        <header class="he">
            <?php include "modulos/Contacta_con_Nosotros/header.php"; ?>
        </header>
        
            <div class="nav1">  <?php include "modulos/Contacta_con_Nosotros/nav1.php"; ?> </div>
            <div class="nav2">  <?php include "modulos/Contacta_con_Nosotros/nav2.php"; ?> </div>
            <div class="nav3">  <?php include "modulos/Contacta_con_Nosotros/nav3.php"; ?></div>
            <div class="nav4">  <?php include "modulos/Contacta_con_Nosotros/nav4.php"; ?></div>
            <div class="nav5">  <?php include "modulos/Contacta_con_Nosotros/nav5.php"; ?></div>
            <div class="nav6">  <?php include "modulos/Contacta_con_Nosotros/nav6.php"; ?></div>
        
           

            <article class="conte1">
            <?php include "modulos/Contacta_con_Nosotros/article1"; ?> 
            </article>

            <article class="conte2">
            <?php include "modulos/Contacta_con_Nosotros/article2"; ?>
            </article>

            <article class="conte3">
            <?php include "modulos/Contacta_con_Nosotros/article3"; ?>
            </article>

        

        <div class="Nombre"> <?php include "modulos/Contacta_con_Nosotros/nombre.php"; ?> </div>
        <div class="Direc"> <?php include "modulos/Contacta_con_Nosotros/correo.php"; ?> </div>
        <div class="Telf"> <?php include "modulos/Contacta_con_Nosotros/telefono.php"; ?> </div>
        <div class="ms">  <?php include "modulos/Contacta_con_Nosotros/mensaje.php"; ?> </div>
        <div class="start"> <?php include "modulos/Contacta_con_Nosotros/enviar.php"; ?></div>

        <footer class="footer">
            <?php include "modulos/Contacta_con_Nosotros/footer.php"; ?>
        </footer>



    </div>
    
</body>
</html>