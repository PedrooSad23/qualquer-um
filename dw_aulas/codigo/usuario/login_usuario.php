<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <label class="form">Login de Usuário</label>
    <hr>

    <form action="../verifica/verifica_login.php" method="post">

        <label class="atributo" for="email">Email:</label>

        <br>

        <input type="text" id="email" name="email" class="input" placeholder="Digite seu email" required>

        <br>

        <label class="atributo" for="senha">Senha:</label>

        <br>

        <input type="password" id="senha" name="senha" class="input" placeholder="Digite sua senha" required>
        
        <br>

        <button type="submit">Entrar</button>

    </form>

</body>
</html>