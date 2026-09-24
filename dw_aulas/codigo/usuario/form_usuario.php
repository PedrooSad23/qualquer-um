<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Usuário</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <label class="form">Formulário de Usuário</label>
    <hr>

    <form action="save_usuario.php" method="POST">

        <label class="atributo" for="username">Username:</label>

        <br>

        <input type="text" name="username" placeholder="Ex:Joaozinho do Grau" class="input" required>

        <br>

        <label class="atributo" for="nome">Nome de Usuário:</label>

        <br>

        <input type="text" id="nome" name="nome" class="input" placeholder="Ex:Pedro Felipe" required>

        <br>

        <label class="atributo" for="email">Email:</label>

        <br>

        <input type="text" id="email" name="email" class="input" placeholder="Ex:estudante@gmail.com" required>

        <br>

        <label class="atributo" for="senha">Senha:</label>

        <br>

        <input type="text" id="senha" name="senha" class="input" placeholder="Ex:987456123" required>

        <br>

        <label class="atributo" for="foto">Foto:</label>

        <br>

        <input type="file" id="foto" class="foto" name="foto">

        <br>

        <button type="submit">Enviar</button>

    </form>

    <br>
    <a href="../index.php">Principal</a>
</body>

</html>