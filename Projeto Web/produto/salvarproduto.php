<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../src/assets/script.js"></script>
</head>

<body>
    <div>
        <?php
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "assistencia";

        $conexao = mysqli_connect($host, $usuario, $senha, $banco);
        if (!$conexao) {
            die("Erro na conexão com o banco de dados" . mysqli_connect_error());
        }
        /*método para inserir dados na tabela produto*/
        $cpf_cliente = $_POST['cpf_cliente'];
        $ordem = $_POST['ordemdeservico'];
        $nome = $_POST['produto'];
        $produto = $_POST['desc_produto'];
        $cor_volt = $_POST['cor_voltagem'];
        $eminota = $_POST['emissao_nota'];
        $numnota = $_POST['numero_nota'];
        $valorproduto = $_POST['valor_produto'];
        $defeito = $_POST['defeito'];
        $entrada_ga = $_POST['entrada_ga'];

        $consulta = mysqli_query($conexao, "SELECT * FROM produto AS p WHERE p.ordemdeservico='$ordem' LIMIT 1");
        if (mysqli_num_rows($consulta) > 0) {
            echo "<script>alert('Erro ordem de serviço já cadastrada');</script>";
        } else if (mysqli_query($conexao, "INSERT INTO produto(cpf_cliente,ordemdeservico,codigo,produto,cor_volt,eminota,numnota,valorproduto,defeito,entrada_ga) VALUES('$cpf_cliente','$ordem','$nome','$produto','$cor_volt','$eminota','$numnota','$valorproduto','$defeito','$entrada_ga')")) {
            echo "<script>alert('Informações cadastradas com sucesso');</script>";
        } else {
            echo "<script>alert('Informações não foram cadastradas');</script>";
        }
        mysqli_close($conexao);
        ?>
        <script>
            window.location.href = '../produto/produto.php';
        </script>
    </div>
</body>

</html>