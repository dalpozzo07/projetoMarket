<?php

function login($usuario, $senha){
   if($usuario == "admin" && $senha == "1404"){
    return true;
   }else{
    echo "O usuário ou senha estão incorretos" . PHP_EOL;
    return false;
   }
}
