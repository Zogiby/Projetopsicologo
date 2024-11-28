<?php

    include_once("config1.php");

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $dia = $_POST['dia'];
    $horario = $_POST['horario'];
    $telefone = $_POST['telefone'];

    $sql = "INSERT INTO agendar 
    (nome, idade, dia, horario, telefone) 
    VALUES 
    ('$nome','$idade','$dia','$horario','$telefone')";

    $query = mysqli_query($conexao,$sql);

   header("location: ../agradecimento.html");

    mysqli_close($conexao);

?>