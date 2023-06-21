<?php
class Http{
    
    public static function isGet($method)
    {
        if ($method != 'GET') {
            render('/errors/badrequest');
            die();
        }
    }
    
    public static function isPost($method)
    {
        if ($method != 'POST') {
            render('/errors/badrequest');
            die();
        }
    }

}    
