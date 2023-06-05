<?php

function render($route)
{
    include_once __DIR__ . '/../' . $route;
    die();
}

function redirect($route)
{
    header('Location:' . $route);
    die();
}
