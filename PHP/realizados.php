<?php

include('seg.php');

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f8e9;
            margin: 0;
            padding-top: 100px;
            padding-left: 420px;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #004d40;
        }

        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        h1 {
            color: #00796b;
            font-size: 36px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        p {
            font-size: 18px;
            color: #00796b;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #00796b;
            padding: 15px 30px;
            border-radius: 4px;
            font-size: 18px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #004d40;
        }

        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #00796b;
        }

    </style>
</head>

<body>
    <div class="container">
        <h1>Painel Admin</h1>
        <p>Bem-vindo, <?php echo $_SESSION['nome']; ?> </p>

        <div class="teste">
            <a href="?pg=lista_agen">Lista de Agendamentos</a>
        </div>

        <p> <a href="login.php">Sair</a> </p>
    </div>

</body>
</html>

<?php

if(empty($_SERVER['QUERY_STRING'])){
    $var = "conteudo.php";
}else{
    $pg = $_GET['pg'];
    include_once("$pg.php");
}
?>