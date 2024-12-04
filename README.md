# User Management System

## Description

The User Management System is built using Laravel, providing an easy-to-use platform for managing users with different departments and designations. It uses Bootstrap for a responsive and modern UI that displays user information in a sleek card-based layout. The system includes search functionality to quickly filter users by name, department, or designation.

### Features:
- Manage users, departments, and designations
- View user information in a card layout
- Real-time search functionality
- Responsive design for all screen sizes
- Database seeding for departments, designations, and users

---

## Requirements

Before you start, make sure you have the following installed on your machine:

- PHP (>= 8.0)
- Composer
- MySQL or any other supported database
- Laravel (5.8 or higher)
- Node.js (optional, for frontend build)

---

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/user-management-system.git
cd user-management-system
composer install
cp .env.example .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=user_management
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate
php artisan db:seed
php artisan serve
