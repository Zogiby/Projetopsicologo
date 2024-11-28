
<?php
include_once "config.php";
session_start();

$error_message = "";
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['nome'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM Users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

<<<<<<< Updated upstream
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;
            header("Location: menu.php");
            exit();
=======
    if (strlen($_POST['usuario']) == 0) {
        echo "Preencha seu e-mail";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $usuario = $mysqli->real_escape_string($_POST['usuario']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha  na execução do código" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("location: painel.php");
>>>>>>> Stashed changes
        } else {
            $error_message = "Senha incorreta.";
        }
    } else {
        $error_message = " Usuário não encontrado.";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        /* Reset básico */
        body, h2, p, a, input, button {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #333;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #4e54c8;
        }

        .container p {
            color: red;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .container button {
            width: 100%;
            padding: 10px;
            background: #4e54c8;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .container button:hover {
            background: #3c3da6;
        }

        .container a {
            display: block;
            margin-top: 15px;
            color: #4e54c8;
            text-decoration: none;
            font-size: 14px;
        }

        .container a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container login">
        <h2>Login</h2>
        <?php if ($error_message): ?>
        <p><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form method="post" action="login.php">
            <input type="text" name="username" placeholder="Nome de Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>
        <a href="register.php">Cadastrar Usuário</a>
    </div>
</body>

</html>
