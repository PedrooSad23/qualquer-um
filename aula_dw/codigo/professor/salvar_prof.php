<?php
require_once "../conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$formacao = $_POST['formacao'];

if ($id == 0) {
    $sql = "INSERT INTO professor (nome, data_nascimento, formacao) VALUES ('$nome', '$data_nascimento', '$formacao');";
}
else {
    $sql = "UPDATE professor SET nome = '$nome', data_nascimento = '$data_nascimento', formacao = '$formacao' WHERE idprofessor = $id";
}

mysqli_query($conexao, $sql);

header("Location: ../sucesso.html");
?>