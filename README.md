Laravel PHPMongo Adapter
========================

Laravel Adapter for [PHPMongo ORM](https://github.com/sokil/php-mongo)

[![Total Downloads](http://img.shields.io/packagist/dt/phpmongokit/laravel-mongo-odm.svg)](https://packagist.org/packages/phpmongokit/laravel-mongo-odm)

### Installation

Add composer dependency:
```
composer require phpmongokit/laravel-mongo-pdm
```

Register provider in `./config/app.php`:

```php
<?php

return [
    'providers' => [
        PHPMongoKit\ODM\Adapter\Laravel\MongoDbServiceProvider::class,
    ],
];
```

Add configuration of your connections to `./config/mongodb.php`:
```php
<?php

return [
    'connections' => [
        'connect1' => [
            'dsn' => 'mongodb://mongodb',
        ],
    ],
];
```

### Usage

Get connection pool from service container:

```php
<?php

use Psr\Container\ContainerInterface;
use Sokil\Mongo\ClientPool;

Route::get('/', function (ContainerInterface $container) {
    /** @var ClientPool $clientPool */
    $clientPool = $container->get(ClientPool::class);
    $connection = $clientPool->get('connect1'); // Instance of Sokil\Mongo\Client
});
```
