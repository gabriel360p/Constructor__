<?php
class Http{
    
    public static function isGet($method)
    {
        if ($method != 'GET') {
            Direction::render('/errors/badrequest');
            die();
        }
    }
    
    public static function isPost($method)
    {
        if ($method != 'POST') {
            Direction::render('/errors/badrequest');
            die();
        }
    }
}    
