# Escopo e objetivo

Desafio técnico Full Stack.

Sistema de agendamento de reuniões. Permite cadastrar reuniões, aprovar, listar, exibir em um calendário, editar e remover.

O projeto inclui:

(a) Laravel

(b) VueJs

## Baixar, instalar e rodar aplicação:

- `git clone https://github.com/pauloflausino/projetophpvue`
- `cd projetophpvue`

#### Backend

- `cd backend`
- `composer update`
- `composer install`

> _Obs: Criar arquivo ".env" e configurar variáveis de ambiente (DATABASE e MAIL)

 
- `cp .env.example .env`
- `php artisan key:generate` - criar chave da aplicação

- `php artisan migrate`
- `php artisan db:seed`


O Serviço rodará na porta 8000: localhost:8000/

Usuário e senha do seed: 

- `robson@piperun.com`
- `password`

#### Frontend

- `cd frontend`
- `npm install`
- `npm run dev`

O Serviço rodará na porta 8080: localhost:8080/

## Bibliotecas e comandos utilizados no desenvolvimento

#### Frontend

```
$ npm i -S vue-the-mask //BIBLIOTECA DE INPUT MASK
$ npm i axios //PARA TRABALHAR COM A API BACKEND
$ npm i vue-notification //BIBLIOTECA DE NOTIFICAÇÕES JS
$ npm install --save vue-full-calendar //BIBLIOTECA DO FULLCALENDAR
```

#### Backend


//INSTALAR BIBLIOTECA DE AUTENTICAÇÃO PASSPORT

---
$ composer require laravel/passport:* 
$ php artisan passport:install 

//AUTENTICAÇÃO LARAVEL

---
$ composer require laravel/ui:*
$ php artisan ui vue --auth
$ npm install

- `php artisan serve`