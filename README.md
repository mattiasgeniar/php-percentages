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
<?php
use Mattiasgeniar\Percentage\Percentage;

// What's the percentage increase from 100 to 120?
Percentage::differenceBetween(100, 120);            // 20%

// What's the absolute percentage change from 100 to 80?
// (uses the abs() function)
Percentage::absoluteDifferenceBetween(100, 80);     // 20%, not -20%

// How much is 120 compared to 100?
Percentage::calculate(120, 100);                    // 120%

// How much is 50 compared to 100?
Percentage::calculate(50, 100);                     // 50%

// What is 20% of 200?
Percentage::of(20, 200);                            // 40

// What is the 140% extension from 3 to 2?
Percentage::extension(140, 3, 2);                   // 1.6

// What is the 140% extension from 1 to 2?
Percentage::extension(140, 1, 2);                   // 2.4
```

## Helper functions

The above expressions can also be used through a variety of helper functions:

- `percentage()`
- `percentage_between()`
- `percentage_abs_between()`
- `percentage_of()`
- `percentage_extension()`

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
