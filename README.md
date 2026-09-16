# Projeto Mimov - locadora-de-filmes
Projeto PHP + MySQL criado a partir da estrutura e padrões observados nos projetos compactados enviados, adaptados para uma locadora de filmes. O Mimov é um projeto que permite aos usuários navegar por um catálogo de títulos disponíveis e realizar o aluguel de forma rápida e direta, desenvolvida para gerenciar o catálogo e o aluguel de filmes em uma locadora. O sistema permite visualizar os títulos disponíveis, realizar a locação e administrar todo o acervo através de operações completas de CRUD (Criar, LER, Atualizar e Deletar).

## Funcionalidades: 
O projeto da locadora de filmes permite que o usuário faça seu login e tenha acesso ao catálogo de filmes disponíveis para aluguel. O catálogo tem cinco opções de filmes e para cada filme, são apresentadas nome, gênero, disponibilidade e valor do aluguel. Além disso, o sistema possui a opção de cadastrar novos, após o cadastro, o novo filme será automaticamente adicionado no catálogo. Também é possível excluir os filmes adicionados posteriormente, permitindo o gerenciamento e a atualização do catálogo. O sistema ainda apresentará a disponibilidade de cada título, indicando se o filme está disponível ou não para aluguel.

# Gestão de filmes: 
* Criar (Create): Cadastrar novos filmes no catálogo com informações essenciais (título, gênero, ano de lançamento, preço de locação e status de disponibilidade).
* Ver (Read): Listar todos os filmes cadastrados e visualizar os detalhes de um filme específico.
* Atualizar (Update): Editar dados de filmes existentes (ex: alterar preço, corrigir título ou mudar o status).
* Deletar (Delete): Remover filmes do sistema.

# Aluguel de Filmes
* Consultar Disponibilidade: Filtrar ou visualizar apenas os filmes disponíveis para locação.
* Realizar Aluguel: Alterar o status do filme para "alugado".
* Devolução: Registrar a devolução do filme, tornando-o disponível novamente.

# Tecnologias Utilizadas
* Linguagem: PHP
* Framework Backend:
* **Banco de Dados: MySQL 
* Interface: HTML/CSS 

# Requisitos Funcionais (RF)
RF01: Permitir o cadastro de usuários utilizando e-mail/usuário e senha.
RF02: Permitir o cadastro de filmes no catálogo da locadora.
RF03: Exibir a lista de filmes cadastrados no catálogo.
RF04: Permitir adicionar novos filmes em catálogo e 
RF05: Permitir que o usuário solicite a locação de um ou mais filmes disponíveis.
RF06: Registrar a devolução de um filme locado e calcular eventuais multas por atraso.
RF07: Permitir o cancelamento de uma solicitação de locação antes da confirmação.
RF08: Emitir relatórios de filmes mais alugados e histórico de locações por usuário.
RF09: Gerenciar o estoque físico/digital de cópias de cada filme disponível.

# Requisitos Não Funcionais (RNF)
RNF01: Back-End processado através do lado do servidor (PHP).

# Como Executar o Projeto
Baixar o GitHub
Baixar/Clonar projeto
C:\xampp\htdocs
Abrir no VS Code
Iniciar Apache + MySQL
Criar/importar banco
Configurar conexão PHP
http://localhost/nome-do-projeto/


# Banco de dados Mysql
CREATE TABLE ‘login’ . ‘new_table’ (
‘id’ INT NOT NULL,
‘nome’ VARCHAR(200) NOT NULL,
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

PRIMARY KEY (‘id’)); 

