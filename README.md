# Laravel Project & Task Management System

A **Laravel-based Project & Task Management System** developed as part of a technical challenge. The project demonstrates authentication, authorization, CRUD operations, activity logging, RESTful APIs, and API testing using Postman.

---

## 📌 Overview

This application provides a complete workflow for managing projects and their related tasks with role-based access control and activity tracking. It includes both **web interfaces** and **RESTful APIs** for client consumption.

---

## 🎯 Challenge Scope (4-Day Plan)

### ✅ Day 1: Authentication & Authorization

* Implemented user authentication using **Laravel Breeze**
* Configured **role-based access control** using **Spatie Laravel Permission**

### ✅ Day 2: Project & Task Management

**Project Management**

* Created database migrations, models, controllers, and views for projects
* Implemented full CRUD functionality (Create, Read, Update, Delete)

**Task Management**

* Created database migrations, models, controllers, and views for tasks
* Implemented full CRUD functionality
* Linked tasks to their respective projects

### ✅ Day 3: User Management & Activity Logging

**User Management**

* Built a basic admin panel to list users
* Assigned and managed user roles

**Activity Logging**

* Tracked user actions using **Laravel Activitylog** package

### ✅ Day 4: API & Testing

**RESTful API**

* Created API endpoints for projects and tasks
* All responses are returned in **JSON format**

**API Testing**

* Tested all API endpoints thoroughly using **Postman**
* Verified CRUD operations and authentication workflows
* Screenshots and Postman collection are included in the repository

> ⚠️ **Note:** PHPUnit tests are optional in this submission; testing was performed using Postman.

---

## ✨ Features

* User Authentication & Authorization
* Role-based access control (Admin / User)
* Project CRUD operations
* Task CRUD operations
* Admin user management
* Activity logging
* RESTful API
* API testing via Postman

---

## 🛠 Tech Stack

* **Laravel 10**
* **PHP 8+**
* **MySQL**
* **Laravel Breeze**
* **Spatie Laravel Permission**
* **Laravel Activitylog**
* **Postman**
* **Vite + Tailwind CSS**

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

After seeding the database, you can log in using the following credentials:

* **Email:** [admin@admin.com](mailto:admin@admin.com)
* **Password:** password

---

## 🔗 API Documentation

All API endpoints are available under the `/api` prefix and are fully tested using Postman.

### Example Endpoints

```http
GET    /api/projects
GET    /api/tasks
POST   /api/projects
POST   /api/tasks
PUT    /api/projects/{id}
PUT    /api/tasks/{id}
DELETE /api/projects/{id}
DELETE /api/tasks/{id}
```

The Postman collection and sample responses are included in the repository.

---

## 📂 Project Structure

```
app/Http/Controllers   # Web & API controllers
app/Models             # Eloquent models
database/migrations    # Database schema
database/seeders       # Initial data
routes/web.php         # Web routes
routes/api.php         # API routes
tests                  # Optional PHPUnit tests (not used in this submission)
```

---

## 📝 Notes

* The project strictly follows the **4-day challenge scope**
* Focused on clean architecture, best practices, and core functionality
* API endpoints are fully tested using Postman
* Codebase is modular, well-documented, and easy to extend

---

## 👩‍💻 Author

**Salma Nafea**
GitHub: [https://github.com/Salmanafea](https://github.com/Salmanafea)
