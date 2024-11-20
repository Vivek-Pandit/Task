<p align="center">
    <a href="https://laravel.com" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions">
        <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/laravel/framework">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

# Task - 1

## Overview

This is a Task - 1 built using the Laravel framework. It allows you to manage tasks, items, and other entities with a simple RESTful API. You can use this project as a base for your task management system, or simply as a learning resource for working with Laravel.

## Features

- CRUD Operations for managing tasks and items.
- RESTful API endpoints.
- Data validation for ensuring data integrity.
- API Authentication with Laravel Passport or Sanctum.
- Database migrations to structure the task-related data.

## Prerequisites

Before running the project, ensure you have the following installed:

- [PHP >= 8.1](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [MySQL](https://www.mysql.com/)
- [Laravel](https://laravel.com/)

## Installation

### Step 1: Clone the Repository

Clone the repository to your local machine:

```bash
git clone https://github.com/Vivek-Pandit/task.git
```

### Step 2: Install Dependencies

Navigate to the project folder and install the required PHP dependencies:

```bash
cd task
composer install
```

### Step 3: Configure Environment

Copy the `.env.example` file to create your `.env` file:

```bash
cp .env.example .env
```

Open the `.env` file and configure your database settings:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management
DB_USERNAME=root
DB_PASSWORD=
```

### Step 4: Generate Application Key

Generate the application key:

```bash
php artisan key:generate
```

### Step 5: Run Migrations

Run the database migrations to create the necessary tables:

```bash
php artisan migrate
```

### Step 6: Seed Database (Optional)

You can seed the database with dummy data using the following command:

```bash
php artisan db:seed
```

### Step 7: Start the Server

Run the server locally:

```bash
php artisan serve
```

The API will be available at `http://127.0.0.1:8000`.

## API Endpoints

Here are the main API endpoints available in the system:

### 1. Get All Items

URL: `GET /api/items`

Description: Retrieves a list of all items.

Response Example:

```json
[
  {
    "id": 1,
    "name": "Item 1",
    "description": "This is item 1.",
    "price": 100.00
  },
  {
    "id": 2,
    "name": "Item 2",
    "description": "This is item 2.",
    "price": 200.00
  }
]
```

### 2. Create a New Item

URL: `POST /api/items`

Description: Creates a new item.

Request Example:

```json
{
  "name": "New Item",
  "description": "This is a new item.",
  "price": 150.00
}
```

### 3. Update an Item

URL: `PUT /api/items/{id}`

Description: Updates the details of an existing item.

Request Example:

```json
{
  "name": "Updated Item",
  "description": "This is an updated item.",
  "price": 180.00
}
```

### 4. Delete an Item

URL: `DELETE /api/items/{id}`

Description: Deletes an item.

---

## Contributing

We welcome contributions to improve this project! Feel free to fork the repository and submit a pull request with your proposed changes.

To get started, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature-name`).
6. Create a new Pull Request.

---

## License

This project is open-source and licensed under the MIT License.

---

<p align="center">
    <strong>Created By  <a href="https://dev-vivek.vercel.app/"> Vivek Pandit </strong>
<<<<<<< HEAD
</p>
=======
</p>

>>>>>>> 6569ca88102c888740ef528bccc7472783b3c19e
