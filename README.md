To-Do List - Tabula
🚀 Descrição do Projeto
Este projeto foi desenvolvido como parte do teste técnico para a Tabula. Ele consiste em uma aplicação de Lista de Tarefas que permite aos usuários gerenciar suas tarefas diárias, com suporte completo para operações CRUD (Criar, Ler, Atualizar e Deletar). Além disso, permite marcar tarefas como concluídas e ordená-las automaticamente.

A aplicação utiliza PHP e MySQL no backend para armazenamento de dados, e Bootstrap para melhorar o layout.

🛠 Tecnologias Utilizadas
HTML5: Estrutura da página.
CSS3: Estilização visual da aplicação.
JavaScript: Interatividade com a página.
PHP: Manipulação de dados no backend.
MySQL: Banco de dados para armazenar as tarefas.
Bootstrap: Framework CSS para design responsivo.
🎯 Funcionalidades
✅ Criar tarefas: Adicione novas tarefas com título e descrição (opcional).
📋 Listar tarefas: Veja todas as suas tarefas listadas.
🔍 Pesquisar tarefas: Pesquise uma tarefa pelo título.
✏️ Editar tarefas: Atualize o título e a descrição de tarefas existentes.
🗑 Deletar tarefas: Remova uma tarefa da lista.
✅ Marcar como concluída: Indique quando uma tarefa foi concluída.
🔄 Ordenação: Tarefas concluídas são automaticamente movidas para o final da lista.
📦 Como Executar o Projeto
📋 Pré-requisitos
Servidor web local como XAMPP, WAMP, ou MAMP.
Banco de dados MySQL instalado e configurado.
⚙️ Passo a passo
Clonar o Repositório:

bash
Copiar código
git clone <link-do-repositorio>
Configurar o Banco de Dados:

No seu terminal ou no phpMyAdmin, execute o arquivo tarefas.sql para criar o banco de dados e a tabela:
bash
Copiar código
mysql -u root -p < backend/tarefas.sql
Ajustar Credenciais do Banco de Dados:

Edite o arquivo backend/conectar.php com as suas credenciais MySQL:
php
Copiar código
$servername = "localhost";
$username = "seu-usuario";
$password = "sua-senha";
$dbname = "tabula_todolist";
Iniciar o Servidor Local:

Mova os arquivos do projeto para a pasta htdocs do XAMPP (ou www no WAMP).
Inicie o Apache e o MySQL no XAMPP/WAMP.
Acessar a Aplicação:

No navegador, vá até http://localhost/nome-do-projeto/index.php.
🧠 Linha de Pensamento
Durante o desenvolvimento, enfrentei alguns desafios, como a configuração da conexão com o MySQL e a implementação das operações AJAX para que a página pudesse atualizar sem recarregamentos completos. A estrutura foi organizada de forma que o backend gerencie as operações CRUD de forma eficiente, enquanto o frontend foi projetado para ser fácil de usar e visualmente intuitivo.

Resolução dos principais problemas:

Para a conexão com MySQL, assegurei-me de usar credenciais dinâmicas e seguras no arquivo conectar.php.
A integração de AJAX foi uma ótima solução para evitar recarregamentos desnecessários, mantendo a experiência do usuário fluida e rápida.
📚 Estrutura do Projeto
bash
Copiar código
.
├── backend/
│   ├── conectar.php       # Arquivo de conexão com o banco de dados
│   ├── criar.php          # Lógica para criar uma tarefa
│   ├── editar.php         # Lógica para editar uma tarefa
│   ├── deletar.php        # Lógica para deletar uma tarefa
│   └── tarefas.sql        # Script SQL para criar o banco de dados e a tabela
├── css/
│   └── style.css          # Estilizações customizadas do projeto
├── js/
│   └── script.js          # Funções JavaScript e AJAX para manipulação de tarefas
├── index.php              # Página principal da aplicação
└── README.md              # Documentação do projeto
📝 Exemplo de Interface
Tela Principal com a lista de tarefas e formulários de criação/edição:

(Adicione uma captura de tela da sua aplicação aqui)

📄 Licença
Este projeto está licenciado sob os termos da MIT License.