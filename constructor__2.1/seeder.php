<?php
/* 
    Após a definição de uma seeder, corra o comando:
    php seeder.php
    Ele vai efetuar a inserção dos conteúdos no banco de dados
*/

include_once __DIR__ . '/database/connection.php';

$conn = connection();

$conn->exec(
    "INSERT INTO user (firstname,lastname,access,type,password,email) VALUES (
        'admin','admin',0,'admin','".password_hash('123123123',PASSWORD_DEFAULT)."','admin@admin'
    )"
);

$conn->exec(
    "INSERT INTO user (firstname,lastname,access,type,password,email) VALUES (
        'common','common',1,'common','".password_hash('123123123',PASSWORD_DEFAULT)."','common@common'
    )"
);