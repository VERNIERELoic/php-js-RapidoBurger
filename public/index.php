<?php
#Chargement automatique des classes avec l'autoloader.php
session_start();

use App\Router\Router;

require_once '../autoloader.php';
Autoloader::register();

$router = new Router();
require_once '../routes/api.php';

$router->run();
