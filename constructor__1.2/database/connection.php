<?php
// Conexão com o banco de dados

function connection(){
    return new SQLite3('database.db');
}

$db=connection();

$createUserTable = "CREATE TABLE IF NOT EXISTS user (id INTEGER PRIMARY KEY NOT NULL,email STRING UNIQUE, firstname STRING, lastname STRING, password STRING)";
$db->exec($createUserTable);

function save($sql){
    $db=connection();
    $db->exec($sql);

}

function find($sql){
    $db=connection();
    $result= $db->query($sql);   
    return $data=$result->fetchArray();
}