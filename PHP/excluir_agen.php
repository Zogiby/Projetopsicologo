<?php

    include_once("config1.php");

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM agendar WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<h2>Agendamento excluído com sucesso.</h2>";
    }else{
        echo "Não foi possível excluir o Agendamento.";
    }