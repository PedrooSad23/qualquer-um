<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Grupo</title>
</head>

<body>

    <form action="save_grupo.php" method="POST">

        Nome do Grupo:
        <br>
        <input type="text" name="nome">

        <br><br>

        Trabalho:
        <br>
        <select name="idtrabalho">

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM tb_trabalho";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($comando);

            $resultados = mysqli_stmt_get_result($comando);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idtrabalho = $linha['idtrabalho'];
                $nome = $linha['nome'];

                echo "<option value='$idtrabalho'>$nome</option>";
            }
            ?>

        </select>

        <br><br>

        Alunos:
        <br>

        <?php
        $sql_alunos = "SELECT * FROM tb_aluno";

        $comando_alunos = mysqli_prepare($conexao, $sql_alunos);

        mysqli_stmt_execute($comando_alunos);

        $resultados_alunos = mysqli_stmt_get_result($comando_alunos);

        while ($linha_aluno = mysqli_fetch_array($resultados_alunos)) {

            $idaluno = $linha_aluno['idaluno'];
            $nome_aluno = $linha_aluno['nome'];

            echo "<input type='checkbox' name='alunos[]' value='$idaluno'> $nome_aluno <br>";
        }
        ?>

        <br>

        <input type="submit" value="Cadastrar">

    </form>

<a href="index.php">Sair</a>

</body>
</html>