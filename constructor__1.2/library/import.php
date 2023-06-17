<?php

function importController($controller){
    include_once __DIR__ . '/../controllers/'.$controller;
    // die();
}

function importLibrary($function){
    include_once __DIR__ . '/../library/'.$function;
    // die();
}

function importComponent($component){
    include_once __DIR__ . '/../views/pieces/'.$component;
    // die();
}