<?php


$router->group(['prefix' => 'v1', 'namespace' => 'v1'], function () use ($router) {
    $router->get('products', 'ProductController@index');
    $router->get('reviews', 'ReviewController@index');
});
