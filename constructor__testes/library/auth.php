<?php
function authenticate()
{ //verifica se esta logado
    if (!(isset($_SESSION['user']))) {
        render('/errors/notauthenticate');
        die();
    }
}


function authUser()
{ //puxa todos os dados do usuário logado

    $user = new User(connection());
    $data =$user->find("SELECT firstname,lastname,email FROM user WHERE id = '%" . $_SESSION['user'] . "%'");

    return $data;
}


function authName()
{ //puxa o nome do usuário logado

    $user = new User(connection());


    $data =$user->find("SELECT firstname,lastname FROM user WHERE id = " .  $_SESSION['user']. " ");
    // $search=$result->fetchArray();

    return $data['firstname'];
}


function authEmail()
{ //puxa o email do usuário logado
    $user = new User(connection());


    $data =$user->find("SELECT email FROM user WHERE id = '%" .$_SESSION['user']. "%'");
    // $search=$result->fetchArray();

    return $data['email'];
}

function authId()
{ //puxa o id do usuário logado
    $user = new User(connection());


    $data =$user->find("SELECT id FROM user WHERE email = '%" . $_SESSION['user'] . "%'");
    // $search=$result->fetchArray();

    return $data['id'];
}

function authPassword()
{ //puxa o id do usuário logado
    // $db=connection();

    // $search =find("SELECT password FROM user WHERE id = '%" .  $_SESSION['user'] . "%'");
    // // $search=$result->fetchArray();

    // return $search['password'];
}


function confirmedPassword($password)
{//este método é válido apenas para verificar a senha do user logado

    // $db=connection();

    // $search = find("SELECT password FROM user WHERE id = '%" . $_SESSION['user'] . "%'");
    // // $search=$result->fetchArray();

    // if($password!=$search['password']){
    //     echo "falha  na confirmação de senha";
    // }
}