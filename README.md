# Laravel 8 MiniAdministration APP

## Built With
* [Laravel 8 ](https://laravel.com/)
* [Laravel Jetstream](https://jetstream.laravel.com/)
* [Laravel Excel](https://laravel-excel.com/)


## Some screenshots

![API LINKS](/screenshots/1.png)
![API LINKS](/screenshots/2.png)
![API LINKS](/screenshots/3.png)

## Installation
1. Clone the repository

### `git clone https://github.com/mohamedamine001/mini-administration`

2. Move into the folder with this command

### `cd mini-administration`

3. Install project dependencies

### `composer install`

4. Rename `.env.example` to `.env` 

5. edit `.env` file with appropriate credential for your database server. Just edit these two parameter(DB_USERNAME, DB_PASSWORD).   

7. Create `administration` Database and then do a database migration using this command :   

### `php artisan migrate`

8. Before starting run the migrations with the seeds : 

### `php artisan migrate --seed`

Now you can access the application via [http://localhost:8000](http://localhost:8000).

## Contributing

Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.

## License

This project is released under the [MIT](http://opensource.org/licenses/MIT) license.