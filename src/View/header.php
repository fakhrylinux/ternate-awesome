<?php

use Fakhry\Informatika\Karyawan\TernateAwesome\Helper\Helper;

session_start();

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

    <title>Ternate Awesome Image Gallery</title>
</head>
<body class="bg-secondary">

<div class="container py-4 bg-light">

    <div class="d-flex justify-content-between navbar navbar-expand-lg navbar-brand bg-dark">
        <ul class="nav d-flex justify-content-start">
            <li><a href="/" class="nav-link">Home</a></li>
        </ul>
        <ul class="nav d-flex justify-content-end">

            <?php if ($_SESSION['login'] == true) { ?>
                <li>
                    <a class="nav-link" href="add">Add Post</a>
                </li>
                <li>
                    <a class="nav-link" href="logout">Logout</a>
                </li>
            <?php } else { ?>
                <li>
                    <a class="nav-link" href="login">Login</a>
                </li>
            <?php } ?>

        </ul>
    </div>

    <div class="p-5 mb-4 bg-light rounded-3" id="jumbotron">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Ternate Awesome</h1>
            <p class="col-md-8 fs-4">Ternate is a city in the Indonesian province of North Maluku and an island in the
                Maluku Islands. It was de facto provincial capital of North Maluku before Sofifi on the nearby coast of
                Halmahera became the capital in 2010.</p>

        </div>
    </div>