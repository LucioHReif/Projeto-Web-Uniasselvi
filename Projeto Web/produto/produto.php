<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
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
                    aria-hidden="true"></i>
                Cadastrar produto</button>
            <button class="btn-navbar" type="button" onclick="consulta()"><i class="fa fa-search"></i> Consultar
                Produtos</button>
            <button class="btn-navbar" type="button" id="delete" onclick="excluir()"><i class="fa fa-trash-o"
                    aria-hidden="true"></i>Excluir Cadastro</button>
        </div>
        <div class="div-btn-logout">
            <button class="btn-logout" id="exit" onclick="logout()"><i class="fa fa-sign-out"></i></button>
        </div>
    </div>
    <div class="div-cd-produto-main">
        <div class="div-titulo">
            <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastro de Produto</h1>
        </div>
        <form class="div-form" action="salvarproduto.php" method="post" id="formulariodois">
            <!--envia os dados para salvarproduto.php-->
            <div class="div-box-produto">
                <div class="div-inputs">
                    <input class="input-x" type="text" id="cpf_cliente" name="cpf_cliente" placeholder="CPF do cliente"
                        maxlength="14" oninput="formatarCPF(this)" required />
                    <input class="input-x" type="text" id="ordemdeservico" name="ordemdeservico"
                        placeholder="Ordem de serviço" />
                    <input class="input-x" type="text" id="nome" name="produto" placeholder="Código do produto" />
                    <input class="input-x" type="text" id="produto" name="desc_produto"
                        placeholder="Descrição do produto" />
                    <input class="input-x" type="text" id="cor_volt" name="cor_voltagem" placeholder="Cor/Voltagem" />
                </div>
                <div class="div-inputs">
                    <input class="input-x" type="text" id="eminota" name="emissao_nota"
                        placeholder="Data emissão da nota" oninput="formatarData(this)" />
                    <input class="input-x" type="text" id="numnota" name="numero_nota" placeholder="Número da nota" />
                    <input class="input-x" type="text" id="valorproduto" name="valor_produto"
                        placeholder="Valor do produto" />
                    <input class="input-x" type="text" id="defeito" name="defeito" placeholder="Defeito" />
                    <input class="input-x" type="text" id="entrada_ga" name="entrada_ga"
                        placeholder="Data de entrada em garantia" oninput="formatarData(this)" />
                </div>
            </div>
        </form>
        <div class="div-footer">
            <button class="btn-save" type="button" onclick="salvarprod()"><i class="fa fa-check"></i> Salvar</button>
            <button class="btn-back" type="button" onclick="paginainicial()"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i>Voltar</button>
        </div>
    </div>
    <script>
        document.getElementById("valorproduto").addEventListener("click", function () {
            if (this.value === "") {
                this.value = "R$";
            }
        })
    </script>
</body>

</html>