
<?php 
    session_start();
    
    
    //validacoes do login, condicoes de entrada
    if(isset($_POST['botao']) && !empty($_POST['emailLogin']) && !empty($_POST['senhaLogin'])){//verifica: se o boatao foi apertado, e se nenhum campo estar vazio
        //print_r($_REQUEST); //verifica se os dados estao passando pelo login

        include('conexao.php'); //iniciar conexao para validar os dados
        
        //pegar os dados do login para valida-los
        $emailLogin = $_POST['emailLogin'];
        $senhaLogin = $_POST['senhaLogin'];

        //procura no banco de dados se existe dados identicos aos inseridos no login, 'email' e 'senha'
        $loginUser = mysqli_query($conexao,"SELECT * FROM mybanco.pessoa WHERE email = '$emailLogin' and senha = '$senhaLogin' ");
        

        //retornar um array que corresponde a consulta "select"
        //isso vai deixa o usuario entrar (apenas se estiver um email e senha ja cadastrados), retorna false se nao houver linhas
        
        if($procura = mysqli_fetch_array($loginUser)){
            
            $_SESSION['emailLogin'] = $emailLogin; 
            $_SESSION['sennhaLogin'] = $senhaLogin;
            header('location: ..\index.html');//acessa a pagina e armazena os dados login na sessao 

        }else{
            unset($_SESSION['emailLogin']);
            unset($_SESSION['senhaLogin']);
            header('location: login.php');//volta para o login e apaga a sessao
        }
        
    }else{
        
        header('location: login.php');//se caso nao, volta para a mesma pagina
    } 
?>