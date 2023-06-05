<?php
include_once __DIR__ . '/../library/direction.php';
include_once __DIR__ . '/../library/http.php';
include_once __DIR__ . '/../library/auth.php';

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        isGet($method);
        include_once __DIR__ . '/../controllers/welcomeController.php';
        welcome();
        break;


    case '/login':
        isGet($method);
        include_once __DIR__ . '/../controllers/authController.php';
        login();
        break;
    case '/logar':
        isPost($method);
        include_once __DIR__ . '/../controllers/authController.php';
        // logar();
        break;

    case '/register':
        isGet($method);
        include_once __DIR__ . '/../controllers/authController.php';
        register();
        break;
    case '/registrar':
        isPost($method);
        include_once __DIR__ . '/../controllers/authController.php';
        // registrar();
        break;


    default:
        render('/views/errors/undefined.php');
        break;
}
