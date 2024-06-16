

## Project Setup Guidelines

To run the project please follow the guide below 

- Create mysql database & enter your database credentials in the .env file
- Set up your `.env` file by running the following command in your root directory `cp .env.example .env`
- Run `composer install`
- Run `php artisan key:generate`
- Run  `php artisan migrate:fresh --seed`
- Run `npm run build`
- Run `php artisan serve` 
