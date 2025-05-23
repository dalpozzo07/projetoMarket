<?php

date_default_timezone_set('America/Sao_Paulo');

$usuarios = [
    'admin' => '1404',
];

$vendas = [];


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

function adicionarVendas($item, $preco, &$vendas){
    
    while(true){

    if ((float)$preco <= 0){
        echo "Preço inválido!" . PHP_EOL;
        $preco = readline("Insira o preço do produto: ");
    }else{break;
    
    }
}

$vendas[$item] = $preco;

 echo "O nome do produto é $item, e o preço R$$preco \n";
 
}


while(true){

system('clear');
echo "==== Menu ====" . PHP_EOL;
echo "Digite uma opção:\n";
echo "1 - Login\n";
echo "2 - Cadastrar\n";
echo "3 - Sair\n";
echo "==============" . PHP_EOL;

$opcao = readline("Opção: ");

    switch($opcao){

        case '1':
            $usuario = readline("Digite o usuário: ");
            $senha = readline("Digite a senha: ");
            if (login($usuario, $senha, $usuarios)) {
                system('clear');
                echo "Login efetuado com sucesso!" . PHP_EOL;
            }
            break;

        case '2':
            cadastrarUsuario($usuarios);
            break;

        case '3':
            echo "Encerrando o programa" . PHP_EOL;
            exit;

        default:
            echo "Opção inválida" . PHP_EOL;
    
}
}