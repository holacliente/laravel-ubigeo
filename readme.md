# Laravel Ubigeo

Laravel Ubigeo is a package that provides a simple way to manage and use Peruvian ubigeo codes in your Laravel application.

## Installation

Install the package via Composer:

```bash
composer require holacliente/laravel-ubigeo
```

## Configuration

Publish the configuration file:

```bash
php artisan vendor:publish --tag=laravel-ubigeo-models --force
php artisan vendor:publish --tag=laravel-ubigeo-seeders --force
```

Migrate the data and seeders

```bash
php artisan migrate
php artisan db:seed --class=DepartamentoSeeder
php artisan db:seed --class=ProvinciaSeeder
php artisan db:seed --class=DistritoSeeder

```


## Usage



### Retrieve Ubigeo Information

You can use the provided models or helper functions to retrieve ubigeo data:

```php
use App\Models\Ubigeo;

// Get all departments
$departments = Ubigeo::departments();

// Get provinces by department
$provinces = Ubigeo::provinces('Lima');

// Get districts by province
$districts = Ubigeo::districts('Lima', 'Lima');
```

## Testing

Run the tests with:

```bash
php artisan test
```

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss your ideas.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).