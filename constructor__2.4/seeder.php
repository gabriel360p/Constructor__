<?php
/* 
    Após a definição de uma seeder, corra o comando:
    php seeder.php
    Ele vai efetuar a inserção dos conteúdos no banco de dados
*/
include_once __DIR__ . '/database/connection.php';
include_once __DIR__ . '/library/import.php';

Import::importSeeder('userSeed');
