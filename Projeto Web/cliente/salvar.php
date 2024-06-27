<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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

        /*método para inserir dados no banco de dados da tabela cliente*/
        $cpf = $_POST['cpf'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];

        $consulta = mysqli_query($conexao, "SELECT * FROM cliente AS c WHERE c.cpf='$cpf' LIMIT 1");
        if (mysqli_num_rows($consulta) > 0) {
            echo "<script>alert('CPF já cadastrado');</script>";
        } else if (mysqli_query($conexao, "INSERT INTO cliente(cpf,nome,telefone,email,endereco,cidade,cep,estado) VALUES('$cpf','$nome','$telefone','$email','$endereco','$cidade','$cep','$estado')")) {
            echo "<script>alert('Informações cadastradas com sucesso');</script>";
        } else {
            echo "<script>alert('Informações não foram cadastradas');</script>";
        }

        mysqli_close($conexao);
        ?>
        <script>
            window.location.href = '../cliente/cliente.php';
        </script>
    </div>
</body>

</html>