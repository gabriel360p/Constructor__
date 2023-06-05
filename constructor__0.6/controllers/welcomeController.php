<?php
include_once __DIR__ . '/../library/direction.php';

function welcome()
{
    render('/views/welcome.php');
}

function dash()
{
    render('/views/content/dash.php');
}
