<?php
$conn = connection();

$conn->exec(
"CREATE TABLE IF NOT EXISTS user (
    id INTEGER PRIMARY KEY NOT NULL,
    email STRING UNIQUE,
    firstname STRING,
    lastname STRING,
    type STRING,
    access INTEGER,
    password STRING)"
);