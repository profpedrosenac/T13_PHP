create database ajax_teste;

use ajax_teste;

select * from usuario;

create table usuario
(
	id_usuario int not null primary key,
    nome_usuario varchar(50) not null,
    usuario_usuario varchar(20) not null unique,
    senha_usuario varchar(20) not null,
    status_usuario varchar(20) not null,
    obs_usuario varchar(255) not null
)