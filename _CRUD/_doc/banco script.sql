create database ajax_teste_img;

use ajax_teste_img;



create table usuario
(
	id_usuario int not null primary key auto_increment,
    nome_usuario varchar(50) not null,
    usuario_usuario varchar(20) not null unique,
    senha_usuario varchar(20) not null,
    img_usuario longblob not null,
    status_usuario varchar(20) not null,
    obs_usuario varchar(255) not null
);

select * from usuario;
drop table usuario