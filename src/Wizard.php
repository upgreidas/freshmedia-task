<?php

class Wizard
{
    public static function set(string $key, $value)
    {
        if (!isset($_SESSION['wizard'])) {
            $_SESSION['wizard'] = [];
        }

        $_SESSION['wizard'][$key] = $value;
    }

    public static function get(string $key, $defaultValue = '')
    {
        return $_SESSION['wizard'][$key] ?? $defaultValue;
    }

    public static function reset()
    {
        return $_SESSION['wizard'] = [];
    }
}
