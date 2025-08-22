# CRUD de Produtos com Laravel, Vite e Tailwind CSS

[![Laravel](https://img.shields.io/badge/Laravel-12-red)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.1-blue)](https://www.php.net/)
[![Node.js](https://img.shields.io/badge/Node.js-18-green)](https://nodejs.org/)
[![Tailwind CSS](https://img.shields.io/badge/TailwindCSS-3.0-blueviolet)](https://tailwindcss.com/)

Projeto de exemplo para gerenciar produtos, permitindo **criar, visualizar, atualizar e excluir produtos**.  
Utiliza **Laravel 12**, **Vite** e **Tailwind CSS**.

---

## Requisitos

Antes de rodar o projeto, você precisa ter instalado:

- PHP >= 8.1  
- Composer  
- Node.js >= 18  
- MySQL ou outro banco de dados (é necessário alterar o `.env` se usar outro)

---

# Instalação

## 1. Clonar o projeto
```bash
git clone https://github.com/vitornsc7/crudlaravel.git
cd crudlaravel
```
## 2. Copiar o arquivo de exemplo .env.examplo para o criar o .env pelo terminal
```bash
cp .env.example .env
```
## 3. Se for utilizar algum outro banco de dados, altere essas informações do .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crudlaravel
DB_USERNAME=root
DB_PASSWORD=root
```
## Passo 4: Instale as dependências do PHP com Composer:
```bash
composer install
```
## Passo 5: Instale as dependências do Node e do Vite:
```bash
npm install
```
## Passo 6: Gere a chave da aplicação Laravel:
```bash
php artisan key:generate
```
## Passo 7: Rode as migrations para criar as tabelas no banco de dados:
```bash
php artisan migrate
```

## Passo 8: Inicie o servidor Laravel:
```bash
php artisan serve
```
O projeto estará acessível em http://localhost:8000

## Passo 9: Para tornar o Vite acessível, rode:
```bash
npm run dev
```
