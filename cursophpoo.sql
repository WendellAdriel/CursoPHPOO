CREATE SCHEMA cursophpoo

CREATE TABLE funcionarios (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(80) NOT NULL,
endereco VARCHAR(100) NOT NULL,
telefone VARCHAR(20),
email VARCHAR(50),
data_nascimento DATE NOT NULL,
data_contratacao DATE NOT NULL
)

CREATE TABLE produtos (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(80) NOT NULL,
descricao TEXT NOT NULL,
qtd_estoque INT UNSIGNED NOT NULL,
valor DECIMAL(4,2)
)