<?php

class Password{

    public static function sizePassword($size,$password,$message,$errorType,$path)
    {
        /*
            A função recebe a senha e o tamanho que deseja que ela tenha e faz verificação se o tamanho esta nos conformes
            Ela recebe também dados para complementar a bolsa de erros, como mensagem, tipo de erro e caminho
        */

        if(mb_strlen($password)<$size){
            ErrorsBag::passwordError($message,$errorType,$path);
            return die();
        }
    }

    public static function confirmedPassword($password,$password_confirmation,$message,$errorType,$path)
    {
        /*
            A função recebe as senhas via passagem de método e verifica se é as duas strings são iguais
            Ela recebe também dados para complementar a bolsa de erros, como mensagem, tipo de erro e caminho
        */
        
        if($password_confirmation!=$password){
            ErrorsBag::passwordError($message,$errorType,$path);
            return die();
        }
    }

        // public static function modulePassword($size,$password,$password_confirmation,$message,$errorType,$path)
    // {
    //     /* 
    //         O módulo é específico para registro de senha
    //     */

    //     if((mb_strlen($password)<$size)){
    //         ErrorsBag::passwordError($message,$errorType,$path);
    //         return die();
    //     }else if($password_confirmation!=$password){
    //         ErrorsBag::passwordError($message,$errorType,$path);
    //         return die();
    //     }
    // }
    
}