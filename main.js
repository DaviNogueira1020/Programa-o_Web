const imagens = document.querySelector('.imagens');
        const totalImagens = imagens.children.length;
        let index = 0;

    function proximaImagem() {
        index = (index + 1) % totalImagens;
        imagens.style.transform = `translateX(-${index * 600}px)`;
    }

    setInterval(proximaImagem, 3000); // Muda a imagem a cada 3 segundos
