
[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# or-else

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/or-else.svg?style=flat-square)](https://packagist.org/packages/spatie/or-else)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/spatie/or-else/master.svg?style=flat-square)](https://travis-ci.org/spatie/or-else)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/or-else.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/or-else)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/or-else.svg?style=flat-square)](https://packagist.org/packages/spatie/or-else)

This package adds an `orElse`-trait to your project.

Spatie is a webdesign agency in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/or-else.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/or-else)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Install

You can install the package via composer:
``` bash
$ composer require spatie/or-else
```

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment you are required to send us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Kruikstraat 22, 2018 Antwerp, Belgium.

The best postcards will get published on the open source page on our website.

## Usage

When implementing the `OrElse`-trait to a class, all methods of the class will have a `OrElse`-variant.
That variant has an extra parameter that will be returned if the original function returns `null` or `false`.

Consider this simple class that implements the `orElse`-trait.

```php
use Spatie\OrElse\OrElse;

class TestClass {

    use OrElse;

    /**
     * This function will return the given argument.
     *
     * @return string
     */
    public function willReturn($value)
    {
       return $value;
    }
  
}
```

The trait dynamically adds a `willReturnOrElse`-method. 

```php
$testClass = new TestClass;
$testClass->willReturn('value'); // returns 'value';
$testClass->willReturnOrElse('value', 'otherValue'); // returns 'value';
$testClass->willReturnOrElse(null, 'otherValue'); // returns 'otherValue';
$testClass->willReturnOrElse(false, 'otherValue'); // returns 'otherValue';
$testClass->willReturnOrElse(false, function() { return 'closureValue'; }); // returns 'closureValue';
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://murze.be)
- [Edd Mann](https://twitter.com/edd_mann)
- [All Contributors](../../contributors)

## About Spatie
Spatie is a webdesign agency in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
