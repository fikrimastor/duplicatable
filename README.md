# 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/fikrimastor/duplicatable.svg?style=flat-square)](https://packagist.org/packages/fikrimastor/duplicatable)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/fikrimastor/duplicatable/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/fikrimastor/duplicatable/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/fikrimastor/duplicatable/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/fikrimastor/duplicatable/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/fikrimastor/duplicatable.svg?style=flat-square)](https://packagist.org/packages/fikrimastor/duplicatable)
[![Sponsor](https://img.shields.io/static/v1?label=Sponsor&message=%E2%9D%A4&logo=GitHub&color=%23fe8e86)](https://github.com/sponsors/fikrimastor)

A trait for Laravel Eloquent models that lets you to duplicate models and it's relationships.

## Installation

You can install the package via composer:

```bash
composer require fikrimastor/duplicatable
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="duplicatable-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$duplicator = new FikriMastor\Duplicator();
echo $duplicator->echoPhrase('Hello, FikriMastor!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any
contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also
simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Fikri Mastor](https://github.com/fikrimastor)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
