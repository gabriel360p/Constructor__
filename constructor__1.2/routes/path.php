<?php

//importação das bibliotecas
include_once __DIR__ . '/../library/direction.php';
include_once __DIR__ . '/../library/http.php';
include_once __DIR__ . '/../library/auth.php';

//importação dos controladores
include_once __DIR__ . '/../controllers/userController.php';
include_once __DIR__ . '/../controllers/authController.php';

//informações corrente do servidor
$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        isGet($method);
        render('/welcome.php');
        break;


    case '/profile':
        isGet($method);
        authenticate(); //verificando se o usário está autenticado
        profile();
        break;

    case '/user/update':
        isPost($method);
        authenticate(); //verificando se o usário está autenticado
        update();
        break;


    case '/dash':
        isGet($method);
        authenticate(); //verifican0do se o usário está autenticado
        render('/content/dash.php');
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
        render('/errors/undefined.php');
        break;
}
