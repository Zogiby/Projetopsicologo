<h2>Listagem de Agendamentos</h2>

<?php

    include_once("config1.php");

    $query = mysqli_query($conexao,"SELECT * FROM agendar");

    while($tabela = mysqli_fetch_array($query)){
        echo "Nome: $tabela[nome] <br>";
        echo "Idade: $tabela[idade] <br>";
        echo "Data: $tabela[dia] <br>";
        echo "Horario: $tabela[horario] <br>";
        echo "telefone: $tabela[telefone] <br>";
        echo "<a href=?pg=excluir_agen&id=$tabela[id]>[x] Excluir agendamento</a><br>";
        echo "<a href=?pg=form_altera_agen&codigo=$tabela[id]>[v] Alterar agendamento</a><br>";
        echo "<hr> <br>";
    }

    mysqli_close($conexao);