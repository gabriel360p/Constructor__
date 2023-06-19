<?php

function codeGenerator(){
    $piece1= md5(rand(1,10000));
    $piece2= md5(rand(1,100));
    $piece3= md5(rand(1,10000000));
    
    echo md5($piece1." - ".$piece2." - ".$piece3);
    return md5($code);
}

function crsfAuthenticate(){
    $csrfCode = codeGenerator();//pegando o código gerado

    save("INSERT INTO csrf(code) VALUES('".$csrfCode."') ");//salvando no  banco de dados
    
    echo "<input type="hidden" value="$csrfCode" name="csrf">";//adicionando a tag escondida
}

function crsfVerify(){//verificando o código
    
    $data = find("SELECT * FROM crsf where code like %".$_POST['csrf']."%");

    if($data==false){//caso o código esteja errado, ele deve barrar
        logout();//caso haja um erro de autenticação, o usuário é imediatamente deslogado
        render('/errors/crsferror.php');

    }elseif($data==true){//caso o código esteja certo ele deleta o código do banco e permite a passagem
        delete("DELETE FROM csrf where code like %".$_POST['csrf']."%");
    }

}