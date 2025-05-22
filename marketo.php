<?php

$usuarios = [
    'admin' => '1404'
];

$venda = [
    'item' => 'preco'
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

function venda(&$venda){
    $item = readline("Insira o nome do produto: ");
    (float)$preco = readline("Insira o preço do produto: ");

    while(true){
    if ((float)$preco <= 0){
        echo "Preço inválido!" . PHP_EOL;
        $preco = readline("Insira o preço do produto: ");
    }else{
        break;
    }
}
    
    echo "O nome do produto é $item e o preço $ $preco \n";
}

while(true){

   echo "Digite uma opção:\n";
echo "1 - Login\n";
echo "2 - Cadastrar\n";
echo "3 - Sair\n";

$opcao = readline("Opção: ");

    switch($opcao){
        case '1':
            $usuario = readline("Digite o usuário: ");
            $senha = readline("Digite a senha: ");
            if (login($usuario, $senha, $usuarios)) {
                echo "Login efetuado com sucesso!" . PHP_EOL;
                while(true){

                    echo "Digite uma opção:\n";
                    echo "1 - Venda\n";
                    echo "2 - Deslogar\n";
                    $opcao = readline("Opção: ");
        
                switch($opcao){
                    case '1':
                        venda($venda);
                        break;

                    case '2':
                        echo "deslogando
                            " . PHP_EOL;
                        break 2;

                    default:
                        echo "Opção inválida!" . PHP_EOL;
                }
                }
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