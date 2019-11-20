/*criando e usando o banco*/
create database cadastro;
use cadastro;

/*criando a tabela*/
create table cliente(
idCliente int primary key not null auto_increment,
nome varchar (100),
email varchar(50), 
estado varchar(50), 
dataNascimento varchar(20),
sexo varchar (20));

/*comando para visualização da tabela*/
select*from cliente;



