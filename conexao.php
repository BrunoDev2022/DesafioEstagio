<?php 
/*um arquivo de conexão externo*/
$serve = "localhost";
$user = "root";
$pass = "3211";
$bd = "empresa";



 if ( $conn = mysqli_connect($serve, $user, $pass, $bd)) {
   // echo "conectado...";
 } else 
 echo "erro";
 


 
 

?>