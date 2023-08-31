# Common assets for LWS projects

## Prerequisites

- PHP 8.1 or higher
- Laravel 10

## Installation

Install the package via Composer:

```bash
composer require nebstersk/eset
```

## Usage

Publish common assets / files manually:

```bash
php artisan eset:publish
```

Add the same command to composer.json for automatic publish with every Composer update:

```json
"scripts": {
    "post-update-cmd": [
      "@php artisan eset:publish"
    ],
}
```

## Credits

- [Lukáš Neuschl](https://github.com/NebsterSK)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
