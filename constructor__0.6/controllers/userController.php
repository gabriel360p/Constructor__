<?php
include_once __DIR__.'/../library/direction.php';
include_once __DIR__.'/../library/auth.php';

function profile(){
    render('/views/user/profile.php');
}

function update(){
    include __DIR__.'/../database/connection.php';
    
    confirmedPassword($confirmedPassword=md5($_POST['confirmedPassword']));
     
    $inputfirstname=$_POST['firstname'];
    $inputlastname=$_POST['lastname'];
    $inputemail=$_POST['email'];
    // $inputpassword=$_POST['password'];
    $userId=authId();

    $sql = "UPDATE user SET 
    email = '".$inputemail."', 
    firstname = '".$inputfirstname."', 
    lastname = '".$inputlastname."'
    WHERE id='".$userId."' 
    ";

    $query=$db->exec($sql);
    header('Location:/profile');
}

