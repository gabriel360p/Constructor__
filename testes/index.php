<?php


global $uri,$path,$id;
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        include __DIR__.'/formulario.php';
        break;
    

    case '/te':
        include __DIR__.'/testes.php';
        break;


    default:
        echo "Não achado";
        break;
}

