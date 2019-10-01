<?php

  $legajo=$_POST['legajo'];
  $nombre=$_POST['nombre'];
  $fecha=$_POST['fecha'];
  $domicilio=$_POST['domicilio'];

  $conexion=new mysqli("localhost", "root", "", "ejemplo");

  if($conexion->connect_error){

    die("No se pudo conectar ".$conexion->connect_error);

  }
   $sql="insert into alumno values($legajo, '$nombre', '$fecha', '$domicilio')";
  echo $sql;
  if($conexion->query($sql)===TRUE){
    echo "Se agrego un registro ";
  }else{
    echo "Problemas ".$conexion->connect_error;
  }
  
  $sql="select * from alumno";
  $result=$conexion->query($sql);
  
  if($result->num_rows > 0){
  while($row=$result->fetch_assoc()){
		echo $row['legajo']." ".$row['nombre']." ".$row['fechaNacimiento']." ".$row['direccion'];
  }
	}else{
		echo "consulta vacia";
  }
  
  $conexion->close();
 ?>
