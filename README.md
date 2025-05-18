## Project Overview

This web application is designed for Rwanda Driving License(RDL) institutions to efficiently manage candidates' driving license results digitally. It replaces the traditional file system with an efficient, secure, and user-friendly Laravel-based solution.

## Features

- **Admin account management**: Registration, login (session-based), and logout.
- **CRUD operations**: Create, Read, Update, and Delete records for Admin, Candidate, and Grade tables.
- **Report generation**: Generate reports showing candidates’ pass/fail status.
- **Form validation**: Client-side validation using JavaScript for improved user experience.
- **Secure password handling**: Passwords are hashed using bcrypt.
- **Session-based authentication** ensures secure access to the application.

 ## Database Schema

The application uses a MySQL database named `RDL_MANAGEMENT` with the following tables:
-Admin Table
-Candidate Table
-Grade Table

## Installation and Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/peace250/Laravel_simple_CRUD_app.git
   cd https://github.com/peace250/Laravel_simple_CRUD_app.git

2. Install PHP dependencies
   - composer install
3. Install JS dependencies
   -  npm install
4. Generate App Key
   - php artisan key:generate
5. Run migrations to create the DB
   - php artisan migrate
6. Start the development server
   -php artisan serve
7. Open your browser at HTTP://localhost:8000 to access the app

## Usage
-Register and log in as an admin user.

-Manage candidates’ data by adding, updating, viewing, or deleting records.

-Record exam results and generate reports to view pass/fail status.

-Log out securely after completing tasks.

## Security Notes
-Passwords are hashed with bcrypt.

-Session-based authentication protects restricted pages.

-The .env file is excluded from the repository via .gitignore to keep sensitive data safe.

## Contribution
Feel free to submit issues or pull requests to improve the system.

## Licence
This project is licensed under MIT License

