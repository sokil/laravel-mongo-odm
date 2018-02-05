<?php

namespace PHPMongoKit\ODM\Adapter\Laravel;

use Illuminate\Support\ServiceProvider;
use Sokil\Mongo\ClientPool;

class MongoDbServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClientPool::class, function($app) {
            return new ClientPool(config('mongodb.connections'));
        });
    }
}