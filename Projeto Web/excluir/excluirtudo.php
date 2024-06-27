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
    <div class="div-form-delete">
        <form class="form-delete-produto" action="deletecliente.php" method="POST" id="deletecpf">
            <!--envia os dados para deletecliente.php-->
            <h1 class="title-delete"><i class="fa fa-trash-o" aria-hidden="true"></i> EXCLUIR CADASTRO</h1>
            <div class="div-input-delete">
                <label class="label-delete">CPF do cliente: </label>
                <input class="input-x-deletar" type="text" id="cpf" name="cpf" maxlength="14"
                    oninput="formatarCPF(this)" required />
            </div>
            <div class="div-footer-deletar">
                <button class="btn-save" type="button" method="POST" id="del" onclick="deletarcad()"><i
                        class="fa fa-check"></i> Deletar</button>
                <button class="btn-back" type="button" onclick="paginainicial()"><i class="fa fa-arrow-left"
                        aria-hidden="true"></i> Voltar</button>
            </div>
        </form>
    </div>
</body>

</html>