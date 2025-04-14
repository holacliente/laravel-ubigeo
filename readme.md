# Laravel Ubigeo

Laravel Ubigeo is a package that provides a simple way to manage and use Peruvian ubigeo codes in your Laravel application.

## Installation

Install the package via Composer:

```bash
composer require holacliente/laravel-ubigeo
```

## Usage

### Retrieve Ubigeo Information

You can use the provided models or helper functions to retrieve ubigeo data:

```php
use App\Models\Ubigeo;

// Get all departments
$departments = Ubigeo::departamentos();

// Get provinces by department
$provinces = Ubigeo::provincias();

// Get districts by province
$districts = Ubigeo::distritos();
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