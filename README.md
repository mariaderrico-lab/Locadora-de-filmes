# Projeto Mimov - locadora-de-filmes
Projeto PHP + MySQL criado a partir da estrutura e padrões observados nos projetos compactados enviados, adaptados para uma locadora de filmes. O Mimov é um projeto que permite aos usuários navegar por um catálogo de títulos disponíveis e realizar o aluguel de forma rápida e direta, desenvolvida para gerenciar o catálogo e o aluguel de filmes em uma locadora. O sistema permite visualizar os títulos disponíveis, realizar a locação e administrar todo o acervo através de operações completas de CRUD (Criar, LER, Atualizar e Deletar).

## Funcionalidades: 

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


# Como Executar o Projeto


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
PRIMARY KEY (‘id’)); 

