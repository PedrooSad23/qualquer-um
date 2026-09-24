<?php
require_once "../verifica/verifica_sessao.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Postagem</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="card-sistema">
        <h2 class="titulo-card">Nova Postagem</h2>
        <hr>

        <form action="save_post.php" method="post">
            <label class="atributo">Texto da Postagem:</label>
            <input type="text" name="texto" class="input" placeholder="O que estás a pensar?" required>

            <label class="atributo">Usuário:</label>
            <select name="idusuario" class="input" required>
                <option value="">Selecione um utilizador...</option>
                <?php
                require_once "../conexao.php";

                $sql = "SELECT * FROM usuario";
                $resultados = mysqli_query($conexao, $sql);

                while ($linha = mysqli_fetch_array($resultados)) {
                    $idusuario = $linha['idusuario'];
                    $username = $linha['username'];

                    echo "<option value='$idusuario'>$username</option>";
                }
                ?>
            </select>

            <button type="submit" class="btn-submit-full">Publicar</button>
        </form>

        <a href="../home/principal.php" class="btn-link btn-voltar">Voltar</a>
    </div>

</body>
</html>