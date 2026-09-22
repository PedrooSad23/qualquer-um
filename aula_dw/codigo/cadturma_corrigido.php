<?php
require_once "../conexao.php";

if (!isset($_GET['id'])) {

    $id = 0;
    $idcurso = "";
    $nome = "";
    $idprofessor = "";
} else {

    $id = $_GET['id'];

    $sql = "SELECT * FROM turma WHERE idturma = $id";

    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);

    $idcurso = $linha['idcurso'];
    $nome = $linha['nome'];
    $idprofessor = $linha['idprofessor'];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Turma</title>
</head>

<body>

    <h2>Cadastro de Turma</h2>

    <form action="salvar_turma.php?id=<?php echo $id; ?>" method="POST">

        Curso: <br>

        <select name="idcurso">

            <?php
            $sql = "SELECT * FROM curso";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idcurso_lista = $linha['idcurso'];
                $nome_curso = $linha['nome'];

                if ($idcurso_lista == $idcurso) {
                    echo "<option value='$idcurso_lista' selected>$nome_curso</option>";
                } else {
                    echo "<option value='$idcurso_lista'>$nome_curso</option>";
                }
            }
            ?>

        </select>

        <br><br>

        Nome: <br>
        <input type="text" name="nome" value="<?php echo $nome; ?>">

        <br><br>

        Professor: <br>

        <select name="idprofessor">

            <?php
            $sql = "SELECT * FROM professor";

            $resultados = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idprofessor_lista = $linha['idprofessor'];
                $nome_professor = $linha['nome'];

                if ($idprofessor_lista == $idprofessor) {
                    echo "<option value='$idprofessor_lista' selected>$nome_professor</option>";
                } else {
                    echo "<option value='$idprofessor_lista'>$nome_professor</option>";
                }
            }
            ?>

        </select>

        <br><br>

        <input type="submit" value="Salvar">

    </form>

</body>

</html>