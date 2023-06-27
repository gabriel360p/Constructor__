<?php


global $uri,$path,$id;
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        include __DIR__.'/formulario.php';
        break;
    

    case '/users/user/edit/':

        echo "OLA";
        echo $_POST['userId']; 

        break;


    default:
        echo "Não achado";
        break;
}

// function route($uri = "",$parametros = []){
//     //iria construir a uri e iria redirecionar para ela

//     $teste = http_build_query($parametros);
    
//     // echo $uri;

//     // $uri.$parametros[];
//     $id=1;
    
//     echo '/users/user/edit/'.$id;


//     // $path=$uri.$teste;
//     // header("Location:".$uri);
//     // roteamento($path);
// }

// route($uri,$parametros);

// function roteamento($path){
//     echo $path;
// }