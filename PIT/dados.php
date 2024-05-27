<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Dados</title>

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


  //Criar o comando
  $sql = 'SELECT * FROM informacoes ORDER BY id ASC';


 $usuario = $_POST ['usuariologin'];
 $senha = $_POST ['usuariosenha'];


 $resultado = $conn->query("SELECT senha FROM informacoes WHERE usuario = '$usuario'");

//echo $resultado;


if($resultado -> num_rows >0){
  $row = $resultado -> fetch_assoc();



} else {
 
    echo "Nenhum resultado encontrado";
}
if($senha == $row['senha'])
{
  ?>
<a href="pagina.php">Senha Correta</a>
<?php
}  else{
  ?>
  <a href="index.php">Senha incorreta</a>
<?php
  
}
//executar o comando
  $resultado = $conn->query($sql);

  ?>

</body>

</html>