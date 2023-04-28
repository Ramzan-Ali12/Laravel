# Laravel

Laravel CRUD is a simple web application that allows you to create, read, update and delete data from a database using Laravel framework.

## Installation

To install Laravel CRUD, you need to have PHP, Composer and MySQL installed on your system. Then follow these steps:

1. Clone this repository to your local machine: `https://github.com/Ramzan-Ali12/Laravel.git`
2. Navigate to the project directory: `cd laravel-crud`
3. Install the dependencies: `composer install`
4. Copy the .env.example file to .env and fill in the database credentials: `cp .env.example .env`
5. Generate an application key: `php artisan key:generate`
6. Run the database migrations: `php artisan migrate`
7. Start the development server: `php artisan serve`

## Usage

To use Laravel CRUD, open your browser and go to http://localhost:8000. You will see a list of data from the database. You can add a new record by clicking on the "Add New" button, edit an existing record by clicking on the "Edit" button, or delete a record by clicking on the "Delete" button and View the record by click on the View buton.

## Home Page
![image](https://user-images.githubusercontent.com/103037323/235219731-966c2a62-5aca-4b69-9909-225a2bb632af.png)


## Features

Laravel CRUD has the following features:

- Create, read, update and delete data from a database using Laravel framework
- Validate user input and display error messages
- Use Bootstrap for styling and layout
- Use Eloquent ORM for database interaction
- Use Blade templating engine for views

## Contributing

Laravel CRUD is an open source project and welcomes contributions from anyone. If you want to contribute to Laravel CRUD, please follow these guidelines:

- Fork this repository and create a new branch for your feature or bug fix
- Write clean and consistent code that follows the PSR standards
- Test your code locally before pushing to GitHub
- Create a pull request with a clear description of your changes
- Wait for feedback or approval from the maintainer
