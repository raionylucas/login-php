<?php
session_start();

if (!empty($_SESSION['name'])) {
    header('Location: perfil.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" name="name">
        <br>
        <br>
        <label for="profession">Profissão:</label>
        <input type="text" name="profession">
        <br>
        <br>
        <label for="email">E-mail:</label>
        <input type="email" name="email">
        <br>
        <br>
        <label for="age">Idade:</label>
        <input type="number" name="age">
        <br>
        <br>
        <label for="theme">Tema:</label>
        <select name="theme">
            <option value="dark">Dark Mode</option>
            <option value="light">Light Mode</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>