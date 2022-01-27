<?php

namespace Fakhry\Informatika\Karyawan\TernateAwesome\App;

class View
{
    public static function render(string $view, $posts = null)
    {
        require __DIR__ . '/../View/header.php';
        require __DIR__ . '/../View/' . $view . '.php';
        require __DIR__ . '/../View/footer.php';
    }

    public static function redirect(string $url)
    {
        header("Location: $url");
    }
}