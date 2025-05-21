<?php

$usuarios = [
    'admin' => '1404'
];

function login($usuario, $senha, $usuarios){
    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha) {
        return true;
    } else {
        echo "O usuário ou senha estão incorretos" . PHP_EOL;
        return false;
    }
}

function cadastrarUsuario(&$usuarios){
    $usuario = readline("Digite o novo usuário: ");
    $senha = readline("Digite uma senha para o novo usuário: ");

    if (isset($usuarios[$usuario])) {
        echo "Usuário já existe." . PHP_EOL;
    } else {
        $usuarios[$usuario] = $senha;
        echo "Usuário cadastrado com sucesso!" . PHP_EOL;
    }
}
