<?php 
$server = "localhost";
$user = "root";
$pass = "";
$bd = "bd_jvelha";

$conexao = mysqli_connect($server,$user,$pass,$bd);
if (mysqli_connect_errno()) {
    printf("Erro na Conexão: %s\n", mysqli_connect_error());
    exit();
}
mysqli_query($conexao, 'SET NAMES utf8;');

?>