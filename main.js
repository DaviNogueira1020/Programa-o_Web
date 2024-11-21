//Galeria de imagens
const imagens = document.querySelector('.imagens');
        const totalImagens = imagens.children.length;
        let index = 0;

    function proximaImagem() {
        index = (index + 1) % totalImagens;
        imagens.style.transform = `translateX(-${index * 600}px)`;
    }

    setInterval(proximaImagem, 3000); // Muda a imagem a cada 3 segundos

    let carrinho = [];

        // Função para adicionar ao carrinho
        function addToCart(nome, preco) {
            const item = { nome, preco };
            carrinho.push(item);
            
            
            alert(`${nome} foi adicionado ao carrinho!`);
        }

        // Função para mostrar/ocultar o carrinho
        function toggleCarrinho() {
            const modal = document.getElementById('modalCarrinho');
            modal.style.display = modal.style.display === "block" ? "none" : "block";
            mostrarCarrinho();
        }

        // Função para exibir os itens no carrinho
        function mostrarCarrinho() {
            const listaCarrinho = document.getElementById('itensCarrinho');
            const totalCarrinho = document.getElementById('totalCarrinho');
            listaCarrinho.innerHTML = ''; // Limpar lista antes de adicionar novos itens

            let total = 0;

            // Adicionar cada item no carrinho
            carrinho.forEach(item => {
                const li = document.createElement('li');
                li.textContent = `${item.nome} - R$ ${item.preco.toFixed(2)}`;
                listaCarrinho.appendChild(li);
                total += item.preco;
            });

            // Exibir o total
            totalCarrinho.textContent = `Total: R$ ${total.toFixed(2)}`;
        }

        // Função para finalizar a compra
        function finalizarCompra() {
            if (carrinho.length === 0) {
                alert("O carrinho está vazio!");
                return;
            }

            alert("Compra finalizada! Obrigado pela sua compra.");
            carrinho = []; // Limpar carrinho após a compra
            toggleCarrinho(); // Fechar o modal
        }

    
        