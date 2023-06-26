<?php

class ErrorsBag {
    protected $errorMessage;
    protected $errorType;

    public static function customError($errorMessage,$errorType,$path)
    {
        /*
            A captura de erros customizados, permite que o usuário defina uma mensagem personalizada, o tipo de erro customizado (palavra chave) e uma rota
            A captura de erros não utiliza lógica, ele deve somente capturar a mensagem de erro e o tipo de erro
        */

        $storage = new Errors(connection());
        $storage->save($errorMessage,$errorType);

        return Direction::redirect($path);
    }


    public static function registerError()
    {
        /*
            A captura do error de registro - O erro que ele captura é que os dados já existem no banco
        */

        $storage = new Errors(connection());
        $storage->save($errorMessage="Usuário não encontrado",$errorType="Login");
        
        return Direction::redirect('/login');
    }
    public static function loginError()
    {
        /*
            A captura do error de login - Usuário não encontrado no banco de dados
        */

        $storage = new Errors(connection());
        $storage->save($errorMessage="Usuário não encontrado",$errorType="Login");
        
        return Direction::redirect('/login');
    }
    public static function emailError()
    {
        /*
            Captura erro de escrita do email
        */

        $storage = new Errors(connection());
        $storage->save("Email Invalido","Email");

        return Direction::redirect('/login');
    }
    public static function passwordError()
    {
        /*
            A captura todos os erros vindo em relação a senha
        */

        $storage = new Errors(connection());
        $storage->save("Senha Invalida","Password");
        
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


