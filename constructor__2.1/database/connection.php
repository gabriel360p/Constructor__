<?php
// Conexão com o banco de dados

function connection(){
    return new SQLite3('database.db');
}

$conn=connection();

//criação das tabelas
$createUserTable = "CREATE TABLE IF NOT EXISTS user (
    id INTEGER PRIMARY KEY NOT NULL,
    email STRING UNIQUE,
    firstname STRING,
    lastname STRING,
    type BOOLEAN DEFAULT true,
    password STRING)";

$conn->exec($createUserTable);
$conn->exec("CREATE TABLE IF NOT EXISTS errors (id INTEGER PRIMARY KEY NOT NULL,errorType TEXT UNIQUE, errorMessage TEXT)");
