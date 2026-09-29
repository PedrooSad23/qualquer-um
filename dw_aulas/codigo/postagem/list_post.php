<?php
require_once "../verifica/verifica_sessao.php";
require_once "../conexao.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Postagens</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="card-sistema" style="max-width: 700px;">
        <h2 class="titulo-card">Lista de Postagens</h2>
        <hr>

        <table class="tabela">
            <tr>
                <th>Texto</th>
                <th>Data de Criação</th>
                <th>Usuário</th>
                <th>Ação</th>
            </tr>
            <?php
            
            $sql_post = "SELECT * FROM postagem";
            $resultados_post = mysqli_query($conexao, $sql_post);

            while ($linha = mysqli_fetch_array($resultados_post)) {
                $id = $linha['idpostagem'];
                $texto = $linha['texto'];
                $data = $linha['data_hora'];
                $idusuario = $linha['idusuario'];

                $sql_usuario = "SELECT username FROM usuario WHERE idusuario = $idusuario";
                $resultado_usuario = mysqli_query($conexao, $sql_usuario);
                $user_linha = mysqli_fetch_array($resultado_usuario);
                $username = $user_linha['username'] ?? 'Desconhecido';

                echo "<tr>";
                echo "<td>$texto</td>";
                echo "<td>$data</td>";
                echo "<td>$username</td>";
                echo "<td><a href='ex_post.php?id=$id' class='link-excluir'>Excluir</a></td>";
                echo "</tr>";
            }
            ?>
        </table>

        <a href="../home/principal.php" class="btn-link btn-voltar">Voltar</a>
    </div>

</body>
</html>