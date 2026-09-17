CREATE DATABASE IF NOT EXISTS login;
USE login;
CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(200) NOT NULL,
    senha VARCHAR(45) NOT NULL,
    PRIMARY KEY (id)
);
CREATE TABLE filmes (
    id INT NOT NULL AUTO_INCREMENT,
    titulo VARCHAR(100) NOT NULL,
    genero VARCHAR(50) NOT NULL,
    ano INT NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade_total INT NOT NULL,
    quantidade_disponivel INT NOT NULL,
    PRIMARY KEY (id)
);
INSERT INTO filmes
(titulo, genero, ano, preco, quantidade_total, quantidade_disponivel)
VALUES
('Mulherzinhas', 'Drama/Romance', 2019, 8.00, 3, 3),
('Diário de uma Paixão', 'Romance', 2004, 7.00, 3, 3),
('Young Hearts', 'Drama/Romance', 2024, 8.50, 2, 2),
('10 Coisas que Eu Odeio em Você', 'Comédia/Romance', 1999, 7.50, 3, 3),
('Waves', 'Drama', 2019, 8.00, 2, 2);
CREATE TABLE locacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    filme_id INT NOT NULL,
    data_locacao DATE NOT NULL,
    data_prevista DATE NOT NULL,
    data_devolucao DATE NULL,
    valor DECIMAL(10,2) NOT NULL,
    multa DECIMAL(10,2) DEFAULT 0,
    status ENUM(
        'Pendente',
        'Alugado',
        'Devolvido',
        'Cancelado'
    ) NOT NULL DEFAULT 'Pendente',
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (filme_id) REFERENCES filmes(id)
);