create database senacms;
use senacms;
create table user(
id int auto_increment primary key,
nome varchar(40),
senha varchar(20),
funcao varchar(20)
);
drop table user;

insert into user values (null, "admin", "admin", "adm");
insert into user values (null, "user", "user", "user");
select * from user where nome = "admin" and senha = "admin";

select * from user;

select * from user where nome = "admin" and senha = "admin";
drop table clientes;
create table clientes(
id int auto_increment primary key,
first_name varchar(40),
last_name varchar(40),
fone varchar(40),
address varchar(40),
sexo varchar(20),
email_address varchar(40)
);

insert into clientes values (null,'','','','' );
insert into clientes values (null, 'ederson','costa','masculino','223423423','aracaju','dsdsd@dasda.com');

select * from clientes;

