CREATE DATABASE Centro;
USE Centro;

CREATE TABLE tb_usuario (
	id INT AUTO_INCREMENT NOT NULL,
	usuario VARCHAR(100) NOT NULL,
	senha VARCHAR(100) NOT NULL,
	email VARCHAR(70) NOT NULL,
	perfil VARCHAR(100) NOT NULL,
	PRIMARY KEY (id)
);

DESC tb_usuario;

INSERT INTO tb_usuario (usuario, email, senha, perfil)
	VALUE('Gabriel', '2023', 'gabriel@gmail.com', 'aluno');
    
SELECT * FROM tb_usuario;