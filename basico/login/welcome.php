<?php
session_start();


// verifica se há um usuário logado na sessão
if (empty($_SESSION['user'])) {
    header('Location: index.php');
    exit();
}

// tema
if (!empty($_COOKIE['tema'])) {
    $tema = $_COOKIE['tema'];

    if ($tema == 'escuro') {
        $cor = "#333";
    } else{
        $cor = '#fff';
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body style="background-color: <?php $cor;?>">
    <?php 
        echo "Seja Bem-Vindo " . $_SESSION['user'];
        echo "<br/>";
        echo "Você preferiu o tema " . $tema;
        echo "<br/>";
        echo "<a href='backend/logout.php'>Sair</a>";
    ?>
</body>
</html>