<?php
require_once "../conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM turma WHERE idturma = $id";

mysqli_query($conexao, $sql);

echo "Sucesso em excluir";
?>
