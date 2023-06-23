<?php

class ErrorsBag {
    protected $errorMessage;
    protected $errorType;

    public static function customError($errorMessage,$errorType,$path)
    {
        /*
            A captura de erros customizados, permite que o usuário defina uma mensagem personalizada, o tipo de erro customizado (palavra chave) e uma rota
        */

        $storage = new Errors(connection());
        $storage->save($errorMessage,$errorType);

        return Direction::redirect($path);
    }


    public static function loginError()
    {
        /*
            A captura do error de login
        */

        $storage = new Errors(connection());
        $storage->save($errorMessage="Dados Invalidos",$errorType="Login");
        
        return Direction::redirect('/login');
    }

    public static function emailError()
    {
        /*
            A captura do error de email
        */

        $storage = new Errors(connection());
        $storage->save("Email Invalido","Email");

        return Direction::redirect('/login');
    }
    
    public static function passwordError()
    {
        /*
            A captura do error de senha
        */

        $storage = new Errors(connection());
        $storage->save("Senha Invalido","Password");
        
        return Direction::redirect('/login');
    }

    // public static function viewAll()
    // {
    //     /*
    //         Mostra todos os erros atualmente capturados 
    //     */

    //     $storage = new Errors(connection());
    //     if($storage->all()){
    //         return $storage->all();
    //     }else{
    //         return;
    //     }
    // }


    public static function viewError($errorType)
    {
        /*
            Mostra um erro especifico, ele pega como referência de o tipo de erro que foi definido
            Ele captura o erro, insere, armaneza em uma variável corrente e depois deleta, o valor que vai ser mostrado ao usuário é o da varáivel corrente, o valor original foi deletado do banco 
        */

        $storage = new Errors(connection());

        if($storage->findError($errorType)){
            $error = $storage->findError($errorType);

            $errorMessage=$error;
            
            $storage->delete($errorMessage['id']);

            return print "Erro! ".$errorMessage['errorMessage']." Tipo de erro: ".$errorMessage['errorType'];
        }else{
            return;
        }

    }
    
}


