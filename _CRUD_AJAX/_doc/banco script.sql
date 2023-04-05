create database t13_CRUD;
use t13_CRUD;

create table usuario
(
	id_usuario int auto_increment not null primary key,
    nome_usuario varchar(50) not null,
    login_usuario varchar(30) not null unique,
    senha_usuario varchar(30) not null,
    cadastro_usuario timestamp not null,
    status_usuario varchar(20) not null,
    obs_usuario varchar(255) null
);
select * from usuario;
insert into usuario
(nome_usuario,login_usuario,senha_usuario,status_usuario,obs_usuario)
values
('Administrador','admin','123','Ativo',''),
('Asdrubal','asdrubal','123','Ativo',''),
('Benegundes','benegundes','123','Ativo',''),
('Judith','judith','123','Ativo','')