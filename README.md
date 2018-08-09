# README
* Clonar projeto do GitHub
* Instalar depedências:
$ composer install
* Instalar depedências NPM:
$ npm install
* Criar banco de dados vazio para aplicação
* Deve criar um arquivo de configuração .env baseado no arquivo .env.example. O banco de dados padrão é o pgsql.
* No arquivo config/database.php deve-se mudar o banco de dados padrão para pgsql. Então deve-se rodar o comando: 
$ php artisan migrate
* Rodas os seeds para o banco de dados:
$ php artisan db:seed
* Você deve gerar uma chave para a aplicação: 
$ php artisan key:generate
* Deve-se instalar o programa Gulp com o comando:
$ npm install -g gulp  
* Deve-se instalar o programa Bower com o comando:
$ npm install -g bower  
* Então deve-se baixar as depedências do front-end:
$ npm install

# GerenciaTime
	Este é um sistema web criado com o objetivo de registrar entradas e saídas dos funcionários de uma empresa.
	O sistema foi desenvolvido utilizando a versão 5.6 do Laravel.
# Funcionalidades
As funcionalidades são divididas em duas visões:
* Administrador:
1. Cadastrar Funcionário
2. Ecluir Funcionário
3. Cadastrar Administrador
4. Excluir Administrador
5. Listagem de Funcionários
6. Listagem de Administradores
7. Listagem dos registros de cada funcionário
8. Listagem dos registros de todos os funcionários
* Funcionário
9. Bater ponto de entrada na empresa  
10. Bater ponto de saída na empresa 
11. Bater ponto de ida para almoço 
12. Bater ponto de retorno do almoço
13. Bater ponto para intervalo 
14. Bater ponto para retorno do intervalo

A visão do administrador deve ser acessada pela urls \admin
Na tela do funcionário são apresentados dois campos:
* Nome do Funcionário
* Tipo de ponto

O funcionário deve escolher seu nome e o tipo de ponto a ser batido. 
O campo Tipo de ponto os usuário têm as opções:
* Diário(ponto de entrada e saída da empresa)
* Almoço(ponto de entrada e saída para o almoço)
* Intervalo(ponto de entrada e saída do intervalo)

A primeira vez que o funcionário escolhe um determinado tipo de ponto ele esta registrando o horário de início do ponto. Ao escolher pela segunda o mesmo ponto o funcionário esta escolhendo o horário final do ponto.

## Tabelas

* Usuário (user)
	- Nome
	- Email
	- Matrícula

* Ponto do dia (time_day)
	- Usuário
	- Data

* Ponto (time)
	- Ponto do dia
	- Horário inicial
	- Horário final
	- Tipo de Ponto(Diário,Intervalo,Almoço)
	- Status

## Dependências do Projeto
* axios: ^0.18
* bootstrap: ^4.0.0
* cross-env: ^5.1
* gulp": 3.9.1
* jquery": 3.2
* laravel-elixir: ^6.0.0-18
* laravel-mix: ^2.0