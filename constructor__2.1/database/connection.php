<?php
// Conexão com o banco de dados

function connection(){
    return new SQLite3('database.db');
}

$conn=connection();

//criação das tabelas
$createUserTable = "CREATE TABLE IF NOT EXISTS user (id INTEGER PRIMARY KEY NOT NULL,email STRING UNIQUE, firstname STRING, lastname STRING, password STRING)";
$conn->exec($createUserTable);

// $createCSRFtable= "CREATE TABLE IF NOT EXISTS csrf (id INTEGER PRIMARY KEY NOT NULL, code TEXT UNIQUE, open BOOLEAN)";
// $conn->exec($createCSRFtable);

// $createUrlTable= "CREATE TABLE IF NOT EXISTS urls (id INTEGER PRIMARY KEY NOT NULL, uri TEXT)";
// $conn->exec($createUrlTable);

$conn->exec("CREATE TABLE IF NOT EXISTS errors (id INTEGER PRIMARY KEY NOT NULL,errorType TEXT UNIQUE, errorMessage TEXT)");
