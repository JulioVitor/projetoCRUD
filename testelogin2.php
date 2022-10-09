<?php
    session_start();
    // print_r($_REQUEST);

    
    if(isset($_POST['submit']) && !empty($_POST['login']) && !empty($_POST['senha']))
    {
        // Acessa
        include('./conexao/conexao.php');
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);
        
        $sql = "SELECT * FROM usuarios WHERE login = '$login' and senha = '$senha'";
        
        $result = $conexao->query($sql);
        
        // print_r($sql);
        print_r($result);
        var_dump($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('Location: index.php');
        }
        else
        {
            $_SESSION['login'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: index.php');
    }
?>