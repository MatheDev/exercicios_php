<?php 
// requires
require 'functions.php';
// MENSAGENS
$erro = null;
$sucesso = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $texto = $_POST['texto'];

    // Sanitização
    $texto = htmlspecialchars($texto);

    // Removendo espaços em branco
    $texto = trim($texto);

    // var_dump($texto);
    if (filter_var($texto, FILTER_VALIDATE_EMAIL) == false) {
        echo "O valor digitado não corresponde há um email válido";
    } else {
        echo "O valor digitado corresponde há um email";
    }
    
    // Primeira validação - Se o campo está preenchido
    if (empty($texto)) {
        echo "O campo texto é obrigatório";
    }elseif (strlen($texto) < 5 ) {
        $erro = 'O campo precisa ter no mínimo 5 caracteres';
    }elseif (strlen($texto) > 25) {
        $erro = 'O campo deverá ter no máximo 25 caracteres';
    }else {
        $sucesso = 'Campo validado com sucesso';
    }
}
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
                <?php echo $erro; ?>
            </p>
        <?php endif; ?> 
        <?php if (exibir_erro($sucesso)) : ?>
            <p style="color: green;">
                <?php echo $sucesso; ?>
            </p>
        <?php endif; ?>
    <form method="POST">

 
        <input type="text" name="texto" id="texto">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>