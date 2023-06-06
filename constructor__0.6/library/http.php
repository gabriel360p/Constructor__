<?php
include_once __DIR__ . '/direction.php';

function isGet($method)
{
    if ($method != 'GET') {
        render('/views/errors/badrequest.php');
        die();
    }
}

function isPost($method)
{
    if ($method != 'POST') {
        render('/views/errors/badrequest.php');
        die();
    }
}

