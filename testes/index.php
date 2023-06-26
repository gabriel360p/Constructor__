<?php
$uri = $_SERVER['REQUEST_URI'];
include __DIR__.'/request.php';
$request = new Request( $_REQUEST);

switch ($uri) {
    case '/':
        include __DIR__.'/formulario.php';
        break;
    

    case '/teste':
        // var_dump($_REQUEST['email']);
        $email = $request->key('email');
        // var_dump();
        echo $email;
        break;


    default:
        # code...
        break;
}