<?php

$servername = "127.0.0.1";
$username = "luan";
$password = "123";
$dbname = "login";

// Criar conexãoo
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>





