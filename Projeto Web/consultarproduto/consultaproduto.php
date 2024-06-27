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
    /*conexão com o banco de dados*/
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "assistencia";

    $conexao = mysqli_connect($host, $usuario, $senha, $banco);
    if (!$conexao) {
        die("Erro na conexão com o banco de dados" . mysqli_connect_error());
    }
    /*Parâmetro passado pelo usuário para retornar algum valor, fazer a consulta dos dados na tabela produto*/
    $ordemOS = $_POST['ordemOS'];

    ($consulta = mysqli_query($conexao, "SELECT * FROM produto WHERE ordemdeservico='$ordemOS'"));
    if (mysqli_num_rows($consulta)) {
        while ($resultado = mysqli_fetch_array($consulta)) {
            $cpf_cliente = $resultado['cpf_cliente'];
            $ordem = $resultado['ordemdeservico'];
            $nomeproduto = $resultado['codigo'];
            $produto = $resultado['produto'];
            $cor_volt = $resultado['cor_volt'];
            $eminota = $resultado["eminota"];
            $numnota = $resultado['numnota'];
            $valorproduto = $resultado['valorproduto'];
            $defeito = $resultado['defeito'];
            $entrada_ga = $resultado["entrada_ga"];

        }
    } else {
        echo "<script>alert('Não encontrado');window.location.href = '../consultarproduto/ordemdeservico.php';</script>";
    }
    mysqli_close($conexao);
    ?>
    <div class="div-produto-consultado">
        <form action="saveeditproduto.php" method="POST" id="consultadeproduto">
            <!--Os dados retornados preenchem os campos a seguir e o usuário pode editar os mesmos e salvar-->
            <div class="div-produto-main">
                <h1><i class="fa fa-pencil-square-o" aria-hidden="true"></i> INFORMAÇÕES DO PRODUTO</h1>
                <div class="cliente-informacoes">
                    <div class="produtos-dados">
                        <div class="inputs-consulta">
                            <label for="cpf_cliente">CPF Cliente:</label>
                            <input class="input-x" type="text" id="cpf_cliente" name="cpf_cliente"
                                value="<?php echo $cpf_cliente ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="ordemdeservico">O.S.:</label>
                            <input class="input-x" type="text" id="ordemdeservico" name="ordemdeservico"
                                value="<?php echo $ordem ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="produto">Código:</label>
                            <input class="input-x" type="text" id="nome" name="produto"
                                value="<?php echo $nomeproduto ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="desc_produto">Descrição:</label>
                            <input class="input-x" type="text" id="produto" name="desc_produto"
                                value="<?php echo $produto ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="cor_voltagem">Cor/Voltagem: </label>
                            <input class="input-x" type="text" id="cor_volt" name="cor_voltagem"
                                value="<?php echo $cor_volt ?>" />
                        </div>
                    </div>
                    <div class="produtos-dados">
                        <div class="inputs-consulta">
                            <label for="emissao_nota">Data NF:</label>
                            <input class="input-x" type="text" id="eminota" name="emissao_nota"
                                value="<?php echo $eminota ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="entrada_ga">Entrada GA:</label>
                            <input class="input-x" type="text" id="entrada_ga" name="entrada_ga"
                                value="<?php echo $entrada_ga ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="numero_nota">Nº Nota:</label>
                            <input class="input-x" type="text" id="numnota" name="numero_nota"
                                value="<?php echo $numnota ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="valor_produto">Preço:</label>
                            <input class="input-x" type="text" id="valorproduto" name="valor_produto"
                                value="<?php echo $valorproduto ?>" />
                        </div>
                        <div class="inputs-consulta">
                            <label for="defeito">Defeito:</label>
                            <input class="input-x" type="text" id="defeito" name="defeito"
                                value="<?php echo $defeito ?>" />
                        </div>
                    </div>
                </div>
                <div class="div-footer">
                    <button class="btn-save" type="button" onclick="updateproduto()"><i class="fa fa-check"></i>
                        Salvar</button>
                    <button class="btn-back" type="button" onclick="consultaum()"><i class="fa fa-arrow-left"
                            aria-hidden="true"></i> Voltar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>