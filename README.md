# KAMENIKA - Online Store.

<p align="center">
  <img src="" width="100" alt="KAMENIKA Logo">
  <h1 align="center">KAMENIKA</h1>
</p>

<p align="center">
   Jewelry online store Platform built with Laravel.
</p>

## О KAMENIKA

KAMENIKA - это платформа электронной коммерции премиум-класса, специализирующаяся на ювелирных изделиях ручной работы, в том числе:

- Бижутерии (серьги)
- Колье (колье)
- Браслеты (браслеты)
- Брошь (брошки)
- Ловец снов (сувениры)
- Чокер (чокеры)

Созданная на основе Laravel, эта платформа обеспечивает бесперебойную работу с покупками благодаря таким функциям, как каталог товаров, безопасное оформление заказа.

## Особенности

- 🛍️ Каталог товаров️ по категориям
- 🛒 Система корзины
- 🔐 Регистрация/Аутентификация пользователей 
- 📱  Отзывчивый дизайн
- 🌍 Связь
- 📊 Админ панель

## Установка

### Требования

- PHP 8.1+
- Composer 2.0+
- MySQL 5.7+ 
- Node.js 16+
- NPM 8+

### Инструкции по установке

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
Create link for images:

```bash
php artisan storage:link
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



