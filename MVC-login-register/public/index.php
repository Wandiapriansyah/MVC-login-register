<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Wandi\MvcLoginRegister\App\Router;
use Wandi\MvcLoginRegister\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', HomeController::class, 'login');
Router::add('GET', '/signup', HomeController::class, 'signup');

Router::run();


?>