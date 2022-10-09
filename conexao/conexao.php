<?php

$host="localhost";
$user="root";
$password="";
$db="estoque";


$conn = new MySQLi($host, $user, $password, $db);
if($conn->connect_error){
   echo "Desconectado! Erro: " . $conn->connect_error;
}
?>