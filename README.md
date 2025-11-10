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

---

## ✨ Features
- RESTful API CRUD for posts  
- Database migrations  
- .env environment file configuration  
- Built with **Laravel 12**  

---

## 🖥️ Technologies Used
- PHP 8+
- Laravel 12
- MySQL (or compatible)
- Composer

---

## 🚀 How to Use
1. Clone this repository
```bash
git clone https://github.com/SltnBM/laravel-blog-api.git
```
2. Navigate to the project directory
```bash
cd laravel-blog-api
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

---

## 🧪 API Testing with Postman
1️. Open Postman or your favorite API client.

2️. Use the base URL:
```bash
http://127.0.0.1:8000
```

---

## 📁 Postman Collection
You can import the provided Postman Collection for testing the API endpoints:
- Collection:  
  `/postman/simple-forum.postman_collection.json`

- Environment:  
  `/postman/forum-api.postman_environment.json`

### 📥 How to import:
1. Open Postman → Import → Upload Files → Select both .json files.
2. Use the Environment for easier variable handling.
3. Run the requests from simple-forum collection.

---

## 🤝 Connect with Me
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Sultan%20Badra-blue?logo=linkedin&logoColor=white&style=flat-square)](https://www.linkedin.com/in/sultan-badra)

---

## 📄 License
This project is licensed under the MIT License. See the [LICENSE](./LICENSE) file for details.
