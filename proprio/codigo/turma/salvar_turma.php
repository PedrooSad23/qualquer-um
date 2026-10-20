<?php
require_once "../conexao.php";

$id = $_GET['id'];

$idcurso = $_POST['idcurso'];
$nome = $_POST['nome'];
$idprofessor = $_POST['idprofessor'];

if ($id == 0) {

    $sql = "INSERT INTO turma (idcurso, nome, idprofessor)
            VALUES ($idcurso, '$nome', $idprofessor)";
} else {

    $sql = "UPDATE turma SET idcurso = $idcurso, nome = '$nome', idprofessor = $idprofessor WHERE idturma = $id";
}

mysqli_query($conexao, $sql);

header("Location: ../sucesso.html");
