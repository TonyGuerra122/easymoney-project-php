<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/jpg" href="/easymoney/assets/images/Logo_easy.png">
    <link href="/easymoney/src/css/login.css" rel="stylesheet">
</head>

<body class="corpo">
    <header class="form-header">
        <img src="/easymoney/assets/images/easymoney_login.png" alt="EASYMONEY">
    </header>
    <div class="form-gif">
        <img src="/easymoney/assets/images/banner/gif.gif" alt="">
    </div>
    <div class="container">
        <form class="box" id="login">
            <main class="form-main">
                <div class="form-input">
                    <p class="email">Email:</p>
                    <input type="email" name="email" id="email" placeholder="Digite o seu E-mail" required>
                </div>
                <div class="form-pass">
                    <p class="senha">Senha:</p>
                    <input type="password" name="password" id="password" placeholder="Digite a sua Senha" required>
                </div>
            </main>
            <footer class="form-footer">
                <div class="submit">
                    <input type="submit" value="Entrar">
                </div>
            </footer>
        </form>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/easymoney/src/js/Requester.js"></script>
    <script src="/easymoney/src/js/login.js"></script>

</body>

</html>