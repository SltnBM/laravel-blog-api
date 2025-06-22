# ⚡ Laravel Blog API
A simple **RESTful API** backend built with **Laravel 12** for a blog application.  
This project is intended for learning purposes, focusing on CRUD operations, database migrations, and Laravel best practices.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## ✨ Features
- RESTful API CRUD for posts  
- Database migrations  
- .env environment file configuration  
- Built with **Laravel 12**  
- Ready for further development (authentication, validation, etc.)

## 🛠️ Technologies Used
- PHP 8+
- Laravel 12
- MySQL (or compatible)
- Composer

## 🚀 How to Use
1. Clone this repository
```bash
git clone https://github.com/SltnBM/backend-laravel-blog-app.git
```
2. Navigate to the project directory
```bash
cd backend-laravel-blog-app
```
3. Install all dependencies
```bash
composer install
```
4. Copy the example environment file
```bash
cp .env.example .env
```
5. Generate the application key
```bash
php artisan key:generate
```
6. Configure your .env with your database credentials
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```
7. Run database migrations
```bash
php artisan migrate
```
8. Run the development server
```bash
php artisan serve
```

## 🤝 Connect with Me
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Sultan%20Badra-blue?logo=linkedin&logoColor=white&style=flat-square)](https://www.linkedin.com/in/sultan-badra)

## 📄 License
Feel free to use this project for personal or educational purposes.
