<?php

namespace Ary\TernateAwesome\Helper;

class Helper
{
    public static function baseUrl(): string
    {
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            isset($_SERVER['SERVER_PORT']) ? ":" . $_SERVER['SERVER_PORT'] : ''
        );
    }
}