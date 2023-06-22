<?php

class Auth{

    public static function userName()
    {
        $user = new User(connection());

        $data =$user->find("SELECT firstname,lastname FROM user WHERE id = " .  $_SESSION['user']. " ");

        return $data;
    }


    public static function userId()
    {
        $user = new User(connection());

        $data =$user->find("SELECT id FROM user WHERE id =" . $_SESSION['user'] . "");

        return $data['id'];
    }


    public static function userAuth()
    {
        $user = new User(connection());
        
        $data =$user->find("SELECT * FROM user WHERE id = " . $_SESSION['user'] . "");

        return $data;
    }

    public static function userEmail()
    {
        $user = new User(connection());

        $data = $user->find("SELECT email FROM user WHERE id = " .$_SESSION['user']. "");
        
        return $data['email'];
    }

    public static function userPassword()
    {
        $user = new User(connection());

        $data = $user->find("SELECT password FROM user WHERE id = " .$_SESSION['user']. "");
        
        return $data['password'];
    }

    public static function authenticate(){

        if (!(isset($_SESSION['user']))) {
            Direction::render('/errors/notauthenticate');
            die();
        }
    }

}
