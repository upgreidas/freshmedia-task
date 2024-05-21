<?php

class ErrorBag
{
    public static function set(string $attribute, string $message)
    {
        if (!isset($_SESSION['errors'])) {
            $_SESSION['errors'] = [];
        }

        $_SESSION['errors'][$attribute] = $message;
    }

    public static function has(string $attribute)
    {
        return isset($_SESSION['errors'][$attribute]);
    }

    public static function get(string $attribute)
    {
        return $_SESSION['errors'][$attribute] ?? '';
    }

    public static function flush()
    {
        return $_SESSION['errors'] = [];
    }
}
