<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>K-Drinks</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/servicos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/personalizado.css') }}">

</head>
<body>
     <!-- Cabeçalho -->
     <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center baixo">
            <h1 class="logo">K-DRINKS</h1>
            <div>
                <a href="#ancora" class="text-dark me-3 ajuste">Suporte</a>
                <a href="{{ route('login') }}" class="btn btn-dark">Entrar</a>
            </div>
        </div>

    {{$slot}}

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