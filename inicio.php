<?php
    include("conexion.php");
    include("scripts/funcionesphp.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Clientes</title>
        <link rel="stylesheet" href="estilos/styles1.css">
        <script type="text/javascript" src="scripts/scripts1.js"></script>
    </head>
    <body>
        <header class="classheader classdivtext">
            <h1>MENU</h1>
        </header>
        <div class="classdiv classdiv10">
            <div class="classdiv7">
                <div class="classdiv17">
                    <div class="classa1" align="left"><a class="classa" href="agregar.php">Agregar Registro</a></div>
                </div>
                <div class="classdiv8">
                    Lista de Registros
                </div>
                <div class="classdiv9" align="right">
                    <form class="" action="inicio.php" method="post">
                        <input type="text" id="classsearch" name="search" placeholder="Buscar Registro por ID"><input class="classbutton classbutton2" type="submit" value=">">
                    </form>
                </div>
            </div>
            <div class="classdiv11">
                <table class="classtable1">
                    <tr>
                        <th>Eliminar</th>
                        <th>Modificar</th>
                        <th>Clave</th>
                        <th>ID Cliente</th>
                        <th>Razon Social</th>
                        <th>Direccion</th>
                        <th>Numero Tel 1</th>
                        <th>Contacto Tel 1</th>
                        <th>Numero Tel 2</th>
                        <th>Contacto Tel 2</th>
                        <th>Numero Tel 3</th>
                        <th>Contacto Tel 3</th>
                        <th>Localidad</th>
                        <th>Marca</th>
                        <th>Mail</th>
                    </tr>
                    <?php
                        if(isset($_POST['search']) && $_POST['search'] != NULL){
                            selectById($conexion,$_POST['search']);
                        }else{
                            selectAll($conexion);
                        }
                    ?>
                </table>
            </div>
        </div>
    </body>
</html>
