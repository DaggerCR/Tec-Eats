create schema teceatsfinal;
use teceatsfinal;

create table usuario (
	id int primary key NOT NULL AUTO_INCREMENT,
    nombre varchar(15),
    apellido1 varchar(15),
    apellido2 varchar(15),
    correo varchar(25),
    usuario varchar(15),
    passw varchar(15)
);

create table cuentas(
	id int primary key NOT NULL AUTO_INCREMENT,
    nombre varchar(15),
    numero varchar(15),
    saldo int,
    usuario_id int
    
);

create table comidas(
	id int primary key NOT NULL AUTO_INCREMENT,
    nombre varchar(15),
    disponibilidad int,
    tipo_id int,
    precio int,
    tiempo_id int
);

create table tipos(
	id int primary key,
    nombre varchar(15)
);

create table tiempos(
	id int primary key,
    nombre varchar(15)
);

create table pedidos(
	id int primary key NOT NULL AUTO_INCREMENT,
    alimento varchar(15),
    usuario_id int,
    fecha date,
    precio int
);

create table sobresAhorro(
	id int primary key not null auto_increment,
    nombre varchar(15),
    saldo int,
    cuenta_id int
);

create table histSobres(
	id int primary key not null auto_increment,
    detalle varchar(20),
    fecha date,
    hora text,
    nombre_sobre varchar(20),
    cuenta_id int
);

create table histPedidos(
	id int primary key not null auto_increment,
    alimento varchar(20),
    usuario_id int,
    fecha date
);






