<?php

class Password{

    public static function confirmedPassword($password,$password_confirmation)
    {
        /*
            A função recebe as senhas via passagem de método e verifica se é as duas strings são iguais
        */
        
        if($password_confirmation!=$password){
            return print "As senhas não são iguais";
        }

    }


    public static function passwordVerification($password)
    {
        /*
            A função recebe a senha via passagem de método e verifica se é a mesma senha do usuário logado
        */

        if(!(password_verify($password,Auth::userPassword()))){
            return print "Falha na verificação de senha";
        }
    }
}