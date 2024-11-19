<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Salva i dati nella sessione
    $_SESSION["name"] = htmlspecialchars($_POST["name"]);
    $_SESSION["email"] = htmlspecialchars($_POST["email"]);
    $_SESSION["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT); // Cripta la password
    header("Location: giaregistrato.php"); // Reindirizza alla pagina di accesso
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <a href="pagina_inizale_accesso.php">← Torna alla pagina iniziale</a>
    <h1>Login</h1>
    <form method="POST" action="">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
