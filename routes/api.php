<?php
$router->setNamespace('App\Controllers');

#Entry point route
$router->get('/', "PageController@viewHome");

#Connection routes
$router->get('/login', "PageController@viewLogin");

#Register routes
$router->get('/register', "PageController@viewRegister");
$router->post('/register', "AuthController@register");

#Login routes
$router->post('/login', "AuthController@login");

#logout routes
$router->get('/logout', "AuthController@logout");