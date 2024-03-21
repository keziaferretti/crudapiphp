# API CRUD em PHP

Esta é uma API simples desenvolvida em PHP que permite realizar operações CRUD (Create, Read, Update, Delete) em um banco de dados.

## Funcionalidades

- **Create (Criar)**: Adiciona um novo registro ao banco de dados.
- **Read (Ler)**: Recupera registros do banco de dados.
- **Update (Atualizar)**: Atualiza um registro existente no banco de dados.
- **Delete (Excluir)**: Remove um registro do banco de dados.

## Como usar

1. **Configuração do Ambiente**

   - Certifique-se de ter PHP instalado em sua máquina.
   - Configure um servidor web local (como Apache ou Nginx) para executar o projeto.

2. **Configuração do Banco de Dados**

   - Importe o arquivo SQL fornecido (`notes.sql`) para criar a estrutura do banco de dados.
   - Configure as credenciais do banco de dados no arquivo de configuração (`config.php`).

3. **Endpoints da API**

   - `GET /api/getall`: Retorna todos os usuários.
   - `GET /api/get/{id}`: Retorna um usuário específico.
   - `POST /api/insert`: Adiciona um novo usuário.
   - `PUT /api/update/{id}`: Atualiza um usuário existente.
   - `DELETE /api/delete/{id}`: Remove um usuário.

## Tecnologias Utilizadas

- PHP
- MySQL (ou outro banco de dados de sua escolha)

