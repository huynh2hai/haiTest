<?php

namespace haiTest\Providers;

use IO\Helper\TemplateContainer;
use IO\Helper\ResourceContainer;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Plugin\ServiceProvider;
use Plenty\Plugin\Templates\Twig;


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

//    public function boot(Twig $twig, Dispatcher $eventDispatcher)
//    {
//        // This event listener adds the content from our Twig template
//        // to the 'IO.tpl.body.end' container. This container is rendered
//        // just before the closing </body> tag in the storefront.
////        $eventDispatcher->listen('IO.tpl.body.end', function (Twig $twig) {
//        $eventDispatcher->listen('IO.Resources.Import', function (Twig $twig) {
//            return $twig->render('haiTest::bodyEndScript');
//        });
//    }

    /**
     * Boot a template for the basket that will be displayed in the template plugin instead of the original basket.
     */
    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container)
        {
            // The script is imported in the Footer.twig of plentyShop LTS
            $container->addScriptTemplate('haiTest::bodyEndScript');
        }, 10);
    }
}
