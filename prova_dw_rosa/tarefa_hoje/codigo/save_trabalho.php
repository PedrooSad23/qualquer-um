<?php 
require_once "conexao.php";

$nome = $_POST['nome'];
$valor = $_POST['valor'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO tb_trabalho (nome, valor, descricao)
VALUES (?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);  

mysqli_stmt_bind_param($comando, "sds", $nome, $valor, $descricao);
mysqli_stmt_execute($comando);

header("Location: form_grupo.php");
?>