<?php

include_once __DIR__ . '/../library/import.php';


//informações corrente do servidor
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

//importação das bibliotecas
importLibrary('http');
importLibrary('auth');
importLibrary('direction');
importLibrary('csrf');


//importação dos controladores
importController('authController');


switch ($uri) {
    case '/':
        isGet($method);
        render('/welcome');
        break;

    case '/dash':
        isGet($method);
        // authenticate();
        Auth::authenticate();//verificando se o usário está autenticado
        render('/content/dash');
        break;


    // Autenticação
    case '/login':
        isGet($method); 
        login();
        break;
    case '/logar':
        isPost($method);
        logar();
        break;

    case '/register':
        isGet($method);
        register();
        break;
    case '/registrar':
        isPost($method);
        registrar();
        break;
    // ------------------------------- 

    case '/logout':
        isGet($method);
        logout();
        break;

    default:
        render('/errors/undefined');
        break;
}
