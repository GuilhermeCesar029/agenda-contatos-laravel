Agenda - laravel

Laravel 5.8
Instalação direta

git clone https://github.com/GuilhermeCesar029/Agenda-Contatos-Laravel
composer install
cp .env.example .env  
php artisan migrate:refresh --seed
php artisan key:generate
php artisan serve


Instalação passo a passo

    1. Clone o repositório

git clone https://github.com/GuilhermeCesar029/Agenda-Contatos-Laravel

    2. Instalar as dependências

composer install

    3. Criar o banco de dados em sqlite

touch database/crud.sqlite

    4. Copiar o arquivo .env

cp .env.example .env 

    5. Criar as tabelas no banco

php artisan migrate

    6. Inserir os dados no banco predefinido no seed

php artisan db:seed

    7. Gerar a chave da aplicação:

php artisan key:generate

    8. Iniciar a aplicação

php artisan serve
