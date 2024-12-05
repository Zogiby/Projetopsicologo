
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .lista {
            display: flex;
            flex-direction: row; 
            gap: 10px;
            width: 50%;
        }
    </style>

</head>
<body>
    
    <div class="lista">
        <h2>Listagem de Agendamentos</h2>
    </div>

</body>
</html>



<div class="lista">
    <?php

        include_once("config1.php");

        $query = mysqli_query($conexao,"SELECT * FROM agendar");

        while($tabela = mysqli_fetch_array($query)){
            echo "<div>";
            echo "Nome: {$tabela['nome']} <br>";
            echo "Idade: {$tabela['idade']} <br>";
            echo "Data: {$tabela['dia']} <br>";
            echo "Horário: {$tabela['horario']} <br>";
            echo "Telefone: {$tabela['telefone']} <br>";
            echo "<hr>";
            echo "<a href='?pg=excluir_agen&id={$tabela['id']}'>[x] Excluir agendamento</a><br>";
            echo "<br>";
            echo "<a href='?pg=form_altera_agen&codigo={$tabela['id']}'>[v] Alterar agendamento</a><br>";
            echo "</div>";
            echo "<hr>";
        }

        mysqli_close($conexao);
?>
</div>