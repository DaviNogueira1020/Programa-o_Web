<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Login</title>
</head>
<body>
    <div>
        
        <h1><span>Login</span></h1>
        <br>
        
        <form action="validar_login.php" method="post">

            <fieldset>
                <legend>Email</legend>
                <label for="emailLogin"></label>
                <input type="email" name="emailLogin" id="id_emailLogin" placeholder="Email" maxlength="150" required="required">
            </fieldset>
                
                <br>
            
            <fieldset>
                <legend>Senha</legend>
                <label for="senhaLogin"></label>
                <input  type="password" name="senhaLogin" id="id_senhaLogin" placeholder="senha" maxlength="30" required="required">
            </fieldset>
            
                <br>
                <button type="submit" name="botao" value="Entrar">Entrar</button>
                <br>
                <br>
            <!-- tipo de linha para o link -->
            <hr/> 
            <br>
            <p>Você não tem cadastro? !! <a href="formulario.php">clique aqui para se cadastra</a> !!</p>
        </form>
    </div>
</body>
</html>