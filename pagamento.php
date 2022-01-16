

<!doctype html>
<html>
  <head>
    <title>pagamento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
  </head>
  <body>
    
    <div class="container">
          <div class=row>
              <div class="col">
              <h2>Pagamento</h2>
    <div class="mb-3">
    
    <form  acitio="validacao" method="POST">
      
    
    <label for="titular"></label>
    <input type="text"  name="titular" required  placeholder="Titular"><br>
    <br>
    <label for="numero_cartao"></label>
  <input  name="numero_cartao" required  placeholder="numero do impresso no cartão" minlength="16" maxlength="16"/>

  <label for="data_espiracao"></label>
  <input  name="data_espiracao"  required placeholder="MM / YY" minlength="5" maxlength="5" />

  <label for="data_espiracao"></label>
  <input  name="cvv" required  placeholder="CVC" minlength="3" maxlength="3" />
   
    <br><hr>
    
    <select name="bandeira" >
  <option selected>Selecione a bandeira do seu cartão</option>
  <option value="Visa">Visa</option>
  <option value="MasterCard">MasterCard</option>
  <option value="HiperCard">HiperCard</option>
  <option value="Elo">Elo</option>
    </select>
    <img class="bannd" src="https://caminhomar.com.br/wp-content/uploads/2014/07/cartao-768x213.png" 
    width="400" height="75">
    <hr>
    <div class="mb-3">
    <label for="valor"></label><p>insira ,00 depois de digitar o valor<p>
    <input  type="text"  name="valor" required   placeholder="R$" minlength="6"/>R$valor,00
    <br><hr>
    <select name="dividido" >
  <option  required selected>Selecione em quantas veses deseja dividir </option>
  <option value="1x">1x</option>
  <option value="2x">2x</option>
  <option value="3x">3x</option>
  <option value="4x">4x</option>
  <option value="5x">5x</option>
  <option value="6x">6x</option>
  <option value="7x">7x</option>
  <option value="8x">8x</option>
  <option value="9x">9x</option>
  <option value="10x">10x</option>
    </select>
     <input  type="submit" class="btn btn-dark"  name="acao" value="PAGAR "> 
     <hr>
     <a href="http://localhost/DesafioEstagio/" class="btn btn-danger">Voltar </a>

    </form>

    
    
    </div>
          </div>
              </div>
    </div>
   
  </body>
  <?php 
  
  $pdo = new PDO('mysql:host=localhost;dbname=empresa','root','3211');
          
          if (isset($_POST['acao'])){
           $titular =$_POST['titular'];
           $numero_cartao  = $_POST['numero_cartao'];
           $cvv =$_POST['cvv'];
           $data_espiracao =$_POST['data_espiracao'];
           $bandeira =$_POST['bandeira'];
           $valor =$_POST['valor'];
           $dividido =$_POST['dividido'];

  $sql = $pdo->prepare("INSERT INTO `pagamento` VALUES (null,?,?,?,?,?,?,?)");

  $sql->execute(array($titular,$numero_cartao,$cvv,$data_espiracao,$bandeira,$valor,$dividido));
  echo 'Pagamento realizado';
          }else 
          echo 'pagamentos abaixo de R$100 nao serão realizados.';
          
       
?>
<br>



</html>