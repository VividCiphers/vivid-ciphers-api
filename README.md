# Vivid Ciphers Website API

To get the API project to run on your system will require a bit of work.  You will need php, mysql, composer, laravel, and postman.

## Setting up the project

- Before we can do any work on the API, we need composer installed on our system.
  - [Composer Link](https://getcomposer.org/download/)
- Next we need to use composer to install Laravel.
  - `composer require global laravel/installer`
- In mysql, create a new vivid-ciphers database.  
- Using a commmand prompt, navigate to the vivid-ciphers-api project and run all existing migrations to build the database schema.

## Testing the API with postman

- Download postman if you don't already have it from [This link](https://www.getpostman.com/).
- Once postman is downloaded and you're running laravel's webserver, you can run start testing the API routes.
- Using a command prompt, navigate to the vivid-ciphers-api project folder and run `php artisan serve` to start laravel's webserver.

### Get All Users

- Set Postman to GET Request.
- http://localhost:8000/api/v1/users

## Live Test API  

- More to come soon...
