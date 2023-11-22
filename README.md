# Business Portal Site And Tenders

This repository contains the source code and assets for a Business Portal Site And Tenders, a website developed using the Laravel framework, PHP, and Blade templating engine.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Features

- User registration and authentication system
- Dashboard for users to manage their profile and settings
- Business portal with the following features:
  - Listing and searching for businesses
  - Submitting tenders and proposals
  - Viewing and evaluating submitted tenders

## Installation

1. Clone the repository to your local machine

2. Navigate to the project directory

3. Install the dependencies using Composer:

   ```
   composer install
   ```

4. Create a copy of the `.env.example` file and rename it to `.env`:

   ```
   cp .env.example .env
   ```

5. Generate a new application key:

   ```
   php artisan key:generate
   ```

6. Configure the database settings in the `.env` file:

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

7. Run the database migrations:

   ```
   php artisan migrate
   ```

8. Start the development server:

   ```
   php artisan serve
   ```

9. Visit `http://localhost:8000` in your web browser to access the website.

## Contributing

Contributions to the Business Portal Site And Tenders project are welcome. If you encounter any issues or have suggestions for improvements, please create a new issue or submit a pull request.
