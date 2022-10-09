<?php

include('./conexao/conexao.php');

//var_dump($conn);

if(isset($_POST['submit'])){
    $nome = ($_POST['nome']);
   $login = ($_POST['login']);
   $senha = ($_POST['senha']);
   $loja = ($_POST['loja']);
    $query = "INSERT INTO usuarios(nome, login, senha, loja)VALUES('$nome', '$login', '$senha', '$loja')";

    
  $result = mysqli_query($conn, $query);
    
   var_dump($conn);
   }

   




// include('../conexao/conexao.php');

// if(isset($_POST['submit'])){
//     print_r($_POST['nome']);
//     print_r($_POST['login']);
//     print_r($_POST['senha']);
//     print_r($_POST['loja']);

// }

// $nome = ($_POST['nome']);
// $login = ($_POST['login']);
// $senha = ($_POST['senha']);
// $loja = ($_POST['loja']);

// $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, login, senha, loja)VALUES('$nome', '$login', '$senha', '$loja')");

?> 