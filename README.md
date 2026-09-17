# Projeto Mimov - locadora-de-filmes
desenvolvida para gerenciar o catálogo e o aluguel de filmes de uma locadora. 

# Aluguel de Filmes
* Consultar Disponibilidade: Filtrar ou visualizar apenas os filmes disponíveis para locação.
* Realizar Aluguel: Alterar o status do filme para "alugado".
* Devolução: Registrar a devolução do filme, tornando-o disponível novamente.

# Tecnologias Utilizadas:
* Linguagem: PHP
* Laravel Herd 
* Banco de Dados: MySQL 
* Interface: HTML/CSS 

# Requisitos Funcionais (RF)
* Fazer login
* Cadastrar filmes
* Alugar filmes
* Excluir filmes
* Registrar locações
* Registrar devoluções

# Requisitos Não Funcionais (RNF)
* Sistema desenvolvido em PHP 8.3+
* Banco MySQL
* Comunicação utilizando JSON

# Como Executar o Projeto

# Banco de dados Mysql
CREATE TABLE ‘login’ . ‘new_table’ (
‘id’ INT NOT NULL,
‘gmail’ VARCHAR(200) NOT NULL,
‘senha’ VARCHAR(45) NOT NULL,
PRIMARY KEY (‘id’));

CREATE TABLE ‘login’ . ‘filmes’ (
‘id’ INT NOT NULL,
‘título’ VARCHAR(100) NOT NULL,
‘genero’ VARCHAR(50) NOT NULL,
‘ano’ INT NOT NULL,
‘preço’ VARCHAR(30) NULL DEFAULT ‘disponível’

INSERT INTO filmes
(titulo, genero, ano, preco, quantidade_total, quantidade_disponivel)
VALUES
('Mulherzinhas', 'Drama/Romance', 2019, 8.00, 3, 3),
('Diário de uma Paixão', 'Romance', 2004, 7.00, 3, 3),
('Young Hearts', 'Drama/Romance', 2024, 8.50, 2, 2),
('10 Coisas que Eu Odeio em Você', 'Comédia/Romance', 1999, 7.50, 3, 3),
('Waves', 'Drama', 2019, 8.00, 2, 2);

CREATE TABLE IF NOT EXISTS filmes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    foto MEDIUMBLOB,
    lancamento YEAR,
    custo DECIMAL(10, 2) NOT NULL DEFAULT 10.00,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

    FOREIGN KEY (usuario_id) REFERENCES usuarios(id),
    FOREIGN KEY (filme_id) REFERENCES filmes(id)
);

PRIMARY KEY (‘id’)); 

