<?php
// Select dinâmico

$tecnologias = [
    'HTML',
    'CSS',
    'JAVASCRIPT',
    'PHP',
    'LARAVEL',
    'POSTGRESQL',
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $option = $_POST['tecnologia']; // recebe o option selecionado
    echo $option;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Dinâmico</title>
</head>
<body>
    <form method="POST">
        <select name="tecnologia" id="tecnologia">
            <?php foreach($tecnologias as $tech) : ?>
                <option value="<?php echo $tech ?>"><?php echo $tech ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>