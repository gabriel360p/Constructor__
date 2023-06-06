<?php
// Conexão com o banco de dados
$DBname = "database.db";
$db = new SQLite3($DBname);

//importa a tabela 
$createUserTable = "CREATE TABLE IF NOT EXISTS user (id INTEGER PRIMARY KEY NOT NULL,email STRING UNIQUE, firstname STRING, lastname STRING, password STRING)";
$db->exec($createUserTable);
