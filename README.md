# KAMENIKA - E-commerce Platform

<p align="center">
  <img src="" width="100" alt="KAMENIKA Logo">
  <h1 align="center">KAMENIKA</h1>
</p>

<p align="center">
   Jewelry E-commerce Platform built with Laravel
</p>

## About KAMENIKA

KAMENIKA - это платформа электронной коммерции премиум-класса, специализирующаяся на ювелирных изделиях ручной работы, в том числе:

- Бижутерии (серьги)
- Колье (колье-бусы)
- Браслеты (браслеты)

Созданная на основе Laravel, эта платформа обеспечивает бесперебойную работу с покупками благодаря таким функциям, как каталог товаров, безопасное оформление заказа и управление учетными записями клиентов.

## Features

- 🛍️ Каталог товаров️ по категориям
- 🛒 Система корзины
- 🔐 Аутентификация пользователей 
- 🔍 Поиск товара 
- 📱  Отзывчивый дизайн
- 🌍 Связь
- 📊 Админ панель

## Installation

### Prerequisites

- PHP 8.1+
- Composer 2.0+
- MySQL 5.7+ 
- Node.js 16+
- NPM 8+

### Setup Instructions

1. Clone the repository:
   ```bash
   git clone 
   cd 
   ```
2. Install PHP dependencies:

```bash
composer install
```
Install JavaScript dependencies:

```bash
npm install
```
Create environment file:

```bash
cp .env.example .env
```
Generate application key:

```bash
php artisan key:generate
```
Configure database in .env:

```ini
DB_DATABASE=kamenika-jewelry
DB_USERNAME=root
DB_PASSWORD=
```
Run migrations and seeders:

```bash
php artisan migrate --seed
```
Compile assets:

```bash
npm run dev
```
Start development server:

```bash
php artisan serve
```

Development
Running Tests
```bash
php artisan test
```
Compiling Assets
For development:

```bash
npm run dev
```
For production:

```bash
npm run build
```
Database Structure
Database Schema

Technologies Used
Laravel 12

Alpine.js

Tailwind CSS

MySQL

License
KAMENIKA is open-source software licensed under the MIT license.

Contact
For inquiries, please contact: pautovegor8@gmail.com



