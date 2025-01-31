<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>market tiger</title>
</head>

<body>
    <?php
    //dados de conexao
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "cadastro";

    //Conectar ao banco de dados
    try {
        $conn = new mysqli($hostname, $username, $password, $database);
    } catch (Exception $e) {
        die("Erro ao conectar:" . $e->getMessage());
    }

    //recebendo variaveis do formulario
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
   

    if (empty($usuario) || empty($email) || empty($telefone) || empty($senha)):
    ?>
        <div class="alert alert-warning" role="alert">
            Dados nao podem ficar vazios!
        </div>
    <?php
    else :


        //Criar o comando
        $sql = "INSERT INTO informacoes VALUES(NULL, '$usuario', '$email', '$telefone', '$senha')";

        //executar o comando
        $resultado = $conn->query($sql);

    ?>
        <?php if ($resultado) : ?>
            <div class="alert alert-success" role="alert">
                Dado inserido com sucesso!
            </div>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                Erro ao inserir o dado!
                
            </div>
            
        <?php endif; ?>
    <?php endif; ?>

    <a href="index.php" class="btn btn-outline-primary">Início</a>

</body>

</html>