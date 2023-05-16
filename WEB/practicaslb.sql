create database practicaslb;
create table practicaslb.plantel(Id_plantel int auto_increment not null primary key,nombre_p varchar(50)not null,clave_p varchar(40)not null, dirección_p varchar(50)not null,tel_p varchar(10)not null,responsable varchar(40)not null)engine=innodb;

create table practicaslb.usuario(Id_usuario int auto_increment not null primary key, nombre varchar(50) not null, apellidos varchar(50)not null, direccion varchar(255) not null, telefono varchar(10) not null)engine=innodb;

create table practicaslb.lugares(Id_lugares int auto_increment not null primary key, nombre_L varchar(50)not null, descripcion varchar(255)not null, tel_L varchar(10)not null, email varchar(30)not null, facebook varchar(30)not null ,horario varchar(20)not null)engine=innodb;