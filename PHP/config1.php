<?php
  
  $conexao = mysqli_connect("localhost", "root", "");

  $bd = mysqli_select_db($conexao, "agendamentos");

?>
