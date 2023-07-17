<?php

/*
    O arquivo guard deverá guardar coisas semelhantes a middlewares, gates e polices. 
    Contém algumas funções pré-definidas.
*/

class Guard{

    public static function isAdmin()
    {
        $conn = connection();    
        $user = new User($conn);
        $data=$user->find("SELECT * FROM user WHERE id = '{$_SESSION['user']}' ");
        return $data['access'] === 0 ? true : Direction::redirect('/errors/unauthorized');
    }

}
