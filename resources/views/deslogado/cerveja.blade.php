<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Bebidas</title>
    <link rel="stylesheet" href="../CSS/vinho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Cabeçalho -->
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center baixo">
            <h1 class="logo">K-DRINKS</h1>
            <div>
                <a href="#" class="text-dark me-3 ajuste">Suporte</a>
                <a href="#" class="btn btn-dark">Entrar</a>
            </div>
        </div>


    <div class="container">
        <div class="row">
            <!-- Bebida 1 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="image-container">
                        <img src="../Imagens/tela de cervejas/Altbier.png" class="card-img-top" alt="Vinho tinto">
                        <div class="form-check">
                            <input class="form-check-input select-drink" type="checkbox" value="Vinho tinto" id="drink1">
                            <label class="form-check-label" for="drink1"></label>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Altbier</h5>
                        <p class="card-text">250ml</p>
                        <p class="card-text">A crisp and refreshing lager with a smooth finish and hints of malt.</p>
                    </div>
                </div>
            </div>

            <!-- Bebida 2 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="image-container">
                        <img src="../Imagens/tela de cervejas/Artesanal.png" class="card-img-top" alt="Vinho branco">
                        <div class="form-check">
                            <input class="form-check-input select-drink" type="checkbox" value="Vinho branco" id="drink2">
                            <label class="form-check-label" for="drink2"></label>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Cerveja artesanal</h5>
                        <p class="card-text">250ml</p>
                        <p class="card-text">A crisp and refreshing lager with a smooth finish and hints of malt.</p>
                    </div>
                </div>
            </div>

            <!-- Bebida 3 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="image-container">
                        <img src="../Imagens/tela de cervejas/Chopp.png" class="card-img-top" alt="Espumante">
                        <div class="form-check">
                            <input class="form-check-input select-drink" type="checkbox" value="Espumante" id="drink3">
                            <label class="form-check-label" for="drink3"></label>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Chopp</h5>
                        <p class="card-text">250ml</p>
                        <p class="card-text">A crisp and refreshing lager with a smooth finish and hints of malt.</p>
                    </div>
                </div>
            </div>

            <!-- Bebida 4 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="image-container">
                        <img src="../Imagens/tela de cervejas/Red Ale.png" class="card-img-top" alt="Vinho licoroso">
                        <div class="form-check">
                            <input class="form-check-input select-drink" type="checkbox" value="Vinho licoroso" id="drink4">
                            <label class="form-check-label" for="drink4"></label>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Red Ale</h5>
                        <p class="card-text">250ml</p>
                        <p class="card-text">A crisp and refreshing lager with a smooth finish and hints of malt.</p>
                    </div>
                </div>
            </div>

            <!-- Bebida 5 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="image-container">
                        <img src="../Imagens/tela de cervejas/Sour.png" class="card-img-top" alt="Vinho seco">
                        <div class="form-check">
                            <input class="form-check-input select-drink" type="checkbox" value="Vinho seco" id="drink5">
                            <label class="form-check-label" for="drink5"></label>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sour</h5>
                        <p class="card-text">250ml</p>
                        <p class="card-text">A crisp and refreshing lager with a smooth finish and hints of malt.</p>
                    </div>
                </div>
            </div>

            <!-- Bebida 6 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="image-container">
                        <img src="../Imagens/tela de cervejas/Stout.png" class="card-img-top" alt="Vinho laranja">
                        <div class="form-check">
                            <input class="form-check-input select-drink" type="checkbox" value="Vinho laranja" id="drink6">
                            <label class="form-check-label" for="drink6"></label>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Stout</h5>
                        <p class="card-text">250ml</p>
                        <p class="card-text">A crisp and refreshing lager with a smooth finish and hints of malt.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="botao-container">
            <button class="botao" id="addToCartBtn">Adicionar no carrinho</button>
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

    <script src="../Javascript/cerveja.js"></script>
</body>
</html>
