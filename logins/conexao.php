<?php 
    //conexao do BD

    //variaveis sobre o banco de dados, nao preciso altera todos em todas as pastas
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mybanco";//pelo simples fato de outras pessoas nao precisarem criar o banco manualmente, so coloca (nome do banco).(tabela)   
    $nomeTabela = "pessoa";

    //conexao com o banco de dados
    $conexao =  mysqli_connect($hostname,$username,$password);                     

    //verifica se o banco de dados estar conectado ao php
    /*
    if($conexao->connect_errno)
        echo "acesso negado!";
    else
        echo "acesso concluido!";
    */
?>