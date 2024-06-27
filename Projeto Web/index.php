<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"><!--link para a página de estilo-->
    <script type="text/javascript" src="src/assets/script.js"></script><!--link para a página de script-->
</head>
<!--página de login-->

<body>
    <div class="div-pai">
        <div class="div-login">
            <form class="form-login" method="post">
                <img src="src/assets/images/logo.png" alt="logo">
                <div class="campos-login">
                    <input class="input-login" id="usuario" type="text" name="usuario" placeholder="Usuário" />
                    <input class="input-login" id="senha" type="password" name="senha" placeholder="Senha" />
                    <div class="div-button">
                        <button class="button-login" type="button" onclick="logar()">LOGIN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>