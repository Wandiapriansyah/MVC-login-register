<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Wandi\MvcLoginRegister\App\Router;
use Wandi\MvcLoginRegister\Controller\HomeController;

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/login', HomeController::class, 'login');
Router::add('GET', '/signup', HomeController::class, 'signup');
Router::add('GET', '/tambah', HomeController::class, 'tambahBarang');
Router::add('GET', '/admin', HomeController::class, 'admin');
Router::add('GET', '/d', HomeController::class, 'detail');
Router::add('GET', '/css', HomeController::class, 'css');

Router::run();


?>