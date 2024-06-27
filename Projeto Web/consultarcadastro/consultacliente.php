<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
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
    <?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "assistencia";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);
    if (!$conexao) {
        die("Erro na conexão com o banco de dados" . mysqli_connect_error());
    }

    $cpf_cadastro = $_POST['cpf_cadastro'];

    $consulta = mysqli_query($conexao, "SELECT * FROM cliente, produto WHERE cpf='$cpf_cadastro' && cpf_cliente='$cpf_cadastro'");
    if (mysqli_num_rows($consulta)) {
        while ($resultado = mysqli_fetch_array($consulta)) {
            $cpf = $resultado['cpf'];
            $nome = $resultado['nome'];
            $telefone = $resultado['telefone'];
            $email = $resultado['email'];
            $endereco = $resultado['endereco'];
            $cidade = $resultado['cidade'];
            $cep = $resultado['cep'];
            $estado = $resultado['estado'];
            $ordem = $resultado['ordemdeservico'];
            $produto = $resultado['produto'];

        }
    } else {
        echo "<script>alert('Não encontrado');window.location.href = '../consultarcadastro/cadastro.php';</script>";
    }
    mysqli_close($conexao);
    ?>
    <div class="div-cliente-consultado">
        <form action="saveeditcliente.php" method="POST" id="consultadecadastro">
            <!--Os dados retornados preenchem os campos a seguir e o usuário pode editar os mesmos e salvar-->
            <div class="div-cliente-main">
                <h1><i class="fa fa-user-circle"></i> INFORMAÇÕES DO CLIENTE</h1>
                <div class="cliente-informacoes">
                    <div class="cliente-dados-pessoais">
                        <div class="inputs-consulta">
                            <label for="cpf">CPF:</label>
                            <input class="input-x" type="text" id="cpf" name="cpf" value="<?php echo $cpf ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="nome">Nome:</label>
                            <input class="input-x" type="text" id="nome" name="nome" value="<?php echo $nome ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="telefone">Telefone:</label>
                            <input class="input-x" type="text" id="telefone" name="telefone"
                                value="<?php echo $telefone ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="email">Email:</label>
                            <input class="input-x" type="e-mail" id="email" name="email" value="<?php echo $email ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="ordemdeservico">O.S.:</label>
                            <input class="input-x" type="text" id="ordemdeservico" name="ordemdeservico"
                                value="<?php echo $ordem ?>" readonly/>
                        </div>
                    </div>
                    <div class="cliente-dados-pessoais">
                        <div class="inputs-consulta">
                            <label for="endereco">Endereço:</label>
                            <input class="input-x" type="text" id="endereco" name="endereco"
                                value="<?php echo $endereco ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="cidade">Cidade:</label>
                            <input class="input-x" type="text" id="cidade" name="cidade"
                                value="<?php echo $cidade ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="cep">CEP:</label>
                            <input class="input-x" type="text" id="cep" name="cep" value="<?php echo $cep ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="estado">Estado:</label>
                            <input class="input-x" type="text" id="estado" name="estado"
                                value="<?php echo $estado ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="desc_produto">Produto:</label>
                            <input class="input-x" type="text" id="produto" name="desc_produto"
                                value="<?php echo $produto ?>" readonly/>
                        </div>
                    </div>
                </div>
                <div class="div-footer">
                    <button class="btn-save" type="button" onclick="updatecliente()"><i class="fa fa-check"></i>
                        Salvar</button>
                    <button class="btn-back" type="button" onclick="cadastroum()"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i> Voltar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>