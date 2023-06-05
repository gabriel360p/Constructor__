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
