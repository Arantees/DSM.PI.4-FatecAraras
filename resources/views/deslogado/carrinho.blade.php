<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho - K-Drinks</title>
    <link rel="stylesheet" href="../CSS/carrinho.css">

</head>
<body>
    <!-- Cabeçalho -->
    <header class="header">
        <div class="container">
            <h1 class="logo">K-DRINKS</h1>
            <nav class="nav">
                <a href="#" class="nav-link">Suporte</a>
                <a href="#" class="btn btn-dark">Entrar</a>
            </nav>
        </div>
    </header>

    <!-- Banner -->
    <section class="banner">
        <img src="../Imagens/portfolio/banner.png" alt="Banner de fundo" class="banner-img">
        <div class="banner-content">
            <h1>Carrinho</h1>
            <p>Confira os itens selecionados para seu evento.</p>
        </div>
    </section>

    <!-- Conteúdo do Carrinho -->
    <main class="cart-container">
        <h2>Seu Carrinho</h2>
        <div class="cart-items">
            <!-- Itens do carrinho serão adicionados aqui dinamicamente -->
        </div>
        <div class="cart-summary">
            <h3>Resumo do Pedido</h3>
            <p>Total de Itens: <span id="item-count">0</span></p>
            <p>Total: R$ <span id="total-price">0.00</span></p>
            <button class="btn btn-checkout">Finalizar Pedido</button>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <!-- Contate-nos -->
            <div class="contact-us">
                <h4>Contate-nos</h4>
                <form class="email-form">
                    <input type="email" placeholder="Digite seu e-mail" required>
                    <button type="submit">Enviar</button>
                </form>
                <div class="social-icons">
                    <a href="#"><img src="../Imagens/tela de vinhos/FACEBOOK RODAPE.png" alt="Facebook"></a>
                    <a href="#"><img src="../Imagens/tela de vinhos/INSTAGRAM RODAPE.png" alt="Instagram"></a>
                </div>
            </div>

            <!-- Sobre nós -->
            <div class="about-us">
                <h4>Sobre nós</h4>
                <ul>
                    <li><a href="#">Nossa empresa</a></li>
                    <li><a href="#">Missão, visão e valores</a></li>
                    <li><a href="#">Portfólio</a></li>
                </ul>
            </div>

            <!-- Siga-nos -->
            <div class="follow-us">
                <h4>Siga-nos</h4>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Linkedin</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="footer-text">Serviços de bar para casamento</p>
    </footer>
</body>
<script defer src="../JS/carrinho.js"></script>
</html>
