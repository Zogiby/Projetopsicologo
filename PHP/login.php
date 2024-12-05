<?php
include('config.php');

if (isset($_POST['usuario']) || isset($_POST['senha'])) {
    if (strlen($_POST['usuario']) == 0) {
        echo "<p style='color: red;'>Preencha seu usuário</p>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<p style='color: red;'>Preencha sua senha</p>";
    } else {
        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: realizados.php");
        } else {
            echo "<p style='color: red;'>Falha ao logar! Usuário ou senha incorretos</p>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f8f6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #00796b;
            margin-bottom: 20px;
            font-size: 24px;
        }
        form p {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #4e4e4e;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-sizing: border-box;
            margin-bottom: 15px;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #00796b;
            border: none;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }
        button:hover {
            background-color: #004d40;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Painel Admin</h1>
        <form action="" method="POST">
            <p>
                <label>Usuário</label>
                <input type="text" name="usuario" placeholder="Digite seu usuário">
            </p>
            <p>
                <label>Senha</label>
                <input type="password" name="senha" placeholder="Digite sua senha">
            </p>
            <p>
                <button type="submit">Entrar</button>
            </p>
        </form>
    </div>
</body>
</html>
