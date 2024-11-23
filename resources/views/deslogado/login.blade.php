
<x-layout>
    <div class="container">
        <div class="imagem-container">
            <img src={{asset('images/login/tela_login.png')}} alt="Imagem da tela de login">
        </div>
        <div class="forms-login">
            <h2>Conecte-se</h2>
            <p>Festeje utilizando nossos serviços de bar para casamento:</p>
            <form>
                <label for="email">Insira seu endereço de e-mail</label>
                <input type="email" id="email" placeholder="email@gmail.com" required>

                <label for="password">Entre com sua senha</label>
                <input type="password" id="password" placeholder="******" required>

                <div class="opcoes-forms">
                    <label><input type="checkbox"> Lembre de mim</label>
                    <a href="#" class="esqueci-senha">Esqueci a senha</a>
                </div>

                <button type="submit" onclick="window.location.href='../HTML - Logado/index.html'">Entrar</button>

                <div class="divider">ou</div>

                <div class="social-login">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-google"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <a href="../HTML/cadastro.html" type="submit">Registrar-se</a>

            </form>

        </x-layout>