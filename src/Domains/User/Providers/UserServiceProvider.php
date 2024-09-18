<?php

namespace User\Providers;

use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    private string $serviceBasePath;

    public function __construct($app)
    {
        parent::__construct($app);
        $this->serviceBasePath = dirname(__DIR__);
    }
    public function boot(): void
    {
        $this->loadMigrationsFrom($this->serviceBasePath . '/Migrations/');
        $this->loadRoutesFrom($this->serviceBasePath . '/Routes/web.php');
        $this->loadViewsFrom($this->serviceBasePath . '/Views', 'user');
    }
}
