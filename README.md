Laravel Project & Task Management System
📌 Overview

This project is a Laravel-based Project & Task Management System developed as part of a technical challenge. It demonstrates authentication, authorization, CRUD operations, activity logging, RESTful APIs, and basic testing using Postman.

🎯 Challenge Scope (4-Day Plan)
✅ Day 1: Authentication & Authorization

Implemented user authentication using Laravel Breeze

Configured role-based access control using Spatie Laravel Permission

✅ Day 2: Project & Task Management

Project Management:

Created database migrations, models, controllers, and views for projects

Implemented full CRUD functionality (Create, Read, Update, Delete)

Task Management:

Created database migrations, models, controllers, and views for tasks

Implemented full CRUD functionality

Linked tasks to projects

✅ Day 3: User Management & Activity Logging

User Management:

Built a basic admin panel to list users and manage roles

Activity Logging:

Tracked user actions using Laravel Activitylog package

✅ Day 4: API & Testing

RESTful API:

Created API endpoints for projects and tasks

Responses are in JSON format for client consumption

API Testing:

Tested all API endpoints thoroughly using Postman

Verified CRUD operations and authentication workflows

Screenshots and Postman collection included in the repository

⚠️ Note: PHPUnit tests are optional in this submission; testing was done via Postman.

✨ Features

User Authentication & Authorization

Role-based access control (Admin / User)

Project CRUD

Task CRUD

Admin user management

Activity Logging

RESTful API

API tested using Postman

🛠 Tech Stack

Laravel 10

PHP 8+

MySQL

Laravel Breeze

Spatie Laravel Permission

Laravel Activitylog

Postman

Vite + Tailwind CSS

🚀 Installation & Setup
git clone https://github.com/Salmanafea/laravel-project-management.git
cd laravel-project-management
composer install
npm install
npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

🔐 Default Admin Account

After seeding the database, log in with:

Email: admin@admin.com

Password: password

🔗 API Documentation

All API endpoints are available under /api

Tested using Postman

Example endpoints:

GET /api/projects
GET /api/tasks
POST /api/projects
POST /api/tasks
PUT /api/projects/{id}
PUT /api/tasks/{id}
DELETE /api/projects/{id}
DELETE /api/tasks/{id}


Postman collection and sample responses are included in the repository

📂 Project Structure

app/Http/Controllers – Web & API controllers

app/Models – Eloquent models

database/migrations – Database schema

database/seeders – Initial data

routes/web.php – Web routes

routes/api.php – API routes

tests – Optional PHPUnit tests (not used in this submission)

📝 Notes

Project strictly follows the 4-day challenge scope

Focused on clean architecture, best practices, and core functionality

API endpoints fully tested using Postman

Code is modular, well-documented, and easy to extend

👩‍💻 Author
Salma Nafea
GitHub: https://github.com/Salmanafea

Salma Nafea
GitHub: https://github.com/Salmanafea
