# Laravel Attributed Enums to json

The idea for this package is to streamline the process of sharing enums values between backend and frontend.

If you use Laravel as a backend for a frontend framework like Nuxt or Next, and they both live in the same project, you can utilize it to generate a json file from your enums.

## Installation

You can install the package via composer:

```bash
composer require saas-laravel/laravel-enums-to-json
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-enums-to-json"
```

This is the contents of the published config file:

```php
return [
    // The disk, defined in filesystem.php, where json files will be stored
    'disk' => 'public',

    // The folder on that disk where json will be generated
    'path' => '/shared',

    'enum_locations' => [
        app_path(),
    ],
];

```

## Usage
In order to use the package, you need to add `SaasLaravel\LaravelEnumsToJson\Attributes\EnumToJson` attribute to your enum

Example usage:
```php
<?php

namespace App\Enums;

use SaasLaravel\LaravelEnumsToJson\Attributes\EnumToJson; 

#[EnumToJson] //add attribute
enum CastType: int
{
    case Boolean = 0;
    case Integer = 1;
    case String = 2;

    // (optional) A way to customize the generated file name
    public static function jsonFileName(): string
    {
        return 'cast';
    }
}
```

Then you'd run a command to generate the json files.

```shell
php artisan enum-to-json:generate
```

### Customizing the name

By default, it generates a file named as a normalized version of the enum name - that'd be `cast_type.json` if the example above didn't contain the `jsonFileName` method. However, because it is present, it'd generate `cast.json` instead.

## Testing

```bash
composer test
```

## Credits

- [przemyslaw-przylucki](https://github.com/przemyslaw-przylucki)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
