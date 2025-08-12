<?php

namespace haiTest\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class haiTestController extends Controller
{
    /**
     * @param Twig $twig
     * @return string
     */
    public function getHelloWorldPage(Twig $twig):string
    {
        return $twig->render('haiTest::Index');
    }
}