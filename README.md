Laravel PHPMongo Adapter
========================

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
    /** @var \Sokil\Mongo\ClientPool $clientPool */
    $clientPool = $container->get(ClientPool::class);
    $database = $clientPool->get('connect1');
});
```