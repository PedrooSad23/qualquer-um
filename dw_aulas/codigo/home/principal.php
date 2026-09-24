<?php

require_once "../verifica/verifica_sessao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <div class="card-sistema" style="text-align: center;">
        <h2 class="titulo-card">
            Bem-vindo(a)
            <br>
            <span><?php echo $_SESSION['nome']; ?></span>
        </h2>
        
        <hr>

        <p class="atributo" style="margin-top: 10px;">Utilizador: <span><?php echo $_SESSION['username']; ?></span></p>
        <p class="atributo">E-mail:<?php echo $_SESSION['email']; ?></span></p>
        
        <a href="../postagem/form_post.php" class="btn-link">Nova Postagem</a>

        <a href="../verifica/logout.php" class="btn-link btn-sair">Sair do Sistema</a>
    </div>

</body>

</html>