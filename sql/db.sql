drop database if exists electrodomesticos;
create database electrodomesticos;
use electrodomesticos;
CREATE TABLE usuarios(
  user VARCHAR (50) PRIMARY KEY NOT NULL,
  pass VARCHAR (50) NOT NULL
) engine = innodb;
CREATE TABLE empleados(
  id VARCHAR (20) PRIMARY KEY NOT NULL,
  nombre VARCHAR (50) NOT NULL,
  apellido VARCHAR (50) NOT NULL,
  telefono VARCHAR (20) NOT NULL,
  correo VARCHAR (50) NOT NULL,
  user VARCHAR (50) NOT NULL,
  index(user),
  FOREIGN KEY (user) REFERENCES usuarios (user),
  UNIQUE (correo)
) engine = innodb;
create table videojuegos (
  id_vid VARCHAR(6) primary key,
  nombre_vid varchar(50),
  genero_vid varchar(15),
  plataforma_vid varchar(50),
  precio_vid int(5)
);
insert into
  videojuegos
values("1", "Gears Of War", "guerra", "Xbox", 20000);
create table cliente (
    id_cli VARCHAR(6) primary key,
    nombre_cli varchar(50),
    apellido_cli varchar(15),
    direccion_cli varchar(5),
    telefono_cli int(20)
  );
create table television (
    id_tel VARCHAR(6) primary key,
    pulgadas_tel int(50),
    marca_tel varchar(15),
    precio_tel varchar(5)
  );
create table portatil (
    id_por INT(25) primary key AUTO_INCREMENT,
    marca_por varchar(50),
    calidad_por varchar(15),
    valor_por varchar(20)
  );