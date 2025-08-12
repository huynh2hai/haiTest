<?php

namespace haiTest\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class haiTestRouteServiceProvider
 * @package haiTest\Providers
 */
class haiTestRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','haiTest\Controllers\haiTestController@getHelloWorldPage');
    }
}