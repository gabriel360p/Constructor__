<?php

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