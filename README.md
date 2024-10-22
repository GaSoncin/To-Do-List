## Descrição do Projeto
Esta aplicação permite que os usuários gerenciem suas tarefas diárias com funcionalidades de CRUD (Criar, Ler, Atualizar e Deletar) utilizando PHP e MySQL.

## Tecnologias Utilizadas
- HTML
- CSS
- JavaScript
- PHP
- MySQL
- Bootstrap

## Como Executar o Projeto (Pré-requisitos)
Servidor local com suporte a PHP (por exemplo, XAMPP, WAMP ou MAMP)
MySQL instalado e configurado

##Passo a passo
Clonar o Repositório: git clone <link-do-repositorio>
Configurar o Banco de Dados:
Acesse seu MySQL e crie o banco de dados e as tabelas necessárias executando o script tarefas.sql:mysql -u root -p < backend/tarefas.sql
Ajustar Credenciais do Banco de Dados: Abra o arquivo backend/conectar.php e edite as credenciais para conectar corretamente ao seu banco de dados MySQL: $servername = "localhost"; $username = "seu-usuario"; $password = "sua-senha"; $dbname = "tabula_todolist"; Iniciar o Servidor Local:
Copie os arquivos do projeto para a pasta do servidor (por exemplo, htdocs no XAMPP).
Inicie o servidor Apache e MySQL no XAMPP, WAMP, ou MAMP.
Acessar a Aplicação: No navegador, vá para o endereço http://localhost/nome-do-projeto/index.php para acessar e interagir com a aplicação.

Linha de Pensamento: Durante o desenvolvimento deste projeto, enfrentei desafios como a configuração da conexão com o banco de dados e a integração do JavaScript com o backend PHP via requisições AJAX. A solução foi garantir uma estrutura de código limpa e modular para as operações CRUD, utilizando chamadas AJAX para atualizar o conteúdo da página sem recarregá-la. A separação clara entre frontend e backend facilitou a manutenção e a extensão da aplicação.
