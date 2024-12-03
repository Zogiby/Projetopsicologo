<?php

    include_once("config1.php");

    $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

    $nome = $_REQUEST['nome'];
    $idade = $_REQUEST['idade'];
    $dia = $_REQUEST['dia'];
    $horario = $_REQUEST['horario'];
    $telefone = $_REQUEST['telefone'];

    $sql = "UPDATE agendar SET
    nome = '$nome', idade = '$idade', dia = '$dia', horario = '$horario', telefone = '$telefone' 
    WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2> Agendamento alterado com sucesso.</h2>";
    }else{
        echo "<h2> Não foi possível alterar o Agendamento.</h2>";
    }

    mysqli_close($conexao);