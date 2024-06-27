<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem de serviço</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../src/assets/script.js"></script>
</head>

<body>
    <div class="nav-bar">
        <div class="div-logo-nav-bar">
            <img src="../src/assets/images/logo-navbar.png" alt="logo" onclick="home()">
        </div>
        <div class="div-btn-navbar">
            <button class="btn-navbar" type="button" onclick="cadastrar()"><i class="fa fa-user-circle"></i> Cadastrar
                Cliente</button>
            <button class="btn-navbar" type="button" onclick="cadastro()"><i class="fa fa-search"></i> Consultar
                Clientes</button>
            <button class="btn-navbar" type="button" onclick="cadastrarprod()"><i class="fa fa-pencil-square-o"
                    aria-hidden="true"></i> Cadastrar produto</button>
            <button class="btn-navbar" type="button" onclick="consulta()"><i class="fa fa-search"></i> Consultar
                Produtos</button>
            <button class="btn-navbar" type="button" id="delete" onclick="excluir()"><i class="fa fa-trash-o"
                    aria-hidden="true"></i> Excluir Cadastro</button>
        </div>
        <div class="div-btn-logout">
            <button class="btn-logout" id="exit" onclick="logout()"><i class="fa fa-sign-out"></i></button>
        </div>
    </div>
    <div class="div-form-consulta">
        <form class="form-consulta-produto" action="consultaproduto.php" method="post" id="formularioconsulta">
            <div class="div-consulta">
                <h1 class="title-consultar"><i class="fa fa-search"></i> CONSULTAR PRODUTO</h1>
                <div class="div-input-consulta">
                    <label class="label-consulta">O.S para Consultar Produto: </label>
                    <input class="input-x-consultar" type="text" id="ordemOS" name="ordemOS" />
                </div>
            </div>
            <div class="div-footer-consultar">
                <button class="btn-save" type="button" onclick="consultaOS()"><i class="fa fa-check"></i>
                    Consultar</button>
                <button class="btn-back" type="button" onclick="paginainicial()"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> Voltar</button>
            </div>
        </form>
    </div>
</body>

</html>