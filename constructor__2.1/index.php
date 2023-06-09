<?php
session_start(); //inicia a sessão

include_once __DIR__ . '/library/import.php';//Importa a biblioteca de importações

include_once __DIR__ . '/database/connection.php'; //inicia o banco de dados

//importação das bibliotecas
Import::importLibrary('http');
Import::importLibrary('auth');
Import::importLibrary('direction');
Import::importLibrary('storage');
Import::importLibrary('password');
Import::importLibrary('error');

//importação dos controladores
Import::importController('authController');
Import::importController('userController');

//importando modelos
Import::importModel('user_model');
Import::importModel('error_model');



include __DIR__ . '/routes/path.php'; //leva para as rotas



die();


