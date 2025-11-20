<?php
session_start();



if (empty($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

echo "Seja Bem-Vindo " . $_SESSION['user'];
echo "<br/>";
echo "<a href='backend/logout.php'>Sair</a>";