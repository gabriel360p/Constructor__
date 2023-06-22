<?php
class Import{
    
    public static function importController($controller){
        include_once __DIR__ . '/../controllers/'.$controller.'.php';
    }
    
    public static function importLibrary($function){
        include_once __DIR__ . '/../library/'.$function.'.php';
    }
    
    public static function importComponent($component){
        include_once __DIR__ . '/../views/pieces/'.$component.'.php';
    }
    
    public static function importModel($model){
        include_once __DIR__ . '/../database/modelos/'.$model.'.php';
    }
    
    // public function importUniversal($import){
    //     include_once __DIR__ . '/..'.$import.'.php';
    // }
}
