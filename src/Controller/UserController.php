<?php

namespace Fakhry\Informatika\Karyawan\TernateAwesome\Controller;

use Fakhry\Informatika\Karyawan\TernateAwesome\App\View;

class UserController
{
    public function login()
    {
        View::render('login');
    }

    public function postLogin()
    {
        session_start();

        if ($_SESSION['login'] == true) {
            View::redirect('/');
            exit();
        }

        $error = "";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if ($_POST['username'] == "fakhryitts" && $_POST['password'] == "ittsfakhry") {
                $_SESSION['login'] = true;
                $_SESSION['username'] = 'fakhryitts';
                View::redirect('/');
                exit();
            } else {
                $error = "Login Failed";
                View::redirect('/login');
            }
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();

        View::redirect('/');
        exit();
    }
}