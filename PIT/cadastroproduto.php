<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
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
            margin-top: 260px;
        }

        .title {
            margin-top: 200px;
        }
    </style>
</head>
<body>

    <form action="atualiza.php" method="post" class="needs-validation" novalidate>
        <div id="principal">
            <h1 class="title">Cadastrar Produto</h1>
            <div>
                <label for="">Nome do Produto</label>
                <input type="text" name="produto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div>
                <label for="">Descrição do produto</label>
                <input type="text" name="descricao"class="form-control" id="exampleInputPassword1">
            </div>

            <div>
                <label for="">Material do produto</label>
                <input type="text" name="material"class="form-control" id="exampleInputPassword1">
            </div>

            <div>
                <label for="">Tamanho do produto</label>
                <input type="text" name="tamanho"class="form-control" id="exampleInputPassword1">
            </div>

            <div>
            <button type="submit" class="btn btn-outline-primary">Cadastrar produto</button>
                <a href="pagina.php" class="btn btn-outline-primary mt-3">Voltar</a>
            </div>

        </div>
    </form>
</body>
</html>