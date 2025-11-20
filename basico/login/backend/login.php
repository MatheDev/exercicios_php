<?php
session_start();
// print_r($_POST);

if (!empty($_POST['user'] && !empty($_POST['password']))) {
    $user = htmlspecialchars($_POST['user']);
    $password = htmlspecialchars($_POST['password']);

    if ($user == 'admin' && $password == '123') {
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;

        header('Location: ../welcome.php');
    } else {
        echo 'Usuário e/ou senha estão incorretos!';
        echo "<a href='../index.php'>Voltar</a>";
    }
} else {
    echo "Preencha todos os dados corretamente!!";
    echo "<a href='../index.php'>Voltar</a>";
}
