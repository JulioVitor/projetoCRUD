<?php

include('./conexao/conexao.php');



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/estilo.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 

    <title>PROJETO 01</title>
</head>
<div class="boxlogin">

  <div class="body">


    <form action="testeLogin2.php" method="POST">
      <label for="exampleInputLogin1">Login</label>
      <input type="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter login">
      <small id="emailHelp" class="form-text text-muted">Seu login estarar sempre seguro.</small>
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>

      <input class="btn" type="submit" name="submit" value="Login">

      <!-- <button type="button" class="btnlogin">LOGIN</button> -->


    </form>














    <?php if (isset($conn)) {
      mysqli_close($conn);
    }
    ?>

    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
</div>
</body>

</html>