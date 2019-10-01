<?php
    include("conexion.php");
    include("scripts/funcionesphp.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Agregar</title>
        <link rel="stylesheet" href="estilos/styles1.css">
    </head>
    <body>
        <header class="classheader classdivtext" align="center">
            <h1>AGREGAR REGISTRO</h1>
        </header>
        <div class="classdivtext classdiv classdiv4 classdivtext classdiv15">
            <form class="classform1" action="agregar.php" method="post">
                <div class="classdiv13">
                    <p align="center" class="encabezado">Ingrese los datos del cliente</p>
                    <label align="left">ID de cliente</label>
                    <input type="text" name="id" value="">
                    <label align="left">Razon Social</label>
                    <input type="text" name="razon" value="">
                    <label align="left">Direccion</label>
                    <input type="text" name="dir" value="">
                    <label align="left">Telefonos y Contactos</label>
                    <div><input type="text" name="tel1" value="" placeholder="Numero"> <input type="text" name="con1" value="" placeholder="Contacto"></div>
                    <div><input type="text" name="tel2" value="" placeholder="Numero"> <input type="text" name="con2" value="" placeholder="Contacto"></div>
                    <div><input type="text" name="tel3" value="" placeholder="Numero"> <input type="text" name="con3" value="" placeholder="Contacto"></div>
                    <label align="left">Localidad</label>
                    <input type="text" name="localidad" value="">
                    <label align="left">Marca</label>
                    <input type="text" name="marca" value="">
                    <label align="left">Mail</label>
                    <input type="text" name="mail" value="">
                </div>
                <div class="classdiv14" align="center">
                    <input class="classbutton classbutton3" type="submit" name="" value="Agregar Registro">
                    <?php
                        if($_POST){
                            if($_POST['razon'] && $_POST['id']){
                                insertRegister($conexion);
                            }else{
                                echo "<p class='classp1'>Faltan datos necesarios</p>";
                            }
                        }
                    ?>
                </div>
            </form>
        </div>
        <footer class="classfooter" align="center">
            <div class="classdiv classdiv3 classdivtext" align="center">
                <a class="classa" href="inicio.php">Volver al menu principal</a>
            </div>
        </footer>
    </body>
</html>
