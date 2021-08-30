SELECT * FROM usuario;

create table if not exists usuario (
    id serial,
    usuario character(255),
    senha character (255)
);

insert into usuario(usuario, senha) values ('isael.silva','123')