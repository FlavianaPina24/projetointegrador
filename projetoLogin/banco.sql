-- start mysql pelo xampp
mysql -u root

-- visualizar bancos de dados existentes
show databases;

-- criar banco de dados
create database loginphp;

-- conectar a base de dados que eu quero
use loginphp;

-- criar tabela
create table usuario(
	idusuario int primary key auto_increment,
	nome varchar(30),
	login varchar(20) unique,
	senha varchar(32),
	perfil enum('adm', 'user')
);

-- visualizar tabelas criadas
show tables;

-- visualizar os campos da tabela
describe usuario;

## md5 -> função de criptografia, gera chave de 32 caracteres

-- inserir na tabela de usuário
insert into usuario values(null, 'rodrigo', 'admin', md5('123'), 'adm');
insert into usuario values(null, 'marcos', 'usuario', md5('abc'), 'user');

-- visualizar registro na tabela
select * from usuario;