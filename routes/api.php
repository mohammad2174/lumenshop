<?php


$router->group(['prefix' => 'v1', 'namespace' => 'v1'], function () use ($router) {
    $router->get('products', 'ProductController@index');
    $router->get('reviews', 'ReviewController@index');
    $router->post('review', 'ReviewController@review');
    $router->post('login', 'UserController@login');
    $router->post('register', 'UserController@register');
    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->get('/user', function () {
            return auth()->user();
        });
    });
});
