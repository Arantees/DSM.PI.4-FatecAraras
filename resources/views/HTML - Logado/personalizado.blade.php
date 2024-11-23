<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Drinks - Personalize sua Bebida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/personalizado.css">
</head>
<body>
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="logo">K-DRINKS</h1>
            <div>
                <a href="#" class="text-dark me-3">Suporte</a>
                <a href="#" class="btn btn-dark">Entrar</a>
            </div>
        </div>
        
        <div class="content d-flex justify-content-center align-items-center mt-4">
            <div class="drink-image">
                <img src="../Imagens/Personalizar/Taça.svg" alt="Imagem da Taça" class="img-fluid">
            </div>
            <div class="drink-customize ms-4">
                <h2>PERSONALIZE SUA BEBIDA!</h2>
                <form>
                    <div class="mb-3">
                        <label for="customization" class="form-label">Digite o que deseja adicionar em sua bebida:</label>
                        <textarea class="form-control" id="customization" rows="5" placeholder="Exemplo: limão, hortelã, açúcar"></textarea>
                    </div>
                    <button type="button" class="btn btn-dark w-100">Adicionar no carrinho</button>
                </form>
            </div>
        </div>
    </div>

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