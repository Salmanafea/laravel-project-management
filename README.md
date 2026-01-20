# Laravel Project & Task Management System

## 📌 Overview

This project is a **Laravel-based Project & Task Management System** developed as part of a technical challenge. It demonstrates authentication, authorization, CRUD operations, activity logging, RESTful APIs, and basic automated testing following Laravel best practices.

---

## 🎯 Challenge Scope (4-Day Plan)

### ✅ Day 1: Authentication & Authorization

* Implement user authentication using **Laravel Breeze**
* Set up role-based access control using **Spatie Laravel Permission**

### ✅ Day 2: Project & Task Management

**Project Management:**

* Create database migrations, models, controllers, and views for projects
* Implement CRUD functionality (Create, Read, Update, Delete)

**Task Management:**

* Create database migrations, models, controllers, and views for tasks
* Implement CRUD functionality
* Link tasks to projects

### ✅ Day 3: User Management & Activity Logging

**User Management:**

* Build a basic admin panel to list users and manage roles

**Activity Logging:**

* Track user actions using **Laravel Activitylog** package

### ✅ Day 4: API & Testing

**RESTful API:**

* Create API endpoints for projects and tasks
* JSON responses for client consumption

**Testing:**

* Write feature and unit tests using **PHPUnit**
* Test authentication, project, and task CRUD operations

---

## ✨ Features

* User Authentication & Authorization
* Role-based access control (Admin / User)
* Project CRUD
* Task CRUD
* Admin user management
* Activity Logging
* RESTful API
* Automated testing (PHPUnit)

---

## 🛠 Tech Stack

* Laravel 10
* PHP 8+
* MySQL
* Laravel Breeze
* Spatie Laravel Permission
* Laravel Activitylog
* Postman
* Vite + Tailwind CSS

---

## 🚀 Installation & Setup

```bash
git clone https://github.com/Salmanafea/laravel-project-management.git
cd laravel-project-management
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

---

## 🔐 Default Admin Account

After seeding the database, log in with:

* **Email:** [admin@example.com](mailto:admin@example.com)
* **Password:** password

---

## 🔗 API Documentation

* API endpoints available under `/api`
* Tested using **Postman**

Example endpoints:

```
GET /api/projects
GET /api/tasks
```

---

## 🧪 Running Tests

```bash
php artisan test
```

---

## 📂 Project Structure

* `app/Http/Controllers` – Web & API controllers
* `app/Models` – Eloquent models
* `database/migrations` – Database schema
* `database/seeders` – Initial data
* `routes/web.php` – Web routes
* `routes/api.php` – API routes
* `tests` – Feature & unit tests

---

## 📝 Notes

* Project strictly follows the 4-day challenge scope
* Focused on clean architecture, best practices, and core functionality
* Code is modular, well-documented, and easy to extend

---

## 👩‍💻 Author

**Salma Nafea**

GitHub: [https://github.com/Salm](https://github.com/Salm)
