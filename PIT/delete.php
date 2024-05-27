<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Primeiro Projeto</title>
    <style type="text/css">
        body {
            margin: 20px;
        }
    </style>
</head>

<body>
    <?php
    $resultadoSelect = 0;
    $resultadoDelete;
    //dados de conexao
    $hostname = "localhost:3308";
    $username = "root";
    $password = "";
    $database = "bdescola1";

    //Conectar ao banco de dados
    try {
        $conn = new mysqli($hostname, $username, $password, $database);
    } catch (Exception $e) {
        die("Erro ao conectar:" . $e->getMessage());
    }

    if (isset($_GET['id'])) {
        //Criar o comando
        $sql = "SELECT * FROM aluno WHERE id = {$_GET['id']}";

        //executar o comando
        $resultadoSelect = $conn->query($sql);
    } else if (isset($_POST['submit'])) {
        //var_dump($_POST);
        $id = $_POST['id'];


        //Criar o comando

        $sql = "DELETE FROM aluno WHERE `id` = '$id'";

        // echo $sql;

        $resultadoDelete = $conn->query($sql);
    }



    ?>
    <div class="container">
        <h1 class="text-center">Deletar Aluno</h1>
        <?php if ($resultadoSelect) : ?>
            <?php foreach ($resultadoSelect as $r) : ?>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">


                    <div class="row">

                        <div class="col-md-2">
                            <label for="exampleInputText1" class="form-label">ID</label>
                            <input type="text" name="id" class="form-control" id="exampleInputText1" value="<?= $r['id'] ?>" disabled>
                            <input type="hidden" name="id" value="<?= $r['id'] ?>">
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-8">
                            <label for="exampleInputText1" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="exampleInputText1" value="<?= $r['nome'] ?>">
                        </div>


                        <div class="col-md-8">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $r['email'] ?>">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-outline-primary mt-3" name="submit">Deletar</button>
                    <a href="dados.php" class="btn btn-outline-primary mt-3">Ver dados</a>
    </div>
    </form>

<?php endforeach; ?>
    <?php elseif (isset($resultadoDelete)) : ?>
    <?php if ($resultadoDelete) : ?>
        <a href="index.php" class="btn btn-success mb-3">Inicio</a>
        <div class="alert alert-success" role="alert">
            Deletado com Sucesso!
        </div>
        <a href="dados.php" class="btn btn-outline-primary mt-3">Ver dados</a>
    <?php else : ?>
        <div class="alert alert-error" role="alert">
            Erro ao deletar!
        </div>
    <?php endif; ?>
<?php endif; ?>
</body>

</html>