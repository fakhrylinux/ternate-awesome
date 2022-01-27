<?php

use Fakhry\Informatika\Karyawan\TernateAwesome\App\Router;
use Fakhry\Informatika\Karyawan\TernateAwesome\Controller\HomeController;
use Fakhry\Informatika\Karyawan\TernateAwesome\Controller\UserController;

require_once __DIR__ . '/../vendor/autoload.php';

Router::add('GET', '/edit/([0-9a-zA-Z]*)', HomeController::class, 'edit');

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/add', HomeController::class, 'add');
Router::add('POST', '/postAdd', HomeController::class, 'postAdd');
Router::add('POST', '/delete', HomeController::class, 'delete');
Router::add('POST', '/postEdit', HomeController::class, 'postEdit');
Router::add('GET', '/login', UserController::class, 'login');
Router::add('POST', '/postLogin', UserController::class, 'postLogin');
Router::add('GET', '/logout', UserController::class, 'logout');

Router::run();