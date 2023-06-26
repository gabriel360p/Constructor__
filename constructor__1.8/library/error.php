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





    public static function registerError($errorMessage,$errorType)
    {
        /*
            A captura do error de registro 
            Essa função é específica para capturar erros genéricos da tela de registro de usuários
        */

        $storage = new Errors(connection());
        $storage->save($errorMessage,$errorType);
        
        return Direction::redirect('/register');
    }
    public static function loginError($errorMessage,$errorType)
    {
        /*
            A captura do error de login 
            Essa função é específica para capturar erros genéricos da tela de login de usuário
        */

        $storage = new Errors(connection());
        $storage->save($errorMessage,$errorType);
        
        return Direction::redirect('/login');
    }






    public static function passwordError($errorMessage,$errorType,$path)
    {
        /*
            A captura do error de senha 
            Trata erros genéricos de senha
        */

        $storage = new Errors(connection());
        $storage->save($errorMessage,$errorType);
        
        return Direction::redirect($path);
    }




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

            return "Erro! ".$errorMessage['errorMessage']." Tipo de erro: ".$errorMessage['errorType'];
        }else{
            return;
        }

    }





    
}


