Laravel PHPMongo Adapter
========================

Laravel Adapter for [PHPMongo ORM](https://github.com/sokil/php-mongo)

[![Build Status](https://travis-ci.org/PHPMongoKit/laravel-mongo-odm.png?branch=master&2)](https://travis-ci.org/PHPMongoKit/laravel-mongo-odm)
[![Total Downloads](http://img.shields.io/packagist/dt/phpmongokit/laravel-mongo-odm.svg)](https://packagist.org/packages/phpmongokit/laravel-mongo-odm)
[![Daily Downloads](https://poser.pugx.org/phpmongokit/yii2-mongo-odm/d/daily)](https://packagist.org/packages/phpmongokit/laravel-mongo-odm/stats)

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
        Illuminate\Support\ServiceProvider\MongoDbServiceProvider::class,
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
    $database = $clientPool->get('connect1');
});
```
