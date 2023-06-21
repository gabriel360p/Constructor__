<?php
function authenticate()
{ //verifica se esta logado
    if (!(isset($_SESSION['user']))) {
        render('/errors/notauthenticate.php');
        die();
    }
}


function authUser()
{ //puxa todos os dados do usuário logado
    // $db=connection();

    $result = find("SELECT firstname,lastname,email FROM user WHERE id = '%" . $_SESSION['user'] . "%'");
    // $search=$result->fetchArray();

    return $search;
}


function authName()
{ //puxa o nome do usuário logado
    // $db=connection();

    $search = find("SELECT firstname,lastname FROM user WHERE id = " .  $_SESSION['user']. " ");
    // $search=$result->fetchArray();

    return $search;
}


function authEmail()
{ //puxa o email do usuário logado
    // $db=connection();

    $search=find("SELECT email FROM user WHERE id = '%" .$_SESSION['user']. "%'");
    // $search=$result->fetchArray();

    return $search['email'];
}

function authId()
{ //puxa o id do usuário logado
    // $db=connection();

    $search = find("SELECT id FROM user WHERE email = '%" . $_SESSION['user'] . "%'");
    // $search=$result->fetchArray();

    return $search['id'];
}

function authPassword()
{ //puxa o id do usuário logado
    // $db=connection();

    $search =find("SELECT password FROM user WHERE id = '%" .  $_SESSION['user'] . "%'");
    // $search=$result->fetchArray();

    return $search['password'];
}


function confirmedPassword($password)
{//este método é válido apenas para verificar a senha do user logado

    // $db=connection();

    $search = find("SELECT password FROM user WHERE id = '%" . $_SESSION['user'] . "%'");
    // $search=$result->fetchArray();

    if($password!=$search['password']){
        echo "falha  na confirmação de senha";
    }
}