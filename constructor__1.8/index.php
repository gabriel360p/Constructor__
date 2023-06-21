<?php
session_start(); //inicia a sessão

include_once __DIR__ . '/library/import.php';//

include_once __DIR__ . '/database/connection.php'; //inicia o banco de dados

//importação das bibliotecas
Import::importLibrary('http');
Import::importLibrary('auth');
Import::importLibrary('direction');
Import::importLibrary('csrf');
Import::importLibrary('storage');

//importação dos controladores
Import::importController('authController');

//importando modelos
Import::importModel('user_model');
Import::importModel('csrf_model');



include __DIR__ . '/routes/path.php'; //leva para as rotas



die();


