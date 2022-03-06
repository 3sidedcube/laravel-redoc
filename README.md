<p align="center">
    <a href="https://3sidedcube.com" target="_blank">
        <img src="https://3sidedcube.com/app/themes/tsc-2018/img/footer/logo-black.png" width="400" alt="3 Sided Cube">
    </a>
</p>

# Laravel Redoc

[![Latest Version on Packagist](https://img.shields.io/packagist/v/3sidedcube/laravel-redoc.svg?style=flat-square)](https://packagist.org/packages/3sidedcube/laravel-redoc)
[![Total Downloads](https://img.shields.io/packagist/dt/3sidedcube/laravel-redoc.svg?style=flat-square)](https://packagist.org/packages/3sidedcube/laravel-redoc)
![GitHub Actions](https://github.com/3sidedcube/laravel-redoc/actions/workflows/run-tests.yml/badge.svg)

This package provides an easy way for rendering API documentation using OpenAPI and Redoc.

## Installation

You can install the package via composer:

```bash
composer require 3sidedcube/laravel-redoc
```

## Usage

### Viewing the documentation

By default, the documentation is served at `/docs/api` and will load the `openapi.json` file from the `openapi` folder
at the root of the project.

You can change the path used to serve the documentation by setting the `redoc.path` config option.

If you would like to change the directory where your `openapi.json` file is located, you can update `redoc.directory`
config option. 

### Documentation versions

Laravel Redoc supports rendering multiple versions of documentation. If you would like to serve a different version of
the documentation, you can include `{version}` in the `redoc.path` config option e.g. `docs/{version}/api`. This will
then load the `{version}.json` file from the configured directory.

### Variables

If you would like to replace a "variable" in the documentation, you can use the `redoc.variables` config option.

For example, if you would like to dynamically set the server url to the given environment, you could configure the
following variable:

```php
'variables' => [
    'server_url' => env('APP_URL'),
],
```

Now, when you use `:server_url` in the OpenAPI definition, it will be replaced with the value of the `APP_URL`.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

-   [Ben Sherred](https://github.com/benshered)
-   [All Contributors](../../contributors)

## License

Laravel Redoc is open-sourced software licensed under the [MIT license](LICENSE.md).
