<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            function insertRegister($conexion){
                $query = "insert into cliente(id_cliente,razon_social,direccion,telefono1,contacto_tel1,telefono2,contacto_tel2,telefono3,contacto_tel3,localidad,marca,mail) values (".$_POST['id'].", '".$_POST['razon']."', '".$_POST['dir']."', ".$_POST['tel1'].", '".$_POST['con1']."', ".$_POST['tel2'].", '".$_POST['con2']."',
                ".$_POST['tel3'].", '".$_POST['con3']."', '".$_POST['localidad']."', '".$_POST['marca']."', '".$_POST['mail']."')";
                if($conexion->query($query)){
                    echo "<p class='classp1'>El registro se ha agregado correctamente</p>";
                }else{
                    echo "<p class='classp1'>Hubo un error al agregar el registro</p>";
                }
            }

            function deleteRegister($conexion,$clave){
                $query = "delete from cliente where clave=".$clave;
                if($conexion->query($query)){
                    echo "El registro ha sido eliminado.";
                }else{
                    echo "Error al eliminar el registro.";
                }
            }

            function modifyRegister($conexion,$clave){
                $query = "update cliente set
                id_cliente=".$_POST['id'].",
                razon_social='".$_POST['razon']."',
                direccion='".$_POST['dir']."',
                telefono1=".$_POST['tel1'].",
                contacto_tel1='".$_POST['con1']."',
                telefono2=".$_POST['tel2'].",
                contacto_tel2='".$_POST['tel2']."',
                telefono3=".$_POST['tel3'].",
                contacto_tel3='".$_POST['con3']."',
                localidad='".$_POST['localidad']."',
                marca='".$_POST['marca']."',
                mail='".$_POST['mail']."'
                where clave=".$clave;
                if($conexion->query($query)){
                    echo "<p class='classp1'>El registro se ha modificado correctamente</p>";
                }else{
                    echo "<p class='classp1'>Error al modificar el registro</p>";
                }
            }

            function selectAll($conexion){
                $query = "select * from cliente";
                $envio = $conexion->query($query);
                while($row = $envio->fetch_assoc()){
                    $i = $row['clave'];
                    echo "<tr>";
                    echo "<td class='td1'>";
                    echo "<input type='button' value='Eliminar' onclick='enviarDatos($i,1);'>";
                    echo "</td>";
                    echo "<td class='td1'>";
                    echo "<input type='button' value='Modificar' onclick='enviarDatos($i,2);'>";
                    echo "</td>";
                    echo "<td>";
                    echo $row['clave'];
                    echo "</td>";
                    echo "<td id='id$i'>";
                    echo $row['id_cliente'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['razon_social'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['direccion'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['telefono1'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['contacto_tel1'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['telefono2'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['contacto_tel2'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['telefono3'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['contacto_tel3'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['localidad'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['marca'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['mail'];
                    echo "</td>";
                    echo "</tr>";
                }
            }

            function selectById($conexion,$id){
                $query = "select * from cliente where id_cliente = ".$id;
                $envio = $conexion->query($query);
                while($row = $envio->fetch_assoc()){
                    $i = $row['clave'];
                    echo "<tr>";
                    echo "<td class='td1'>";
                    echo "<input type='button' value='Eliminar' onclick='enviarDatos($i,1);'>";
                    echo "</td>";
                    echo "<td class='td1'>";
                    echo "<input type='button' value='Modificar' onclick='enviarDatos($i,2);'>";
                    echo "</td>";
                    echo "<td>";
                    echo $row['clave'];
                    echo "</td>";
                    echo "<td id='id$i'>";
                    echo $row['id_cliente'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['razon_social'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['direccion'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['telefono1'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['contacto_tel1'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['telefono2'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['contacto_tel2'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['telefono3'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['contacto_tel3'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['localidad'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['marca'];
                    echo "</td>";
                    echo "<td>";
                    echo $row['mail'];
                    echo "</td>";
                    echo "</tr>";
                }
            }
        ?>
        <script type="text/javascript">
            function enviarDatos(i,n){
                if(n==1){
                    location.href = "eliminar.php?clave="+i;
                }else{
                    location.href = "modificar.php?clave="+i;
                }
            }
        </script>
    </body>
</html>
