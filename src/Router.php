<?php

require_once 'controllers/WizardController.php';

class Router
{
    public static $controllers = [
        'wizard' => WizardController::class,
    ];

    public static function process()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['controller']) && isset($_GET['action'])) {
            if (isset(self::$controllers[$_GET['controller']]) && class_exists(self::$controllers[$_GET['controller']])) {
                $instance = new self::$controllers[$_GET['controller']]();

                if (method_exists($instance, $_GET['action'])) {
                    $instance->{$_GET['action']}();
                }
            }
        }
    }
}
