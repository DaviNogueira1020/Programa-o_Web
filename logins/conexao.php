<?php 
    //conexao do BD

    //variaveis sobre o banco de dados
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mybanco";    

    //conexao com o banco de dados
    $conexao =  mysqli_connect($hostname,$username,$password);                     

    //verifica se o banco existe

    if (mysqli_query($conexao,"CREATE DATABASE IF NOT EXISTS mybanco")){//cria o banco de dados "mybanco"(se ele nao existir)
    
        //echo "Banco criado!";
    }else{
        header('..\index.html');
    }
    
    //verifica se existe a tabela "pessoa", se nao -> cria ela, pelo amor de Deus nao excluir
    $criaTabela = mysqli_query($conexao, "CREATE TABLE IF NOT EXISTS mybanco.pessoa(
        id_pessoa INT NOT NULL UNIQUE AUTO_INCREMENT,
        nome VARCHAR(50) NOT NULL,
        cpf INT NOT NULL UNIQUE,
        nascimento DATE NOT NULL,
        email VARCHAR(50) NOT NULL UNIQUE,
        senha VARCHAR(36) NOT NULL,
        PRIMARY KEY(id_pessoa)  )");

    //verifica se o banco de dados estar conectado ao php
    /*
    if($conexao->connect_errno)
        echo "acesso negado!";
    else
        echo "acesso concluido!";
    */
?>