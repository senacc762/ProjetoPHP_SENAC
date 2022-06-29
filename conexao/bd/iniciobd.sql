CREATE DATABASE bd_loja;

CREATE TABLE tb_usuarios(
	id_usuarios INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	login varchar(100) NOT NULL,
	senha varchar(200) NOT NULL,
	
	CONSTRAINT constraint_login UNIQUE KEY(login)
);


CREATE TABLE produtos(
	id_produtos INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome varchar(100) NOT NULL,
	marca varchar(100) NOT NULL,
	modelo varchar(100) NOT NULL,
	valor decimal(10,2) NOT NULL
);