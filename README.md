# A package for FS22

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sitesurfer/farm-sim-manager.svg?style=flat-square)](https://packagist.org/packages/sitesurfer/farm-sim-manager)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sitesurfer/farm-sim-manager/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sitesurfer/farm-sim-manager/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sitesurfer/farm-sim-manager/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sitesurfer/farm-sim-manager/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sitesurfer/farm-sim-manager.svg?style=flat-square)](https://packagist.org/packages/sitesurfer/farm-sim-manager)
<!--delete-->
---
## Installation

You can install the package via composer:

```bash
composer require sitesurfer/farm-sim-manager
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="farm-sim-manager-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="farm-sim-manager-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="farm-sim-manager-views"
```

## Usage

```php
$farmSimManager = new Sitesurfer\FarmSimManager();
echo $farmSimManager->echoPhrase('Hello, Sitesurfer!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Owen Lees](https://github.com/sitesurfer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
