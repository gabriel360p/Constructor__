<?php

function login()
{
    render('/auth/login.php');
}

function register()
{
    render('/auth/register.php');
}

function logout()
{
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
        session_destroy();
        setcookie("PHPSESSID",null,strtotime("-36000 seconds"));

        redirect('/');
    }else{
        redirect('/');
    }
}

function logar()
{
    $db=connection();

    $search=find("SELECT * FROM user WHERE email LIKE '%" . $_POST['email'] . "%'");

    if((password_verify($_POST['password'],$search['password'])==true)&&($_POST['email']==$search['email'])){
        $_SESSION['user']=$search['id'];
        redirect('/dash');
    }else{
        redirect('/login');
    }
    
}
    
function registrar()
{
    $db=connection();

    $md5password=password_hash($_POST['password'],PASSWORD_DEFAULT);

    save("INSERT INTO 
        user (firstname,lastname,email,password) 
        VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$md5password."')");
    redirect('/login');
}
