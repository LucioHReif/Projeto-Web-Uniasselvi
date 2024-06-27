<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../src/assets/script.js"></script>
</head>

<body>
    <div>
        <?php
        if (isset($_POST['cpf'])) {
            $host = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "assistencia";

            $conexao = mysqli_connect($host, $usuario, $senha, $banco);
            if (!$conexao) {
                die("Erro na conexão com o banco de dados" . mysqli_connect_error());
            }
            /*deleta os dados das duas tabelas*/
            $cpf = $_POST['cpf'];
            $sqlselect = "SELECT * FROM cliente,produto WHERE cpf='$cpf' AND cpf_cliente='$cpf' ";
            $result = mysqli_query($conexao, $sqlselect);

            if ($result->num_rows > 0) {
                $query = "DELETE FROM cliente,produto USING cliente,produto WHERE cpf='$cpf' AND cpf_cliente='$cpf' ";
                $resultdelete = mysqli_query($conexao, $query);
                echo "<script>alert('Cadastro deletado com sucesso');window.location.href = '../excluir/excluirtudo.php';</script>";
            } else if ($result->num_rows === 0) {
                echo "<script>alert('CPF Não encontrado');window.location.href = '../excluir/excluirtudo.php';</script>";
            }
            mysqli_close($conexao);
        }
        ?>
    </div>
</body>

</html>