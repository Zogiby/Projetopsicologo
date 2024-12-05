<?php
$usuario = "luan";
$senha = "123";
$database = "login1";
$host = "localhost";

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->connect_error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->connect_error);
}
?>
