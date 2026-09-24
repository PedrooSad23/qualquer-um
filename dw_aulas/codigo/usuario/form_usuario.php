<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Utilizador</title>
    <!-- Apenas a ligação ao CSS externo -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="card-sistema">
        <h2 class="titulo-card">Formulário de Utilizador</h2>
        <hr>

        <form action="save_usuario.php" method="post" enctype="multipart/form-data">
            
            <label class="atributo">Username:</label>
            <input type="text" name="username" class="input" placeholder="Ex: Joazinho do Grau" required>

            <label class="atributo">Nome de Utilizador:</label>
            <input type="text" name="nome" class="input" placeholder="Ex: Pedro Felipe" required>

            <label class="atributo">Email:</label>
            <input type="email" name="email" class="input" placeholder="Ex: estudante@gmail.com" required>

            <label class="atributo">Senha:</label>
            <input type="password" name="senha" class="input" placeholder="Ex: 987456123" required>

            <label class="atributo">Foto:</label>
            <input type="file" name="foto" class="foto">

            <button type="submit">Enviar</button>
        </form>

        <a href="../index.php" class="btn-link" style="background-color: #95a5a6;">Voltar</a>
    </div>

</body>
</html>