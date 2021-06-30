<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blancos SAN ANTONIO</title>
<link rel="stylesheet" href="vista/proyec.css">

</head>
<body>
    
    
    <div class="contenedor">



        <header class="header">
           <?php include "modulos/header.php"; ?>
        </header>


        <main class="contenido">
           <?php include "modulos/contenido.php"; ?>
        </main>
        
        <div class="n1"> 
            <a href="214476261_Proyecto.html">
            <img src="vista/Imagenes/Logotipo.jpg">
        </div>
        <nav class=nav>
        <?php
         include "vista/modulos/navegadores.php"
         ?>
         </nav>
        <section class="navegadores">
        <?php
         $mvc = new MvControl; 
         $mvc -> enlacesPaginasControl();
         ?>
        
        </section>
        
        
        
        <aside class="aside1">
            <div>
                
                <?php include "modulos/img1.php";?>
                
            </div>
    
            <div>
            <?php include "modulos/img2.php";?>
            </div>
    
            <div>
            <?php include "modulos/img3.php";?>  
            </div>

            <div>
            <?php include "modulos/img4.php";?>  
            </div>
        </aside>

        
            
            <article class="article1">
                       <?php include "modulos/article1.php"; ?>
            </article>
        

        
            <article class="article2">
                       <?php include "modulos/article2.php"; ?>
            </article>
       

        <div class="BB"> <?php include "modulos/BB.php"; ?> </div>
        <div class="CHAVOS"> <?php include "modulos/CHAVOS.php";?> </div>
        <div class="HOGAR"> <?php include "modulos/HOGAR.php";?> </div>
        <div class="COBERTORES"> <?php include "modulos/COBERTORES_vng.php";?> </div>
        <div class="PRIMAVERA"><?php include "modulos/PRIMAVERA.php";?></div>
        <div class="CAMA"><?php include "modulos/CAMA.php";?></div>
           
        <footer class="footer">
         <?php include "modulos/Footer.php";?>
        </footer>
        

    </div>
    
    
</body>
</html>