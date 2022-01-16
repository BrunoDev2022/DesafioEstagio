<?php 
  include "conexao.php";
  
  $pdo = new PDO('mysql:host=localhost;dbname=empresa','root','3211');
   
  if (isset($_POST['acao'])){
    $nome_produto = $_POST['nome_produto'];
    $descricao  = $_POST['descricao'];
    $valor_unitario = $_POST['valor_unitario'];
    $qtd_estoque = $_POST['qtd_estoque'];
    

   $sql = $pdo->prepare("INSERT INTO `estoque` VALUES (null,?,?,?,?)");

  $sql->execute(array($nome_produto,$descricao,$valor_unitario,$qtd_estoque));
  echo 'Produto adicionado';
  }

  

  $sql = "UPDATE `estoque` SET `nome_produto` = '$nome_produto' ,`descricao` = '$descricao' , `valor_unitario` = '$valor_unitario' , 
  `qtd_estoque` = '$qtd_estoque' 
          WHERE `id_estoque` = $id";

          

          if (mysqli_query($conn, $sql)) {
              echo "produto alterado  com sucesso";
          }else
              echo "produto não alterado ";

  ?>
  <a href="http://localhost/DesafioEstagio/lista.php/" class="btn btn-">Voltar </a>