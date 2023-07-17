<?php 

class errorController{

    public static function unauthorized() {
        return Direction::render('/errors/notauthorized');
    }

}

?>