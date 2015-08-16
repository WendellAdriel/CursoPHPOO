CREATE SCHEMA app
CHARACTER SET utf8 COLLATE utf8_unicode_ci;

CREATE TABLE app.pessoa (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(80) NOT NULL,
endereco VARCHAR(100) NOT NULL,
telefone VARCHAR(20) NOT NULL,
data_nascimento DATE NOT NULL
);

CREATE TABLE app.cliente (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_pessoa INT(6) UNSIGNED NOT NULL,
ativo BOOLEAN NOT NULL,
vip BOOLEAN NOT NULL
);

CREATE TABLE app.funcionario (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_pessoa INT(6) UNSIGNED NOT NULL,
email VARCHAR(50),
data_contratacao DATE NOT NULL
);

CREATE TABLE app.categoria (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(80) NOT NULL,
descricao TEXT NOT NULL
);

CREATE TABLE app.produto (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
id_categoria INT(6) UNSIGNED NOT NULL,
nome VARCHAR(80) NOT NULL,
descricao TEXT NOT NULL,
qtd_estoque INT UNSIGNED NOT NULL,
valor DECIMAL(4,2)
);

ALTER TABLE app.cliente
ADD CONSTRAINT fk_pessoa_cliente
FOREIGN KEY (id_pessoa) REFERENCES app.pessoa(id);

ALTER TABLE app.funcionario
ADD CONSTRAINT fk_pessoa_funcionario
FOREIGN KEY (id_pessoa) REFERENCES app.pessoa(id);

ALTER TABLE app.produto
ADD CONSTRAINT fk_categoria_produto
FOREIGN KEY (id_categoria) REFERENCES app.categoria(id);