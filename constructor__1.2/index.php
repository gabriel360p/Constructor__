<?php
session_start(); //inicia a sessão

include_once __DIR__ . '/database/connection.php'; //inicia o banco de dados

include __DIR__ . '/routes/path.php'; //leva para as rotas

die();


