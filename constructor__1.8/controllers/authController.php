<?php
class authController{

    public static function login()
    {
        Direction::render('/auth/login');
    }
    
    public static function register()
    {
        Direction::render('/auth/register');
    }
    
    public static function logout()
    {
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            session_destroy();
            setcookie("PHPSESSID",null,strtotime("-36000 seconds"));
    
            Direction::redirect('/');
        }else{
            Direction::redirect('/');
        }
    }
    
    public static function logar()
    {
        // csrfVerify();
    
        $user=new User(connection());
    
        $data=$user->find("SELECT * FROM user WHERE email LIKE '%" . $_POST['email'] . "%'");
    
        if((password_verify($_POST['password'],$data['password'])==true)&&($_POST['email']==$data['email'])){
            $_SESSION['user']=$data['id'];
            Direction::redirect('/dash');
        }else{
            Direction::redirect('/login');
        }
        
    }
        
    public static function registrar()
    {
        // csrfVerify();
        $user = new User(connection());
    
        $md5password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    
        $user->save("INSERT INTO 
            user (firstname,lastname,email,password) 
            VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$md5password."')");
        Direction::redirect('/login');
    }
}

