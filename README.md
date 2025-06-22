<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Installation

### Clone this repository
You can downloade or clone this repository, if you want download you can touch the button with text code and download zip
```bash
git clone https://github.com/SltnBM/backend-laravel-blog-app.git
cd backend-laravel-blog-app
```

### Install All Dependencies
First you must install all the dependencies
```bash
composer install
```

### Copy .env files
Copy .env.example file into .env and generate key from .env
```
cp .env.example .env
php artisan:key generate
```

### Setup Database Environment
Setup the database environment in .env file using your database credentials
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### Migration Database
Migrate all databases
```bash
php artisan migrate
```

### Running apps
```bash
php artisan serve
```
