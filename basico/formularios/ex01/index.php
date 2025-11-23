<?php 
// requires
require 'functions.php';
// MENSAGENS
$erro = 'Erro no formulário';
$sucesso = 'Sucesso no formulário';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário</h1>
            <?php if (exibir_erro($erro)) : ?>
            <p style="color: red;">
                <? echo $erro; ?>
            </p>
        <?php endif; ?> 
        <?php if (exibir_erro($sucesso)) : ?>
            <p style="color: green;">
                <? echo $sucesso; ?>
            </p>
        <?php endif; ?>
    <form method="POST">

 
        <input type="text" name="campo" id="campo">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>