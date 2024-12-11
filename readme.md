for mysql
connect to mariadb then type:

create database site;

create user jar4ik@'%' identified by 'YOURPASSWORD';
grant all privileges on *.* to jar4ik@'%';
use site;

create table messages(id int auto_increment primary key, message text);
insert into messages (message) values ("Message from mysql");