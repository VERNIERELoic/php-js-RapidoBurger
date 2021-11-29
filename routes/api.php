<?php
$router->setNamespace('App\Controllers');

#Entry point route
$router->get('/', "PageController@viewHome");

#Register routes
$router->get('/register', "PageController@viewRegister");

$router->post('/register', "AuthController@register");

#Login routes
$router->get('/login', "PageController@viewLogin");

$router->post('/login', "AuthController@login");

#logout routes
$router->get('/logout', "AuthController@logout");

#oders routes
$router->get('/order', "PageController@viewOrder");
$router->get('/order', "OrderController@viewHome");

$router->post('/order', "OrderController@order");

#forgot routes 
$router->get('/forgot', "PageController@viewForgot");
$router->post('/resetpsswd', "AuthController@resetpsswd");

#modify routes
$router->get('/modify', "PageController@viewModify");

#routes orders listes 
$router->get('/orderlist', "PageController@viewOrderlist");

