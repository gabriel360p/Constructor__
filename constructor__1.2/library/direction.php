<?php

function render($route)
{
    include_once __DIR__ . '/../views' . $route;
    die();
}

function redirect($route)
{
    header('Location:' . $route);
    die();
}
