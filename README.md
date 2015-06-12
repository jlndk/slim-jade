#Jade for Slim framework
**THIS IS IN EARLY ALPHA. DO NOT USE IN PRODUCTION YET!!!!!!**

This is a helper for the Slim framework, that allows the use of jade-php, together with Slim

## Install

Via [Composer](https://getcomposer.org/)

```bash
$ composer require jlndk/slim-jade
```

Requires Slim Framework 3 and PHP 5.4.0 or newer.

### How to use
    
```php
<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'view' => new \Jlndk\SlimJade\Jade()
));
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Jlndk](https://github.com/jlndk)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
