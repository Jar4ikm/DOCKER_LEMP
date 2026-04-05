for mysql
connect to mariadb(root:admin) then type:

create database site;

create user user@'%' identified by 'YOURPASSWORD';
grant all privileges on \*.\* to user@'%';
use site;

create table messages(id int auto_increment primary key, message text);
insert into messages (message) values ("Message from mysql");
