C:\xampp\mysql\bin

use nombre_database;

create database clientes;
use clientes;

create table cliente(
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
);

update cliente set id_cliente=345345, razon_social='adsdf', direccion='asdfasdf', telefono1=435, contacto_tel1='asdf', telefono2=235, contacto_tel2='235', telefono3=345, contacto_tel3='asdf', localidad='asdf', marca='asdf', mail='df' where clave=3
create table cliente(clave integer not null primary key auto_increment, id_cliente integer not null, razon_social varchar(50) not null, direccion varchar(80), telefono1 integer, contacto_tel1 varchar(40), telefono2 integer, contacto_tel2 varchar(40), telefono3 integer, contacto_tel3 varchar(40), localidad varchar(20), marca varchar(30), mail varchar(70));

insert into cliente(id_cliente,razon_social,direccion,telefono1,contacto_tel1,telefono2,contacto_tel2,telefono3,contacto_tel3,localidad,marca,mail) values (15142, 'razonSocial1', 'direccion1', 4444, 'contacto1', 4445, 'contacto2', 4446, 'contacto3', 'localidad1', 'marca1', 'mail1@example.com');
insert into cliente(id_cliente,razon_social,direccion,telefono1,contacto_tel1,telefono2,contacto_tel2,telefono3,contacto_tel3,localidad,marca,mail) values (514, 'razonSocial2', 'direccion2', 333, 'contacto12', 4442, 'contacto22', 4446, 'contacto32', 'localidad2', 'marca2', 'mail2@example.com');
