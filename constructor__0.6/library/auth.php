<?php
include_once __DIR__ . '/direction.php';

function authenticate()
{ //verifica se esta logado
    if (!(isset($_SESSION['user']))) {
        render('/views/errors/notauthenticate.php');
        die();
    }
}


function authUser()
{ //puxa todos os dados do usuário logado
    include_once __DIR__ . '/../database/connection.php';
    $username = $_SESSION['user'];

    $result = $db->query("SELECT * FROM user WHERE firstname LIKE '%" . $username . "%'");
    $search=$result->fetchArray();
    // return $search;
}


function authName()
{ //puxa o nome do usuário logado
}


function authEmail()
{ //puxa o email do usuário logado
}

function authId()
{ //puxa o id do usuário logado
}
