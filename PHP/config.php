<?php
$servername = "127.0.0.1";
$username = "luan";
$password = "1234";

// Criar conexãoo
$conn = new mysqli($servername, $username, $password);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>