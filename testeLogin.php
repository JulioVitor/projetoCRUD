<?php

use LDAP\Result;

 include('./conexao/conexao.php');
 
 // print_r($_REQUEST);
 if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
 {
     $login = $_POST['login'];
     $senha = $_POST['senha'];


     $query = "SELECT * FROM usuarios WHERE login = '$login' and '$senha' ";

     $result = mysqli_query($conn, $query);   

       if(mysqli_num_rows($result)<1)
       {
        header('Location: index.php');
       }else{
        header('Location: sistema.php');
       }
    }else{
    
        header('Location: index.php');
    }





        //  print_r('Login:   ' . $login);
        // print_r('Senha:      ' . $senha);

       // $sql = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha' ";

        //$result = $conn->query($sql);

        // print_r($sql);
        // print_r($result);










?>