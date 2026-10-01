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
            <div class="postagens">

                <?php

                $sql_post = "SELECT * FROM postagem";
                $resultados_post = mysqli_query($conexao, $sql_post);

                while ($post_linha = mysqli_fetch_array($resultados_post)) {
                    $id = $post_linha['idpostagem'];
                    $texto = $post_linha['texto'];
                    $data = $post_linha['data_hora'];
                    $idusuario = $post_linha['idusuario'];
                    $username = $post_linha['username'];
                    $nome_usuario = $post_linha['nome'];
                    $foto = $post_linha['foto'];


                    echo "<div class = 'postagem' >";
                    echo $id;

                    echo "<br>";
                    
                    echo "<img src='foto_usuario/$foto'>"; 
                    
                    echo "<br>";
                    
                    echo "$username ($nome_usuario)";
                    
                    echo "<br>";
                    
                    echo $data;
                    
                    echo "<br>";
                    
                    echo $texto;


                    echo "<br>";

                    echo "<a href='ex_post.php?id=$id' class='link-excluir'>Excluir</a>";

                    echo "<br>";

                    echo "</div>";
                }
                ?>

            </div>

            <a href="../home/principal.php" class="btn-link btn-voltar">Voltar</a>
    </div>

</body>

</html>