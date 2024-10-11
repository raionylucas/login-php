<?php
session_start();

if (empty($_SESSION['name'])) {
    header('Location: index.php');
}

$name = $_SESSION['name'];
$profession = $_SESSION['profession'];
$age = $_SESSION['age'];
$email = $_SESSION['email'];

if ($_COOKIE['theme'] == 'dark') {
    $color = 'black';
    $font_color = 'white';
} else if ($_COOKIE == 'light') {
    $color = 'white';
    $font_color = 'black';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body style="background-color: <?= $color ?>; color: <?= $font_color ?>">
    <h1>Perfil</h1>
    <p>Nome: <?= $name ?></p>
    <p>Profissão: <?= $profession ?></p>
    <p>Idade: <?= $age ?> Anos</p>
    <p>Email: <?= $email ?></p>
    <br>
    <a href="logout.php">Sair</a>
</body>

</html>