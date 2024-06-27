<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistência</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../src/assets/script.js"></script>
</head>

<body>
    <div class="nav-bar">
        <div class="div-logo-nav-bar">
            <img src="../src/assets/images/logo-navbar.png" alt="logo" onclick="home()">
        </div>
        <div class="div-btn-logout">
            <button class="btn-logout" id="exit" onclick="logout()"><i class="fa fa-sign-out"></i></button>
        </div>
    </div>
    <div class="div-pai">
        <h1>Bem vindo(a)</h1>
        <div class="div-pagina-inicial">
            <div class="div-btn-cadastrar">
                <button class="btn-x" type="button" onclick="cadastrar()"><i class="fa fa-user-circle"></i> Cadastrar
                    cliente</button><!--link para a página cliente.php-->
                <button class="btn-x" type="button" onclick="cadastrarprod()"><i class="fa fa-pencil-square-o"
                        aria-hidden="true"></i> Cadastrar
                    produto</button><!--link para a página produto.php-->
            </div>
            <div class="div-btn-consulta">
                <button class="btn-x" type="button" onclick="cadastro()"><i class="fa fa-search"></i> Consultar
                    Cliente</button><!--link para a página cadastro.php-->
                <button class="btn-x" type="button" onclick="consulta()"><i class="fa fa-search"></i> Consultar
                    Produto</button><!--link para a página ordemdeservico.php-->
            </div>
        </div>
        <!--<div class="div-btn-ax">
                <button class="btn-delete" type="button" id="delete" onclick="excluir()">Excluir
                    Cadastro</button>--><!--link para a página excluirtudo.php-->
        <!--<button class="btn-logout" type="button" id="exit"
                    onclick="logout()">Sair</button>--><!--link para a página index.php-->
        <!--</div>-->
    </div>
</body>

</html>