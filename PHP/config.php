<?php
    $usuario = 'luan';
    $senha = '123';
    $database = 'login1';
    $host = 'localhost';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error){
        die("Falha ao conectar ao Banco de Dados: " . $mysqli->error);
    }

?>





