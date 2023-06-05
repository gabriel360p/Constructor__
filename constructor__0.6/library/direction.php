<?php

function render($route)
{
    include_once __DIR__ . '/../' . $route;
}

function redirect($route)
{
    header('Location:' . $route);
}
