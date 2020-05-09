# A PHP package to work with percentages

A clean interface to calculate percentages in PHP: changes between values, percentage increases, partial values, extensions, ...

Think of it as a _very_ lightweight math library for the basic stuff. Aimed to make your code more readable and easier to understand.

## Installation

You can install the package via composer:

```bash
composer require mattiasgeniar/php-percentages
```

## Usage

```php
use Mattiasgeniar\Percentage\Percentage;

// Percentage increase/decrease from $a to $b
Percentage::changeBetween(100, 120);    // 20%

// How much is $a in relation to $b?
Percentage::percentageOf(120, 100);     // 120%
Percentage::percentageOf(50, 100);      // 50%

// What is $a percentage of $b?
Percentage::fromNumber(20, 200);        // 40
Percentage::fromNumber(50, 200);        // 100
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

If you discover any security related issues, please email m@ttias.be instead of using the issue tracker.

## Credits

- [Mattias Geniar](https://github.com/mattiasgeniar)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
