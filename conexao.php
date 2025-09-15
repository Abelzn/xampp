<?php

$host    = "localhost";  
$usuario = "root";        
$senha   = "";            
$banco   = "Abel-1D";     

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");


include "conexao.php"; 

$result = mysqli_query($conexao, "SELECT * FROM recados"); 