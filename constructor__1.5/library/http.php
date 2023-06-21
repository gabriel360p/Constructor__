<?php
function isGet($method)
{
    if ($method != 'GET') {
        render('/errors/badrequest');
        die();
    }
}

function isPost($method)
{
    if ($method != 'POST') {
        render('/errors/badrequest');
        die();
    }
}

