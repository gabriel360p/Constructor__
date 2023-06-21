<?php
class Direction{
    
    public static function render($route)
    {
        include_once __DIR__ . '/../views' . $route.'.php';
        die();
    }
    
    public static function redirect($route)
    {
        header('Location:' . $route);
        die();
    }

}
