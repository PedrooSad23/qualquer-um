
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Aluno</title>
</head>

<body>

    <form action="save_aluno.php" method="POST" enctype="multipart/form-data">

        Nome:
        <br>
        <input type="text" name="nome">

        <br>

        Nome da Turma:
        <select name="idturma">

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM tb_turma";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($comando);

            $resultados = mysqli_stmt_get_result($comando);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idturma = $linha['idturma'];
                $nome = $linha['nome'];

                echo "<option value='$idturma'>$nome</option>";
            }
            ?>

        </select>

        <br>

        Foto:
        <br>
        <input type="file" name="foto">

        <br>

        <input type="submit" value="Cadastrar">

    </form>

</body>
</html>
