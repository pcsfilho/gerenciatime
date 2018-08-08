# README
*Clone GitHub project
* Install Composer Dependencies:
$ composer install
* Install NPM Dependencies:
$ npm install
*Create an empty database for our application
* You should create a new .env settings file based on the information contained in .env.example. The default database is pgsql.
* In the config/database file you should change the default database to pgsql. So, to confirm the changes, you must run: 
$ php artisan migrate
* Seed the database:
$ php artisan db:seed
* You must generate a new application key (APP_KEY) for the project: 
$ php artisan key:generate
* To download the front-end dependencies, you must execute the command:
$ npm install

## Dependências do Projeto
