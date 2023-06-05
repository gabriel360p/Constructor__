<?php
// Conexão com o banco de dados
$DBname = "database.db";
$db = new SQLite3($DBname);

//importa a tabela 
include_once __DIR__ . '/tables/User.php';
