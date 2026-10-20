<?php
require_once "../conexao.php";

$id = $_GET['id'];

$sql = "SELECT * FROM turma WHERE idcurso = $id";

$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "Não é possível excluir este curso porque ele está associado a uma turma.";
    exit;
}

$sql = "DELETE FROM curso WHERE idcurso = $id";

mysqli_query($conexao, $sql);

echo "Sucesso em excluir";
?>
