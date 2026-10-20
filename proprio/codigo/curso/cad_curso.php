<?php
require_once "../verifica_sessao.php";

if (!isset($_GET['id'])) {
    //formulário em branco
    $id = 0;
    $nome = "";
    $area = "";
    $carga_horaria = "";
} else {
    //formulário preenchido
    $id = $_GET['id'];

    $sql = "SELECT * FROM curso WHERE idcurso = $id";

    require_once "../conexao.php";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);
    $nome = $linha['nome'];
    $area = $linha['area'];
    $carga_horaria = $linha['carga_horaria'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Cadastro de Curso</h3>
    <!-- action: para quem estou mandando os dados -->
    <!-- method: como estou mandando os dados -->
    <form action="salvar_curso.php?id=<?php echo $id; ?>" method="POST">
        Nome: <br>
        <input type="text" name="nome" value="<?php echo $nome; ?>"> <br>

        Área: <br>
        <input type="text" name="area" value="<?php echo $area; ?>"> <br>

        Carga horária: <br>
        <input type="text" name="carga" value="<?php echo $carga_horaria; ?>"> <br>

        <input type="submit" value="Salvar">
    </form>
</body>

</html>