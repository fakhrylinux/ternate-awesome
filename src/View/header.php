<?php

use Ary\TernateAwesome\Config\Config;
use Ary\TernateAwesome\Helper\Helper;

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= Helper::baseUrl() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= Helper::baseUrl() ?>/assets/css/style.css">

    <title>Hello, world!</title>
</head>
<body class="bg-secondary">

<div class="container py-4 bg-light">

    <div>
        <ul class="nav justify-content-end">
            <a class="nav-link" href="#">Login</a>
            </li>
        </ul>
    </div>

    <div class="p-5 mb-4 bg-light rounded-3" id="jumbotron">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Ternate Awesome</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in
                previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to
                your liking.</p>

        </div>
    </div>