<?php
session_start();

//Verifica se os dados foram enviados
if (
    !empty($_POST['name']) &&
    !empty($_POST['profession']) &&
    !empty($_POST['email']) &&
    !empty($_POST['age'])
) {
    //Pega os dados enviados pelo formulário
    $name = ucfirst(htmlspecialchars($_POST['name']));
    $profession = ucfirst(htmlspecialchars($_POST['profession']));
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);

    //Salva os dados no servidor
    $_SESSION['name'] = $name;
    $_SESSION['profession'] = $profession;
    $_SESSION['email'] = $email;
    $_SESSION['age'] = $age;

    //Redireciona para a pagina de perfil
    header("Location: perfil.php");

    //Salva tema no navegador se ele estiver preenchido
    if (!empty($_POST['theme'])) {
        setcookie('theme', htmlspecialchars($_POST['theme']));
    }
} else {
    echo "Preencha todos os dados";
    echo "<br>";
    echo '<a href="index.php">Voltar</a>';
}
