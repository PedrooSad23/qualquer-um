<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="card-sistema">
        <h2 class="titulo-card">Login</h2>
        <hr>
        
        <form action="../verifica/verifica_login.php" method="post">
            <label class="atributo">Email:</label>
            <input type="email" name="email" class="input" placeholder="seu@email.com" required>

            <label class="atributo">Senha:</label>
            <input type="password" name="senha" class="input" placeholder="Sua senha" required>

            <button type="submit" class="btn-submit-full">Entrar</button>
        </form>

        <a href="../index.php" class="btn-link btn-voltar">Voltar</a>
    </div>

</body>
</html>