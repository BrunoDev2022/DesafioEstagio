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
  <body>
   

   <?php 


   if (isset($_POST['busca'])) {
     $pesquisa = $_POST['busca'];
   } else {
     $pesquisa = '';
   }
   /*essa biblioteca que estou incluido faz a conexão como banco*/
   include "conexao.php";

   $sql = "SELECT * FROM estoque WHERE nome_produto LIKE '%$pesquisa%'";/*ferramenta de busca*/


   $dados = mysqli_query($conn, $sql);/*metodo de conexão*/

   ?>


      <div class="container">
          <div class=row>
              <div class="col">
              <h1>Estoque</h1><br>
              <nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="lista.php" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Nome do produto" aria-label="Search" name="busca" autofocus><br>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">pesquisar</button>
    <a href="http://localhost/DesafioEstagio/" class="btn btn-danger">voltar </a>
    <a href="http://localhost/desafioEstagio/estoque.php/" class="btn btn-primary">Adicionar produtos ao estoque </a> 
    <a href="http://localhost/DesafioEstagio/lista.php/" class="btn btn-dark">Atualizar lista </a>
  </form>
</nav>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome do produto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor unitario do produto</th>
      <th scope="col">Quantidade em estoque</th>
      <th scope="col">Gerenciar estoque</th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
   while ($linha = mysqli_fetch_assoc($dados) ) {
    $id =$linha['id_estoque'];
    $nome_produto =$linha['nome_produto'];
    $descricao  = $linha['descricao'];
    $valor_unitario =$linha['valor_unitario']; 
    $qtd_estoque =$linha['qtd_estoque'];

    echo "<tr>
    <th scope='row'>$nome_produto</th>
    <td>$descricao</td>
    <td>$valor_unitario</td>
    <td>$qtd_estoque</td>
    <td ><a href='http://localhost/DesafioEstagio/estoque_edite.php?id_estoque=$id' class='btn btn-success'>Editar</a>
    <a href='http://localhost/DesafioEstagio/scrip_excluir.php?id_estoque=$id' class='btn btn-dark'>Excluir</a>
    </td>
 
    </tr>";

   }
  ?>
  

  </tbody>
</table>    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
