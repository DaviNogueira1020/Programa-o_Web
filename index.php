<?php
    session_start();
    include("logins/conexao.php");
    
    
    //verifica se o user tem login"
    //Quando fechar o navegador a sessao sera encerrada
    //se nao existir email e senha entao o user nao tem login 
    if(!isset($_SESSION['emailLogin']) == true && !isset($_SESSION['senhaLogin']) == true){
        
        $log = "bem-vindo";
    
    }else{
        $testEmail = $_SESSION['emailLogin'];
        $log = $testEmail;
    }
    
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8"> <!--Define a codificação de caracteres para UTF-8, garantindo suporte a caracteres especiais-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--orna o site responsivo para dispositivos móveis, ajustando a largura à tela do dispositivo.-->
    <link rel="shortcut icon" href="imagens/favicon_io/favicon.ico" type="image/x-icon"> <!--Define o ícone da página (favicon).-->
    <title>FLOWER STORE</title> <!--Título da página que será exibido na aba do navegador-->
    <link rel="stylesheet" href="main.css"> <!--Faz referência ao arquivo de estilo CSS que controla o layout da página.-->
</head>
<body>
    <div class="navegacao">
        
        <div class="inicio">
            <div class="um">
                <img src="imagens/logo.png" alt="logo da loja" width="90" height="90"> <!--Imagem da logo-->
            </div>
            <div class="dois">
                <img src="imagens/flor-removebg-preview.png" alt="logo do nome da loja" width="120" height="100"> <!--Imagem da nome da loja-->
            </div>
            <!--sauda o user-->
            
            <div class="bemvindo">
                    
                    <?php

                        echo "Olá, $log";

                    ?>

            </div>

        </div>

        <div class="meio">
            <input type="text" name="pesquisa" size="50" placeholder="Digite para buscar..." class="pesquisa"> <!--Um campo de texto para o usuário pesquisar produtos-->
        </div>
        
        <!--Dois ícones de imagem para o carrinho de compras e login, com o carrinho associado a um evento JavaScript para mostrar o modal do carrinho-->
        <div class="fim">
            
            <!--icone do carrinho-->
            <div class="fim1">
                <input type="image" src="imagens/carrinho-removebg-preview.png" alt="Carrinho" style="width: 60px; height: 60px;" onclick="toggleCarrinho()">
                <p>Carrinho</p>
            </div>
            
            <!--icone do login-->
            <div class="fim2">
                <a href="logins/login.php"><input type="image" src="imagens/login.png" alt="Botão de Imagem" style="width: 60px; height: 60px;"></a>
                <p>Login</p>
            </div>
        </div>
    </div>

    <!--Links para diferentes categorias de produtos como "Arranjos", "Buquês", "Cestas", "Presentes", e "Flores"-->
    <nav class="principal">
        <a class="principal_link" href="#arranjo">Arranjos</a>
        <a class="principal_link" href="#buques">Buquês</a>
        <a class="principal_link" href="#cestas">Cestas</a>
        <a class="principal_link" href="#presentes">Presentes</a>
        <a class="principal_link" href="#flores">Flores</a>
    </nav>

    <br>

    <!--Exibe um carrossel de imagens (provavelmente com promoção ou imagens principais do site), com 3 imagens sendo exibidas uma após a outra-->
    <div class="carrossel">
        <div class="imagens">
            <img src="imagens/1.1.png" alt="Imagem 1">
            <img src="imagens/2.1.png" alt="Imagem 2">
            <img src="imagens/3.1.png" alt="Imagem 3">
        </div>
    </div>

     <!-- Carrinho de Compras -->
     <header>
        <!--Contém um modal que exibe os itens no carrinho quando o ícone do carrinho é clicado-->
        <div id="modalCarrinho" class="modal">
            <div class="modal-conteudo">
            <span class="fechar" onclick="toggleCarrinho()">&times;</span>
            <input type="image" src="imagens/carrinho-removebg-preview.png" alt="carrinho" width="50px" height="50px">
            <h2 style="color: white">Carrinho de Compras</h2>
            <ul id="itensCarrinho">
                <!-- Itens serão listados aqui -->
            </ul>
            <p style="color: white" id="totalCarrinho">Total: R$ 0,00</p>
            <button onclick="finalizarCompra()">Finalizar Compra</button>
            </div>
        </div>
    </header>

    <!--Cada produto é representado por uma div com uma imagem, título, preço, parcelamento e um botão para adicionar o item ao carrinho. Cada item possui um id para categorizar os produtos (arranjo, buquê, cesta, presente, flor)-->
    <div class="container">
        <div class="flower" id="arranjo">
            <img src="imagens/1.png" alt="Arranjo de rosas" width="200px" height="200px"> <!--A imagem do produto (arranjo de flores, buquê, etc.)-->
            <h2>Rosas Vermelhas</h2> <!--O nome do produto (ex. "Rosas Vermelhas")-->
            <p style="color: white">R$ 59,99</p> <!--O preço do produto-->
            <p style="color: white">ou 3x de R$ 19,99 sem juros</p>
            <br> <!--Indicação de parcelamento sem juros-->
            <button onclick="addToCart('Rosas Vermelhas', 60)">COMPRAR AGORA</button> <!--Um botão que chama uma função JavaScript addToCart() para adicionar o produto ao carrinho de compras-->
        </div>
        <div class="flower" id="arranjo">
            <img src="imagens/2.png" alt="Arranjo de Girassóis" width="200px" height="200px">
            <h2>Girassóis Amarelos</h2>
            <p style="color: white">R$ 39,99</p>
            <p style="color: white">ou 2x de R$ 19,99 sem juros</p>
            <br>
            <button onclick="addToCart('Girassóis Amarelos', 40)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="arranjo">
            <img src="imagens/3.png" alt="Arranjo de Tulipas" width="200px" height="200px">
            <h2>Tulipas Rosas</h2>
            <p style="color: white;">R$ 79,99</p>
            <P style="color: white">ou 4x de R$ 19,99 sem juros</P>
            <br>
            <button onclick="addToCart('Tulipas Rosas', 80)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="arranjo">
            <img src="imagens/4.png" alt="Arranjo de Lírios" width="200px" height="200px">
            <h2>Lírios Rosas</h2>
            <p style="color: white">R$ 69,99</p>
            <P style="color: white">ou 2x de R$ 34,99 sem juros</P>
            <br>
            <button onclick="addToCart('Lírios Rosas', 70)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="buques">
            <img src="imagens/5.png" alt="Buquê de Orquídeas" width="200px" height="200px">
            <h2>Orquídeas Roxas</h2>
            <p style="color: white">R$ 99,99</p>
            <p style="color: white">ou 5x R$ 19,99 sem juros</p>
            <br>
            <button onclick="addToCart('Orquídeas Roxas', 100)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="buques">
            <img src="imagens/6.png" alt="Buquê de Margaridas" width="200px" height="200px">
            <h2>Margaridas</h2>
            <p style="color: white">R$ 49,99</p>
            <p style="color: white">ou 2x de R$ 24,99 sem juros</p>
            <br>
            <button onclick="addToCart('Margaridas', 50)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="buques">
            <img src="imagens/7.png" alt="Buquê de Hortência" width="200px" height="200px">
            <h2>Hortência Azul</h2>
            <p style="color:white">R$ 89,99</p>
            <p style="color:white">ou 2x de 44,99 sem juros</p>
            <br>
            <button onclick="addToCart('Hortência azul', 90)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="buques">
            <img src="imagens/8.png" alt="Buquê de Magnólia" width="200px" height="200px">
            <h2>Magnólias Rosas</h2>
            <p style="color:white">R$ 109,99</p>
            <p style="color:white">ou 5x de R$ 21,99 sem juros</p>
            <br>
            <button onclick="addToCart('Magnólias Rosas', 110)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="cestas">
            <img src="imagens/9.png" alt="Cesta de Flores" width="200px" height="200px">
            <h2>Flores do Campo</h2>
            <p style="color: white">R$ 149,99</p>
            <p style="color: white">ou 3x de R$ 49,99 sem juros</p>
            <br>
            <button onclick="addToCart('Flores do Campo', 150)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="cestas">
            <img src="imagens/10.png" alt="Cesta de Flores" width="200px" height="200px">
            <h2>Flores de Época</h2>
            <p style="color: white">R$ 179,99</p>
            <p style="color: white">ou 4x de R$ 44,99 sem juros</p>
            <br>
            <button onclick="addToCart('Flores de Época', 180)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="cestas">
            <img src="imagens/11.png" alt="Cesta de Flores" width="200px" height="200px">
            <h2>Flores do Parque</h2>
            <p style="color:white">R$ 159,99</p>
            <p style="color:white">ou 4x de R$ de 39,99 sem juros</p>
            <br>
            <button onclick="addToCart('Flores do Parque', 160)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="cestas">
            <img src="imagens/12.png" alt="Cesta de Flores" width="200px" height="200px">
            <h2>Flores de Vó</h2>
            <p style="color: white">R$ 59,99</p>
            <p style="color: white">ou 2x de R$ 29,99 sem juros</p>
            <br>
            <button onclick="addToCart('Flores de Vó', 60)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="presentes">
            <img src="imagens/13.png" alt="Presente" width="200px" height="200px">
            <h2>Flores com Mimo</h2>
            <p style="color: white">R$ 199,99</p>
            <p style="color: white">ou 4x de R$ 49,99 sem juros</p>
            <br>
            <button onclick="addToCart('Flores com Mimo', 200)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="presentes">
            <img src="imagens/14.png" alt="Presente" width="200px" height="200px">
            <h2>Flower Love</h2>
            <p style="color: white">R$ 249,99</p>
            <p style="color: white">ou 5x de R$ 49,99 sem juros</p>
            <br>
            <button onclick="addToCart('Flower Love', 220)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="presentes">
            <img src="imagens/15.png" alt="Presente" width="200px" height="200px">
            <h2>Flower Friends</h2>
            <p style="color:white">R$ 139,99</p>
            <p style="color:white">ou 7x de R$ 19,99 sem juros</p>
            <br>
            <button onclick="addToCart('Flower Friends', 140)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="presentes">
            <img src="imagens/16.png" alt="Presente" width="200px" height="200px">
            <h2>Flores da Paixão</h2>
            <p style="color: white">R$ 299,99</p>
            <p style="color: white">ou 6x de R$ 49,99 sem juros</p>
            <br>
            <button onclick="addToCart('Flores da Paixão', 300)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="flores">
            <img src="imagens/17.png" alt="Melissa" width="200px" height="200px">
            <h2>Melissa Amarela</h2>
            <p style="color: white">R$ 19,99</p>
            <p style="color: white">ou 2x de R$ 9,99 sem juros</p>
            <br>
            <button onclick="addToCart('Melissa Amarela', 20)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="flores">
            <img src="imagens/18.png" alt="Iris" width="200px" height="200px">
            <h2>Íris Roxa</h2>
            <p style="color: white">R$ 29,99</p>
            <p style="color: white">ou 2x de R$ 14,99 sem juros</p>
            <br>
            <button onclick="addToCart('Íris Roxa', 30)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="flores">
            <img src="imagens/19.png" alt="Camélia" width="200px" height="200px">
            <h2>Camélia Rosa</h2>
            <p style="color:white">R$ 49,99</p>
            <p style="color:white">ou 2x de R$ 24,99 sem juros</p>
            <br>
            <button onclick="addToCart('Camélia Rosa', 50)">COMPRAR AGORA</button>
        </div>
        <div class="flower" id="flores">
            <img src="imagens/20.png" alt="Jasmin" width="200px" height="200px">
            <h2>Jasmin Branca</h2>
            <p style="color: white">R$ 9,99</p>
            <p style="color: white">ou 2x de R$ 4,99 sem juros</p>
            <br>
            <button onclick="addToCart('Jasmin Branca', 10)">COMPRAR AGORA</button>
        </div>
    </div>

    <div class="rodape">
        <div class="prin">
            <div class="social">
                <div class="zap">
                    <a href="blablabla">
                        <!--Ícones e links para o WhatsApp e Instagram da loja-->
                        <img src="imagens/rodape/zap.png" alt="zap" width="30" height="30">
                        <h3> 83 99693-5620</h3>
                    </a>
                </div>
                <div class="instagram">
                    <a href="blablabla">
                        <img src="imagens/rodape/instagram.png" alt="instagram" width="30" height="30">
                        <h3> @flower_storejp</h3>
                    </a>
                </div>
            </div>
            <div class="email">
                <!--Um campo para o usuário inserir seu email e receber promoções-->
                <div class="nome"><h4>RECEBA NOSSAS PROMOÇÕES:</h4></div>
                <div class="cartao">
                    <form>
                        <input type="email" name="email" class="form" placeholder="INSIRA SEU EMAIL.....">
                    </form>
                </div>
            </div>
            <!--Links para páginas como "Quem Somos?", "Nossa Loja" e "Horários de Entrega"-->
            <div class="observacoes">
                <div class="link"><a href="blablabla">QUEM SOMOS?</a></div>
                <div class="link"><a href="blablabla">NOSSA LOJA</a></div>
                <div class="link"><a href="blablabla">HORÁRIOS DE ENTREGA</a></div>
            </div>
            <!--Exibição de ícones representando as formas de pagamento aceitas (cartões de crédito e Pix)-->
            <div class="pagamentos">
                <div class="nome">
                    <h4>FORMAS DE PAGAMENTOS:</h4>
                </div>
                <div class="cartao">
                    <img src="imagens/rodape/hipercard.png" alt="hipercard" height="50" width="70"> <!--hipercard-->
                    <img src="imagens/rodape/mastercard.png" alt="mastercard" height="40" width="60"> <!--mastercard-->
                    <img src="imagens/rodape/visa.png" alt="visa" height="60" width="60"> <!--visa-->
                    <img src="imagens/logo-pix-icone-1024-removebg-preview.png" alt="pix" height="45" width="45"> <!--pix-->
                </div>
            </div>
        </div>
        <div class="segundo">
            <p>&copy; 2024 Loja de Flores. Todos os direitos reservados.</p> <!--entidade HTML que representa o símbolo de direitos autorais-->
        </div>
    </div>

    <!--Inclui um arquivo JavaScript para interatividade, como o controle do carrinho de compras e outros comportamentos dinâmicos da página (como a função toggleCarrinho() para exibir o modal do carrinho)-->
    <script src="main.js"></script>
    
</body>
</html>
