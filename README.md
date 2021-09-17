# Unified API for sending SMS using Laravel

## Installation

You can install the package via composer:

```bash
composer require berzel/laravel-sms
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Berzel\Sms\SmsServiceProvider" --tag="laravel-sms-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Berzel\Sms\SmsServiceProvider" --tag="laravel-sms-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$laravel-sms = new Berzel\Sms();
echo $laravel-sms->echoPhrase('Hello, Berzel!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Berzel Best](https://github.com/berzel)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
