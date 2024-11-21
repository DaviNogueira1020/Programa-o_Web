<?php 
    session_start();
    
    //impede que o usuario entre pela url sem fazer login "se minha sessao 'email' e 'senha' estiver vazia e for verdade, volta para o login"
    //Quando fechar o navegador a sessao sera encerrada
    if(!isset($_SESSION['emailLogin']) == true && !isset($_SESSION['senhaLogin']) == true){
        
        session_destroy();
        header('location: login.php');

    }
    
    //essa pagina do index da floricultura
    echo "<h1>Acessou, parabens</h1>";

?>