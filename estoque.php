
  <!doctype html>
<html lang="en">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>cadastro</title>
  </head>
  <body>
      <div class="container">
          <div class=row>
              <div class="col">
              <h1>cadastro de produtos</h1>
              <form  method="POST">
              
                
              <div class="mb-3">
    <label for="nome_produto">Nome produro</label>
    <input type="text" class="form-control" name="nome_produto" required>

    <div class="mb-3">
    <label for="descricao">descrição do produto</label>
    <input type="text" class="form-control" name="descricao" required>

              <div class="mb-3">
    <label for="valor_unitario">Valor unitario do Produto</label>
    <input type="text" class="form-control" name="valor_unitario"  value="R$">
              </div>

              <div class="mb-3">
    <label for="qtd_estoque">quantidade em estoque</label>
    <input type="text" class="form-control" name="qtd_estoque" >
              </div>
</form>
<input type="submit" class="btn btn-success"  name="acao" value="Adicionar ">

              
                   
                  
                  
                  
                 
                 

                 
             
            

              </div>
          </div>
      </div>

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <?php 
  
  $pdo = new PDO('mysql:host=localhost;dbname=empresa','root','3211');

  if (isset($_POST['acao'])){
    $nome_produto =$_POST['nome_produto'];
    $descricao  = $_POST['descricao'];
    $valor_unitario =$_POST['valor_unitario'];
    $qtd_estoque =$_POST['qtd_estoque'];
    

  $sql = $pdo->prepare("INSERT INTO `estoque` VALUES (null,?,?,?,?)");

  $sql->execute(array($nome_produto,$descricao,$valor_unitario,$qtd_estoque));
  echo 'Produto adicionado';
  }

  ?>
  <a href="http://localhost/DesafioEstagio/" class="btn btn-">Voltar </a>
</html>