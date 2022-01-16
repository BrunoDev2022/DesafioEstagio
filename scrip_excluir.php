<?php
include "conexao.php";
$pdo = new PDO('mysql:host=localhost;dbname=empresa','root','3211');

$id = "id_estoque";

$sql = $pdo->prepare("DELETE FROM `estoque` WHERE id_estoque=$id");
if($sql->execute()){
    echo "Finalizando...";
}

?>
<a href="http://localhost/DesafioEstagio/lista.php/" class="btn btn-dark">Voltar </a>