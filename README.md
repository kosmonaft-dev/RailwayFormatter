# Monolog Railway.app Formatter

This is a custom formatter for Monolog that formats log messages in a way that is compatible with the
[Railway.app](https://railway.app) log format.

## Requirements

- PHP 8.1 or higher

## Installation

```bash
composer require stein/monolog-railway-formatter
```

## Usage

```php
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Stein\Monolog\Formatter\RailwayFormatter;

$logger = new Logger('MyLogger');
$handler = new StreamHandler('php://stdout', Level::Debug);
$handler->setFormatter(new RailwayFormatter());
$logger->pushHandler($handler);
```

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.