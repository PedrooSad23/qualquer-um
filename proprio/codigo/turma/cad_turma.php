<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Cadastro de Turma</h2>
    <form action="salvar_turma.php" method="POST">
        Curso: <br>
        <select name="idcurso">
            <?php
            require_once "../conexao.php";

            $sql = "SELECT * FROM curso";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $idcurso = $linha['idcurso'];
                $nome = $linha['nome'];

                echo "<option value='$idcurso'>$nome</option>";
            }
            ?>
        </select> <br>


        Nome: <br>
        <input type="text" name="nome"> <br>
        Professor: <br>
        <select name="idprofessor">
            <?php
            $sql = "SELECT * FROM professor";
            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {
                $idprofessor = $linha['idprofessor'];
                $nome = $linha['nome'];

                echo "<option value='$idprofessor'>$nome</option>";
            }
            ?>
        </select> <br>

        <input type="submit" value="Salvar">
    </form>
</body>

</html>