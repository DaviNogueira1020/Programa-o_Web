<?php 
    //conexao do BD

    //variaveis sobre o banco de dados
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "mybanco";    

    //conexao com o banco de dados
    $conexao =  mysqli_connect($hostname,$username,$password,$database);                     

    
    //verifica se o banco de dados estar conectado ao php
    /*
    if($conexao->connect_errno)
        echo "acesso negado!";
    else
        echo "acesso concluido!";
    */
?>