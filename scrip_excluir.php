<!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>pesquisar</title>
  </head>
  

<?php

$mysqli = new mysqli('localhost','root','3211','empresa') or die(mysqli_error($mysqli));

if (isset($_GET['id_estoque'])){
    $id = $_GET['id_estoque'];

    $mysqli->query("DELETE FROM `estoque` WHERE id_estoque=$id") or die (mysqli->error());
   echo "O produto  foi excluido com sucesso";
}



?>
<a href="http://localhost/DesafioEstagio/lista.php/" class="btn btn-dark">voltar para a lista </a>
</body>
</html>
