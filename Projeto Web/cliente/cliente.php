<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
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
                    aria-hidden="true"></i>Excluir Cadastro</button>
        </div>
        <div class="div-btn-logout">
            <button class="btn-logout" id="exit" onclick="logout()"><i class="fa fa-sign-out"></i></button>
        </div>
    </div>
    <div class="div-pai">
        <div class="div-titulo">
            <h1><i class="fa fa-user-circle"></i>Cadastro de Cliente</h1>
        </div>
        <form class="div-form" action="salvar.php" method="post" id="formularioum"><!--envia os dados para salvar.php-->
            <div class="div-cd-cliente">
                <div class="div-inputs">
                    <input class="input-x" type="text" id="nome" name="nome" placeholder="Nome" />
                    <input class="input-x" type="text" id="cpf" name="cpf" placeholder="CPF" maxlength="14"
                        oninput="formatarCPF(this)" required />
                    <input class="input-x" type="text" id="telefone" name="telefone" placeholder="Telefone"
                        maxlength="15" oninput="formatarTelefone(this)" required />
                    <input class="input-x" type="e-mail" id="email" name="email" placeholder="E-mail" />
                </div>
                <div class="div-inputs">
                    <input class="input-x" type="text" id="endereco" name="endereco" placeholder="Endereço" />
                    <input class="input-x" type="text" id="cidade" name="cidade" placeholder="Cidade" />
                    <input class="input-x" type="text" id="cep" name="cep" placeholder="CEP" maxlength="9"
                        oninput="formatarCEP(this)" required />
                    <input class="input-x" type="text" id="estado" name="estado" placeholder="Estado" />
                </div>
            </div>
        </form>
        <div class="div-footer">
            <button class="btn-save" type="button" onclick="salvar()"><i class="fa fa-check"></i>Salvar</button>
            <button class="btn-back" type="button" onclick="paginainicial()"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i>Voltar</button>
        </div>
    </div>
</body>

</html>