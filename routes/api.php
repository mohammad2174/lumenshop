<?php


$router->group(['prefix' => 'v1', 'namespace' => 'v1'], function () use ($router) {
    $router->get('products', 'ProductController@index');
    $router->get('reviews', 'ReviewController@index');
    $router->post('review', 'ReviewController@review');
    $router->get('checkouts', 'CheckoutController@index');
    $router->post('checkout', 'CheckoutController@checkout');
    $router->get('deletecheckout', 'CheckoutController@delete');
    $router->get('quantity', 'CheckoutController@quantity');
    $router->get('orders', 'OrderController@index');
    $router->post('order', 'OrderController@order');
    $router->post('login', 'UserController@login');
    $router->post('update', 'UserController@update');
    $router->post('register', 'UserController@register');
    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->get('/user', function () {
            return auth()->user();
        });
    });
});
