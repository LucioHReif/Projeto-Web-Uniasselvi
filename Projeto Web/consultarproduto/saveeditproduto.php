<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../src/assets/script.js"></script>
</head>

<body>
    <div>
        <?php
        if (isset($_POST['cpf_cliente'], $_POST['ordemdeservico'], $_POST['produto'], $_POST['desc_produto'], $_POST['cor_voltagem'], $_POST["emissao_nota"], $_POST['numero_nota'], $_POST['valor_produto'], $_POST['defeito'], $_POST["entrada_ga"])) {
            $host = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "assistencia";

            $conexao = mysqli_connect($host, $usuario, $senha, $banco);
            if (!$conexao) {
                die("Erro na conexão com o banco de dados" . mysqli_connect_error());
            }
            /*atualiza dos dados na tabela produto*/
            $cpf_cliente = $_POST['cpf_cliente'];
            $ordem = $_POST['ordemdeservico'];
            $nome = $_POST['produto'];
            $produto = $_POST['desc_produto'];
            $cor_volt = $_POST['cor_voltagem'];
            $eminota = $_POST["emissao_nota"];
            $numnota = $_POST['numero_nota'];
            $valorproduto = $_POST['valor_produto'];
            $defeito = $_POST['defeito'];
            $entrada_ga = $_POST["entrada_ga"];


            $query = "UPDATE produto SET ordemdeservico='$ordem',codigo='$nome',produto='$produto',cor_volt='$cor_volt',eminota='$eminota',numnota='$numnota',valorproduto='$valorproduto',defeito='$defeito',entrada_ga='$entrada_ga' WHERE cpf_cliente='$cpf_cliente'";
            $result = mysqli_query($conexao, $query);
            if ($result >= 1) {
                echo "<script>alert('Informações alteradas');window.location.href = '../consultarproduto/ordemdeservico.php';</script>";
            } else {
                echo "<script>alert('Informações não foram alteradas');window.location.href = '../consultarproduto/ordemdeservico.php';</script>";
            }
            mysqli_close($conexao);
        }
        ?>
    </div>

</body>

</html>