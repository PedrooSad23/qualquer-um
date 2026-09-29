<?php

require_once "../verifica/verifica_sessao.php";

require_once "../conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM postagem WHERE idpostagem = $id";
mysqli_query($conexao, $sql);

header("Location: ../home/excluir_sucesso.html");
exit();
?>