# CRUD de Produtos com Laravel e Vite

Este é um projeto de exemplo para gerenciar produtos, permitindo criar, visualizar, atualizar e excluir produtos usando **Laravel 12**, **Vite** e **Tailwind CSS**.

## Requisitos
Antes de rodar o projeto, você precisa ter instalado:

- PHP >= 8.1
- Composer
- Node.js >= 18
- MySQL ou outro banco de dados (precisando trocar no .env)


## Passo 1: Clonar o projeto pelo terminal:
git clone https://github.com/vitornsc7/crudlaravel.git
cd crudlaravel

## Passo 2: Copiar o arquivo de exemplo .env.examplo para o criar o .env pelo terminal
cp .env.example .env

## Passo 3: Se for utilizar algum outro banco de dados, altere essas informações do .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crudlaravel
DB_USERNAME=root
DB_PASSWORD=root

## Passo 4: Instale as dependências do PHP com Composer:
composer install

## Passo 5: Instale as dependências do Node e do Vite:
npm install

## Passo 6: Gere a chave da aplicação Laravel:
php artisan key:generate

## Passo 7: Rode as migrations para criar as tabelas no banco de dados:
php artisan migrate

## Passo 8: Inicie o servidor Laravel:
php artisan serve

O projeto estará acessível em http://localhost:8000

# Passo 9: Para tornar o Vite acessível, rode:
npm run dev
