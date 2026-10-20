<?php
require_once "../verifica_sessao.php";

if (!isset($_GET['id'])) {
    //formulário em branco
    $id = 0;
    $nome = "";
    $data_nascimento = "";
    $formacao = "";
} else {
    //formulário preenchido
    $id = $_GET['id'];

    $sql = "SELECT * FROM professor WHERE idprofessor = $id";

    require_once "../conexao.php";
    $resultado = mysqli_query($conexao, $sql);

    $linha = mysqli_fetch_array($resultado);
    $nome = $linha['nome'];
    $data_nascimento = $linha['data_nascimento'];
    $formacao = $linha['formacao'];
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
    <h3>Cadastro de Professor</h3>
    <!-- action: para quem estou mandando os dados -->
    <!-- method: como estou mandando os dados -->
    <form action="salvar_prof.php?id=<?php echo $id; ?>" method="POST">
        Nome: <br>
        <input type="text" name="nome" value="<?php echo $nome; ?>"> <br>

        Data de Nascimento: <br>
        <input type="date" name="data_nascimento" value="<?php echo $data_nascimento; ?>"> <br>

        Formação: <br>
        <input type="text" name="formacao" value="<?php echo $formacao; ?>"> <br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>