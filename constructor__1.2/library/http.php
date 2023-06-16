<?php
function isGet($method)
{
    if ($method != 'GET') {
        render('/errors/badrequest.php');
        die();
    }
}

function isPost($method)
{
    if ($method != 'POST') {
        render('/errors/badrequest.php');
        die();
    }
}

