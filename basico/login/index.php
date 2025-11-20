<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="backend/login.php" method="POST">
        <div class="label">
            <label for="user">Usuário</label>
            <input type="text" name="user" id="user">
        </div>
        <div class="label">
            <label for="user">Senha</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="label">
            <label for="tema">Tema Preferido</label>
            <select name="tema" id="tema">
                <option value="escuro">Escuro</option>
                <option value="claro">Claro</option>
            </select>
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>