<?php

use Ary\TernateAwesome\App\Router;
use Ary\TernateAwesome\Controller\HomeController;

require_once  __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/edit/([0-9a-zA-Z]*)', HomeController::class, 'edit');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/add', HomeController::class, 'add');
Router::add('POST', '/postAdd', HomeController::class, 'postAdd');
Router::add('POST', '/delete', HomeController::class, 'delete');
Router::add('POST', '/postEdit', HomeController::class, 'postEdit');

Router::run();