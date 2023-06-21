<?php

function importController($controller){
    include_once __DIR__ . '/../controllers/'.$controller.'.php';
}

function importLibrary($function){
    include_once __DIR__ . '/../library/'.$function.'.php';
}

function importComponent($component){
    include_once __DIR__ . '/../views/pieces/'.$component.'.php';
}

function importModel($model){
    include_once __DIR__ . '/../database/modelos/'.$model.'.php';
}