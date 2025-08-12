<?php

namespace haiTest\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class haiTestServiceProvider
 * @package haiTest\Providers
 */
class haiTestServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(haiTestRouteServiceProvider::class);
    }
}