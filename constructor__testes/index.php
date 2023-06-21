<?php
session_start(); //inicia a sessão

include_once __DIR__ . '/database/connection.php'; //inicia o banco de dados

//importando modelos
include_once __DIR__.'/database/modelos/user_model.php';
include_once __DIR__.'/database/modelos/csrf_model.php';

include __DIR__ . '/routes/path.php'; //leva para as rotas



die();


