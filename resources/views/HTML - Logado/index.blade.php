<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Drinks</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>

    <!-- Cabeçalho -->
    <header class="header">
        <h1>K-Drinks</h1>
        <div class="user-welcome">Bem-vindo, [user]</div>
    </header>

    <!-- Banner com imagem -->
    <section class="banner">
        <img src="../Imagens/menu/ImgPrincipal.png" alt="Banner de fundo" class="banner-img"> <!-- Substitua pela imagem correta do banner -->
        <div class="banner-content">
            <h2>Desbloqueie sua melhor experiência de bar para seu casamento</h2>
            <p>Garanta um dia especial com nossos serviços pelo melhor preço do mercado!</p>
            <button class="btn-banner">Nossos serviços</button>
        </div>
    </section>

    <!-- Seção de Serviços -->
    <section class="options">
        <div class="option-card">
            <a href="#">
                <img src="../Imagens/menu/Portifolio.png" alt="Portfólio" class="card-img">
                <div class="text_menu">Portfólio</div>
            </a>
        </div>
        <div class="option-card">
            <a href="#">
                <img src="../Imagens/menu/Nossos_drinks.png" alt="Nossos drinks" class="card-img">
                <div class="text_menu">Nossos drinks</div>
            </a>
        </div>
        <div class="option-card">
            <a href="#">
                <img src="../Imagens/menu/Cerveja.png" alt="Tipos de cerveja" class="card-img">
                <div class="text_menu">Tipos de cerveja</div>
            </a>
        </div>
        <div class="option-card">
            <a href="#">
                <img src="../Imagens/menu/Personalizar.png" alt="Personalizar" class="card-img">
                <div class="text_menu">Personalizar</div>
            </a>
        </div>
        <div class="option-card">
            <a href="#">
                <img src="../Imagens/menu/Vinho.png" alt="Vinhos" class="card-img">
                <div class="text_menu">Vinhos</div>
            </a>
        </div>
        <div class="option-card">
            <a href="#">
                <img src="../Imagens/menu/serviços.png" alt="Serviços" class="card-img">
                <div class="text_menu">Serviços</div>
            </a>
        </div>
        <div class="option-card">
            <a href="#">
                <img src="../Imagens/menu/Parcerias.png" alt="Parcerias" class="card-img">
                <div class="text_menu">Parcerias</div>
            </a>
        </div>
        <div class="option-card">
            <a href="#">
                <img src="../Imagens/menu/Feedbacks.png" alt="Feedbacks" class="card-img">
                <div class="text_menu">Feedbacks</div>
            </a>
        </div>
    </section>

    <!-- Seção de itens populares -->
    <section class="popular-items">
        <h3 class="section-title">Top 4 populares do momento:</h3>
        <p class="section-subtitle">Veja as bebidas mais populares pedidas neste mês</p>
        <div class="popular-grid">

            <!-- Produto 1 -->
            <div class="product-card">
                <img src="../Imagens/menu/Cerveja-artesanal.png" alt="Cerveja artesanal 250ml" class="product-img">
                <div class="product-info">
                    <h4>Cerveja artesanal 250ml</h4>
                    <p>R$ 12,00</p>
                    <button class="btn-product">Ver</button>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="product-card">
                <img src="../Imagens/menu/Coquetel.png" alt="Coquetel de laranja 430ml" class="product-img">
                <div class="product-info">
                    <h4>Coquetel de laranja 430ml</h4>
                    <p>R$ 38,00</p>
                    <button class="btn-product">Ver</button>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="product-card">
                <img src="../Imagens/menu/Cha.png" alt="Chá de camomila com whisky - 100ml" class="product-img">
                <div class="product-info">
                    <h4>Chá de camomila com whisky - 100ml</h4>
                    <p>R$ 17,00</p>
                    <button class="btn-product">Ver</button>
                </div>
            </div>

            <!-- Produto 4 -->
            <div class="product-card">
                <img src="../Imagens/menu/Batida.png" alt="Batida de limão alcoólico 430ml" class="product-img">
                <div class="product-info">
                    <h4>Batida de limão alcoólico 430ml</h4>
                    <p>R$ 26,00</p>
                    <button class="btn-product">Ver</button>
                </div>
            </div>

        </div>
    </section>
        <!-- Seção de Semi-Portfólio -->
        <section class="portfolio">
            <h3 class="section-title">Semi-portfólio</h3>
            <p class="section-subtitle">Algumas experiências de nossos antigos clientes:</p>
            <div class="portfolio-gallery">
                <img src="../Imagens/menu/img1.png" alt="Imagem de portfólio 1">
                <img src="../Imagens/menu/img2.png" alt="Imagem de portfólio 2">
                <img src="../Imagens/menu/img3.png" alt="Imagem de portfólio 3">
                <img src="../Imagens/menu/img4.png" alt="Imagem de portfólio 4">
                <img src="../Imagens/menu/img5.png" alt="Imagem de portfólio 5">
            </div>
            <p class="section-subtitle">Você pode visualizar o portfólio completo clicando em:</p>
            <button class="btn-portfolio espaco">Portfólio</button>
        </section>
    
        <!-- Seção de Feedback -->
        <section class="feedback">
            <h3>Dê seu feedback:</h3>
            <div class="feedback-container">
                <img src="../Imagens/menu/star.png" alt="Ícone de estrela" class="star-img">
                <textarea placeholder="No que podemos melhorar?"></textarea>
                <button class="btn-feedback">Enviar</button>
            </div>
        </section>
        
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
</html>
