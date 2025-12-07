
<?php
// Configurações do banco de dados
$host    = "localhost"; // servidor do banco
$usuario = "root";      // usuário do banco
$senha   = " ";          // senha do banco
$banco   = "abel-1d";     // nome do banco de dados

// Conexão MySQLi
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Verifica se a conexão funcionou
if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

// Opcional: definir charset para evitar problemas com acentos
mysqli_set_charset($conexao, "utf8");

// Substituam os valores abaixo pelas credenciais da sua própria conta do Cloudinary
$cloud_name = "dngmrqhiw";  // exemplo: "meucloud123"
$api_key    = "917122161764841";     // exemplo: "123456789012345"
$api_secret = "GhO2VL_0yXl1Kga8Z-SveDesoGU";  // exemplo: "abcdeFGHijkLMNopqrstu"

?>

