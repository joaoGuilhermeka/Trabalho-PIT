<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Market Tiger</title>
    <style type="text/css">
        body {
            margin: 30px;
            
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        #principal {
            width: 600px;
            margin: 0 auto;
        }

        .title {
            margin-top: 200px;
        }

        

        h3 {
            color: #616166;
        }
    </style>
</head>
<body>
    <div class="title">
        <h1 class="text-center">Cadastro</h1>
        <h3 class="text-center">Market Tiger</h3>
    </div>
    
    <form action="insert.php" method="post" class="needs-validation" novalidate>
        <div id="principal">

            <div>
                <label for="">Usuário</label>
                <input type="text" name="usuario" class="form-control" id="exampleInputEmail1">
            </div>

            <div>
                <label for="">E-mail</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div>
                <label for="">Telefone</label>
                <input type="number" name="telefone" class="form-control" id="exampleInputEmail1">
            </div>

            <div>
                <label for="">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
            </div>

        


            <div>
            <button type="submit" class="btn btn-outline-primary">Cadastrar</button>

                <a href="index.php" class="btn btn-outline-primary mt-3">Voltar</a>
            </div>

        </div>
    </form>

</body>

</html>