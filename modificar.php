<?php
    include("conexion.php");
    include("scripts/funcionesphp.php");
    $clave = $_REQUEST['clave'];
    if($clave != NULL){
        $envio = $conexion->query("select * from cliente where clave=".$clave);
    }
    while($row = $envio->fetch_assoc()){
        $razon = $row['razon_social'];
        $dir = $row['direccion'];
        $tel1 = $row['telefono1'];
        $con1 = $row['contacto_tel1'];
        $tel2 = $row['telefono2'];
        $con2 = $row['contacto_tel2'];
        $tel3 = $row['telefono3'];
        $con3 = $row['contacto_tel3'];
        $localidad = $row['localidad'];
        $marca = $row['marca'];
        $mail = $row['mail'];
        $id = $row['id_cliente'];
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Modificar</title>
        <link rel="stylesheet" href="estilos/styles1.css">
    </head>
    <body>
        <header class="classheader classdivtext" align="center">
            <h1>MODIFICAR REGISTRO</h1>
        </header>
        <div class="classdivtext classdiv classdiv4 classdivtext classdiv15">
            <form class="classform1" action="<?php echo 'modificar.php?clave='.$clave;?>" method="post">
                <div class="classdiv13">
                    <p align="center" class="encabezado">Ingrese los datos del cliente</p>
                    <label align="left">ID de cliente</label>
                    <input type="text" name="id" value="<?php echo $id ?>">
                    <label align="left">Razon Social</label>
                    <input type="text" name="razon" value="<?php echo $razon ?>">
                    <label align="left">Direccion</label>
                    <input type="text" name="dir" value="<?php echo $dir ?>">
                    <label align="left">Telefonos y Contactos</label>
                    <div><input type="text" name="tel1" value="<?php echo $tel1 ?>" placeholder="Numero"> <input type="text" name="con1" value="<?php echo $con1 ?>" placeholder="Contacto"></div>
                    <div><input type="text" name="tel2" value="<?php echo $tel2 ?>" placeholder="Numero"> <input type="text" name="con2" value="<?php echo $con2 ?>" placeholder="Contacto"></div>
                    <div><input type="text" name="tel3" value="<?php echo $tel3 ?>" placeholder="Numero"> <input type="text" name="con3" value="<?php echo $con3 ?>" placeholder="Contacto"></div>
                    <label align="left">Localidad</label>
                    <input type="text" name="localidad" value="<?php echo $localidad ?>">
                    <label align="left">Marca</label>
                    <input type="text" name="marca" value="<?php echo $marca ?>">
                    <label align="left">Mail</label>
                    <input type="text" name="mail" value="<?php echo $mail ?>">
                </div>
                <div class="classdiv14" align="center">
                    <input class="classbutton classbutton3" type="submit" name="" value="Modificar Registro">
                    <?php
                        if($_POST){
                            if($_POST['razon'] && $_POST['id']){
                                modifyRegister($conexion,$clave);
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
