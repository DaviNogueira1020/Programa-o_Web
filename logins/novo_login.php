<?php

//Verifica se todos os campos estao recebendo os dados do formulario

/*
if(isset($_POST['submit'])){
    print_r("nome".$_POST['nome']);                 //nome,nascimento,email,senha
    print_r("nascimento" . $_POST['nascimento']);          
    print_r("email" . $_POST['email']);               
    print_r("senha" . $_POST['senha']);              
    }
*/
include('conexao.php'); //importa a conexao do banco de dados
 //verifica se o banco existe


if (mysqli_query($conexao,"CREATE DATABASE IF NOT EXISTS mybanco")){//cria o banco de dados "mybanco"(se ele nao existir)
    
    //echo "Banco criado!";
}

//verifica se existe a tabela "pessoa", se nao -> cria ela, pelo amor de Deus nao excluir
$criaTabela = mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS $database.$nomeTabela(
    id_pessoa INT NOT NULL UNIQUE AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    cpf int NOT NULL,
    nascimento DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    senha VARCHAR(36) NOT NULL,
    PRIMARY KEY(id_pessoa)  )");

//inserir os dados do formulario nas variaveis

if(isset($_POST['submit'])){
    $nome1 = $_POST['nome'];
    $cpf1 = $_POST['cpf'];
    $nascimento1 = $_POST['nascimento'];
    $email1 = $_POST['email'];
    $senha1 = $_POST['senha'];


    //levar os dados para o banco de dados
    $armazenar = mysqli_query($conexao,"INSERT INTO $database.$nomeTabela (nome,cpf,nascimento,email,senha) 
                                                                   values('$nome1','$cpf1','$nascimento1','$email1','$senha1')");


    mysqli_close($conexao);
    
    header('location: login.php');

}

?>
</body>
</html>