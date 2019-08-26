                                                       API_REST_LARAVEL 

Descrição do projeto:

- API REST que realiza as ações básicas de inserção, atualização, consulta e deleção da entidade Funcionário. 

Configurações necessárias:

- Laravel Framework 5.8.33
- Mysql 8.0.17 
- PHP 7.1.31
- Framework Postman 

Orientações para executar o teste técnico: 

1) Acessar as URL'S listadas abaixo no Framework Postman: 

    - Inserção de dados: 
    http://127.0.0.1:8000/api/funcionarios/create
    - Edição de dados...: 
    http://127.0.0.1:8000/api/funcionarios/update/id
    - Exclusão de dados: 
    http://127.0.0.1:8000/api/funcionarios/destroy/id
    - Consulta de dados: 
    http://127.0.0.1:8000/api/funcionarios/show/id
    - Listagem de dados: 
    http://127.0.0.1:8000/api/funcionarios/list 
    
2) Campos utilizados para a entidade Funcionario: nome, telefone, cpf, endereço, cidade e estado. 
   - Os campos data de criação e data de atualização são atualizados automaticamente.

3) Caminhos de acesso as codificações: 

   - Codificação das rotas: routes/api.php
   - Codificação de criação dos campos: database/migrates/2019_08_24_130554_create_table_funcionarios.php
   - Códificação com as funções do CRUD: app\http\controllers\api\FuncionarioController.php
  







