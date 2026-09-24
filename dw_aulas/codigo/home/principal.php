<?php
// Protege a página: só entra se estiver logado
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

    <div class="container">
        <h2>Bem-vindo(a), <?php echo $_SESSION['nome']; ?>!</h2>
        <hr>

        <p> Usuário <?php echo $_SESSION['username']; ?></p>

        <p>E-mail: <?php echo $_SESSION['email']; ?></p>
        
        <br>

        <a href="../index.php">
            <button>Sair do Sistema</button>
        </a>
    </div>

</body>
</html>