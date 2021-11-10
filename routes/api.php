<?php
$router->setNamespace('App\Controllers');

#Entry point route
$router->get('/', "PageController@viewHome");

#Connection routes
$router->get('/connexion', "PageController@viewConnexion");

#Register routes
$router->get('/register', "PageController@viewRegister");
$router->post('/register', "AuthController@");