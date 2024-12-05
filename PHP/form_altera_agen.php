<?php

    include_once("config1.php");

    $sql = "SELECT id, nome, idade, dia, horario, telefone FROM agendar";

    $query = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($query);


?>

<h3> Alterar Agendamento</h3>
<form action="?pg=altera_agen" method="post">
    <input type="hidden" name="id" value="<?= $dados['id']; ?>">


    <label for="nome">Nome:</label>
    <input type="text" name="nome" value="<?= $dados['nome']; ?>"> <br>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" min="0" value="<?= $dados['idade']; ?>"> <br>

    <label for="data">Data para agendamento:</label>
    <input type="date" id="dia" name="dia" value="<?= $dados['dia']; ?>"> <br>

    <label for="horario">Horário:</label>
    <select id="horario" name="horario" value="<?= $dados['horario']; ?>"> <br>
        <option value="" disabled selected>Escolha um horário</option>
        <optgroup label="Manhã">
            <option value="07:00">7:00</option>
            <option value="09:00">9:00</option>
            <option value="11:00">11:00</option>
        </optgroup>
        <optgroup label="Tarde">
            <option value="13:00">13:00</option>
            <option value="15:00">15:00</option>
            <option value="18:00">18:00</option>
        </optgroup>
    </select>


    <label for="telefone">Telefone:</label>
    <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10,11}" placeholder="Apenas números" value="<?= $dados['telefone']; ?>"> <br>

    <button type="submit">Enviar</button>
</form>

