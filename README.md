# Personal Task Manager

Project Code: IT WST21-PM-2026-SF
Student Name: Reden Kenneth C Lapiz
Course & Year: BSIT-2
Database Used: MySQL

## Features
- Add Task
- View Tasks
- Edit Task
- Delete Task
- Update Status
    • Pending
    • Completed

## Technology Used
- Laravel
- PHP
- MySQL
- Blade
- HTML
- CSS
- Git
- Visual Studio Code

## Laravel Process
The project follows the Laravel Workflow:

### Route -> Controller -> Model -> Database -> Blade View

Route receive the request, the controller handles the task operation, the model communicates with MySQL, and Blade displays the result to the user.

## How to Run
1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and set your database credentials
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Run `php artisan serve`
