<?php
include_once __DIR__ . '/../library/direction.php';

function login()
{
    render('/views/auth/login.php');
}

function register()
{
    render('/views/auth/register.php');
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
    include __DIR__.'/../database/connection.php';

    $inputpassword=md5($_POST['password']);
    $inputemail=$_POST['email'];

    $result = $db->query("SELECT * FROM user WHERE email LIKE '%" . $inputemail . "%'");
    $search=$result->fetchArray();

    $username=$search['firstname'];
    $useremail=$search['email'];
    $userpassword=$search['password'];

    if(($inputemail==$useremail)&&($inputpassword==$userpassword)){
        $_SESSION['user']=$username;
        redirect('/dash');
    }else{
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            redirect('/login');
        }else{
            redirect('/login');
        }
    }
    
}
    
function registrar()
{
    include __DIR__.'/../database/connection.php';
    $insertUserTable="INSERT INTO user (firstname,lastname,email,password) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".md5($_POST['password'])."')";
    $db->exec($insertUserTable);
    redirect('/login');
}
