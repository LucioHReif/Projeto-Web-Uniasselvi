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
        if (isset($_POST['cpf'], $_POST['nome'], $_POST['telefone'], $_POST['email'], $_POST['endereco'], $_POST['cidade'], $_POST['cep'], $_POST['estado'])) {
            $host = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "assistencia";

            $conexao = mysqli_connect($host, $usuario, $senha, $banco);
            if (!$conexao) {
                die("Erro na conexão com o banco de dados" . mysqli_connect_error());
            }
            /*atualiza os dados na tabela cliente*/
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $endereco = $_POST['endereco'];
            $cidade = $_POST['cidade'];
            $cep = $_POST['cep'];
            $estado = $_POST['estado'];

            $query = "UPDATE cliente SET cpf='$cpf',nome='$nome',telefone='$telefone',email='$email',endereco='$endereco',cidade='$cidade',cep='$cep',estado='$estado' WHERE cpf='$cpf'";
            $result = mysqli_query($conexao, $query);
            if ($result >= 1) {
                echo "<script>alert('Informações alteradas');window.location.href = '../consultarcadastro/cadastro.php';</script>";
            } else {
                echo "<script>alert('Informações não foram alteradas');window.location.href = '../consultarcadastro/cadastro.php';</script>";
            }
            mysqli_close($conexao);
        }
        ?>
    </div>

</body>

</html>