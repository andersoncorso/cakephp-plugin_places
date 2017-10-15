<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'Places',
    ['path' => '/places'],
    function (RouteBuilder $routes) {

    	$routes->setExtensions(['json']); // Allow json extension
        $routes->fallbacks(DashedRoute::class);
    }
);
