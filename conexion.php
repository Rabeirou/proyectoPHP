<?php
    $conexion = new mysqli("localhost","root","");
    $query = "SHOW DATABASES LIKE 'clientes'";
    $envio = $conexion->query($query);
    if($envio->num_rows == 0){
        $query = "create database clientes";
        $conexion->query($query);
        $conexion = new mysqli("localhost","root","","clientes");
        $query =
        "create table cliente(
            clave integer not null primary key auto_increment,
            id_cliente integer not null unique,
            razon_social varchar(50) not null,
            direccion varchar(80),
            telefono1 integer,
            contacto_tel1 varchar(40),
            telefono2 integer,
            contacto_tel2 varchar(40),
            telefono3 integer,
            contacto_tel3 varchar(40),
            localidad varchar(20),
            marca varchar(30),
            mail varchar(70)
        );";
        $conexion->query($query);
    }else{
        $conexion = new mysqli("localhost","root","","clientes");
    }
    if(!$conexion){
        echo "Error de conexion con la base de datos";
    }
?>
