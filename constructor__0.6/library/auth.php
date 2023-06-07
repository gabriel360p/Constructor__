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
    include __DIR__ . '/../database/connection.php';
    $useremail = $_SESSION['user'];

    $result = $db->query("SELECT firstname,lastname,email FROM user WHERE email LIKE '%" . $useremail . "%'");
    $search=$result->fetchArray();

    return $search;
}


function authName()
{ //puxa o nome do usuário logado
    include __DIR__ . '/../database/connection.php';
    $useremail = $_SESSION['user'];

    $result = $db->query("SELECT firstname,lastname FROM user WHERE email LIKE '%" . $useremail . "%'");
    $search=$result->fetchArray();

    return $search;
}


function authEmail()
{ //puxa o email do usuário logado
    include __DIR__ . '/../database/connection.php';
    $useremail = $_SESSION['user'];

    $result = $db->query("SELECT email FROM user WHERE email LIKE '%" . $useremail . "%'");
    $search=$result->fetchArray();

    return $search;
}

function authId()
{ //puxa o id do usuário logado
    include __DIR__ . '/../database/connection.php';
    $useremail = $_SESSION['user'];

    $result = $db->query("SELECT id FROM user WHERE email LIKE '%" . $useremail . "%'");
    $search=$result->fetchArray();

    return $search['id'];
}

function authPassword()
{ //puxa o id do usuário logado
    include __DIR__ . '/../database/connection.php';
    $useremail = $_SESSION['user'];

    $result = $db->query("SELECT password FROM user WHERE email LIKE '%" . $useremail . "%'");
    $search=$result->fetchArray();

    return $search['password'];
}


function confirmedPassword(){

}