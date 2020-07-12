<?php
namespace Cramirez\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{

    public function boot()
    {
       $this->loadRoutesFrom(__DIR__.'/routes/web.php');
       $this->loadViewsFrom(__DIR__.'/views','contactpackage');
       $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }

    public function require()
    {
        
    }
}