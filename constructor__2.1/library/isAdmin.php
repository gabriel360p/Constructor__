<?php
//príncipios de middleware

//lista com os níveis de acesso, assim caso uma empresa queira administrar essa parte com mais facilidade, é só adicionar um novo nível e uma nova condição
$nivel = [
    '0'=>1, //admin
    '1'=>2, //financeiro
    '2'=>3, //comum
]; 