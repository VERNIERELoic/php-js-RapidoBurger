<?php
$router->setNamespace('App\Controllers');
$router->get('/', "AuthController@viewRegister");