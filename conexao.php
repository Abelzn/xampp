<?php


$host    = "localhost";   
$usuario = "root";        
$senha   = "";            
$banco   = "abel-1d";      

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
?>

$conexao = mysqli_connect($host, $usuario, $senha, $banco);
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());

}
mysqli_set_charset($conexao, "utf8");
<?php
include "conexao.php";


$result = mysqli_query($conexao, "SELECT * FROM pedidos"); 
