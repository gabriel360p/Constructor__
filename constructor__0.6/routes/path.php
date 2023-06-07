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


    case '/profile':
        isGet($method);
        authenticate(); //verificando se o usário está autenticado
        include_once __DIR__ . '/../controllers/userController.php';
        profile();
        break;

    case '/user/update':
        isPost($method);
        authenticate(); //verificando se o usário está autenticado
        include_once __DIR__ . '/../controllers/userController.php';
        update();
        break;


    case '/dash':
        isGet($method);
        authenticate(); //verificando se o usário está autenticado
        include_once __DIR__ . '/../controllers/welcomeController.php';
        dash();
        break;

    case '/login':
        isGet($method);
        include_once __DIR__ . '/../controllers/authController.php';
        login();
        break;
    case '/logar':
        isPost($method);
        include_once __DIR__ . '/../controllers/authController.php';
        logar();
        break;

    case '/register':
        isGet($method);
        include_once __DIR__ . '/../controllers/authController.php';
        register();
        break;
    case '/registrar':
        isPost($method);
        include_once __DIR__ . '/../controllers/authController.php';
        registrar();
        break;

    case '/logout':
        isGet($method);
        authenticate();
        include_once __DIR__ . '/../controllers/authController.php';
        logout();
        break;

    default:
        render('/views/errors/undefined.php');
        break;
}
