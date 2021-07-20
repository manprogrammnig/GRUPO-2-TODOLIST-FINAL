drop database  bd_registro;
create database bd_registro;
use bd_registro;

create table usuarios(
id_usuario int primary key not null auto_increment,
usuario varchar(50),
correo varchar (50),
contraseña varchar(30)
);

insert into usuarios values (1,'Franklin Cruz Carrasco','roonny.cruz@gmail.com','111a');
insert into usuarios values (2,'Sebastian Luque Garcia','seba_2017@gmail.com','234seba');
insert into usuarios values (3,'Jose Cabrera Carmona','jocaz@gmail.com','molevis01');

create table tareas(
id_tareas int primary key not null auto_increment,
nomtarea varchar (50),
id_usuario  int,
foreign key (id_usuario) references usuarios(id_usuario));

INSERT INTO tareas VALUES('1','dormir','1');
INSERT INTO tareas VALUES('2','trabajar','1');
INSERT INTO tareas VALUES('3','ver tv','1');
INSERT INTO tareas VALUES('4','trabajar','2');
INSERT INTO tareas VALUES('5','lavar','2');
INSERT INTO tareas VALUES('6','panchar','2');
INSERT INTO tareas VALUES('7','dormir','2');
INSERT INTO tareas VALUES('8','trabajar','3');
INSERT INTO tareas VALUES('9','cocinar','3');
INSERT INTO tareas VALUES('10','ir a gim','3');
INSERT INTO tareas VALUES('11','ir a reunion','3');

-- select*from tareas

      
