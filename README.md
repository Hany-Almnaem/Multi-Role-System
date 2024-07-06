Project Description
This full-stack web application is designed to streamline user management and request processing. Built with PHP and Laravel, it implements a robust multi-role system with three distinct user roles: 'User,' 'App Admin,' and 'App Manager'.
Features

#User Authentication and Authorization
Role-based access control (RBAC)
User Management
Request Processing System
Dashboard for each user role

#Technology Stack

PHP 8.x
Laravel 9.x
MySQL/PHP my admin
Bootstrap 5 (for frontend styling)

#Project Structure
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   └── Models/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── views/
│   └── js/
├── routes/
├── storage/
├── tests/
├── vendor/
├── .env
├── artisan
├── composer.json
├── package.json
└── README.md

#Installation

Clone the repository
git clone https://github.com/Hany-Almnaem/Multi-role-system.git

Navigate to the project directory
cd Multi-role-system

Install PHP dependencies
composer install

Install NPM dependencies
npm install

Create a copy of .env.example and rename to .env
Generate application key
php artisan key:generate

Configure your database in the .env file
Run database migrations
php artisan migrate

Seed the database (if seeders are available)
php artisan db:seed


#Usage

Start the Laravel development server
php artisan serve

Access the application at http://localhost:8000

User Roles and Permissions

User: Can submit requests and view their status
App Admin: Can manage users and process requests
App Manager: Has full system access, including reports and analytics

#Testing
Run the automated tests using:
php artisan test
