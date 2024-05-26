<?php
global $pdo;
require_once("config.php");
require_once("Usuario.php");
$usuario = new Usuario;
//Receber dados e cadastro
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = filter_input(INPUT_POST, "nome",FILTER_SANITIZE_SPECIAL_CHARS );
    $email =filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL) ;
    $senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS)  ;
    $dados = [
        "nome" => $nome ,
        "email"=> $email , 
        "senha"=> $senha 
    ];
    $novo = $usuario->inserir($dados);

}
/*
//Mostrar dados 
elseif($_){
    $lista = usuario->listarTodos($nome , $email , $senha);

}
//Atualizar os dados
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'] ;
$atualizar = usuario->atualizar();
}

//Excluir os dados 
else(){
$delete = usuario->excluir();
}
