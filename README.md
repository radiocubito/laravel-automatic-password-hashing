# Automatic user password hashing trait.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/radiocubito/laravel-automatic-password-hashing.svg?style=flat-square)](https://packagist.org/packages/radiocubito/laravel-automatic-password-hashing)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/radiocubito/laravel-automatic-password-hashing/Tests?label=tests)](https://github.com/radiocubito/laravel-automatic-password-hashing/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/radiocubito/laravel-automatic-password-hashing.svg?style=flat-square)](https://packagist.org/packages/radiocubito/laravel-automatic-password-hashing)


This package provides a trait that will automatically hash the password when saving the User model.

```php
$user = User::create([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'password' => 'password'
]);

echo $user->password; // ouputs "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi"
```

## Installation

You can install the package via composer:

```bash
composer require radiocubito/laravel-automatic-password-hashing
```

## Usage

Your User model should use the Radiocubito\AutomaticPasswordHashing\HashPassword trait.

Here's an example of how to implement the trait:

``` php
namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Radiocubito\AutomaticPasswordHashing\HashPassword;

class User extends Authenticatable
{
    use Notifiable, HashPassword;
}
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email oliver@radiocubito.com instead of using the issue tracker.

## Credits

- [Oliver Jiménez Servín](https://github.com/oliverds)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
