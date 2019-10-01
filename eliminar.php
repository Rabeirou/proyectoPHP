<?php
    include("conexion.php");
    include("scripts/funcionesphp.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Eliminar</title>
        <link rel="stylesheet" href="estilos/styles1.css">
    </head>
    <body>
        <header class="classheader classdivtext" align="center">
            <h1>ELIMINAR REGISTRO</h1>
        </header>
        <div align="center" class="classdiv classdiv4 classdivtext classdiv15 classdiv16 classdiv18">
            <?php
                deleteRegister($conexion,$_GET['clave']);
            ?>
        </div>
        <footer class="classfooter" align="center">
            <div class="classdiv classdiv3 classdivtext" align="center">
                <a class="classa" href="inicio.php">Volver al menu principal</a>
            </div>
        </footer>
    </body>
</html>
