<?php

// function codeGenerator(){
//     $piece1= md5(rand(1,10000));
//     $piece2= md5(rand(1,100));
//     $piece3= md5(rand(1,10000000));
//     $piece4= md5(rand(1,10000000));
    
//     $code= md5($piece1." - ".$piece2." - ".$piece3." - ".$piece4);
//     return md5($code);
// }

// function csrfAuthenticate(){
    // $csrfCode = codeGenerator();//pegando o código gerado

    // save("INSERT INTO csrf(code,open) VALUES('".$csrfCode."','false') ");//salvando no  banco de dados
    
    //tag escondida contendo a cripotgrafia
    // return print "<input type='hidden' value='$csrfCode' name='csrf'>";//adicionando a tag escondida
// }

// function csrfVerify(){//verificando o código
    
    // $data=find("SELECT * FROM csrf WHERE code LIKE '%" . $_POST['csrf'] . "%'");
    // var_dump($data);    

    // if($data){
    //     if($data['open']==false){
    //         delete("DELETE FROM csrf where code like %".$_POST['csrf']."%");
    //     }elseif($data['open']==true){
    //         render('/errors/csrferror.php');
    //     }
        
    // }else{
    //     logout();//caso haja um erro de autenticação, o usuário é imediatamente deslogado
    //     render('/errors/csrferror.php');
    // }
// }