<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style_login.css">
</head>
    <body>
        <form action="novo_login.php" method="post">
            <div>
                <h1>Olá, Bem-vindo(a)</h1>
                <br>
                <fieldset>
                    <legend>Nome</legend>
                    <label for="nome"></label>
                    <input type="text" name="nome" id="idnome" placeholder="Nome completo" required="required" size="50" maxlength="50"/>
                </fieldset>
                    <br>
                
                <section>   
                    <fieldset>
                        <legend>CPF</legend>
                        <label for="cpf"></label>                                    <!--pattern limita um campo ao maximo de caracteres-->
                        <input type="text" name="cpf" id="idcpf" required="required"  pattern="\d{11}" placeholder="Apenas números" maxlength="11"/>
                    </fieldset>                                                                     
                    <fieldset>
                        <legend>Data de nascimento</legend>
                        <label for="nascimento"></label>
                        <input type="date" name="nascimento" id="idnascimento" required="required" />
                    </fieldset>
                </section>

                    <br>
                <fieldset>
                    <legend>Email</legend>
                    <label for="email"></label>
                    <input type="email" name="email" id="idemail" size="50" maxlength="150" placeholder="exemplo123@gmail..." required>
                </fieldset>
                    <br>
                <fieldset>
                    <legend>Senha</legend>
                    <label for="senha"></label>
                    <input type="password" name="senha" id="senha" required="required" size="50" placeholder="senha" maxlength="30">
                </fieldset>
                    <br>            
                <button type="submit" name="submit" id="idsubmit" value="Finalizar">Finalizar</button>
            </div>
        </form>
    </body>
</html>
    