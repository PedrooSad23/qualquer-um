<?php
require_once "../conexao.php";

$id = $_GET['id'];
$nome = $_POST['nome'];
$area = $_POST['area'];
$carga = $_POST['carga'];

if ($id == 0) {
    $sql = "INSERT INTO curso (nome, area, carga_horaria) VALUES ('$nome', '$area', $carga);";
}
else {
    $sql = "UPDATE curso SET nome = '$nome', area = '$area', carga_horaria = $carga WHERE idcurso = $id";
}

mysqli_query($conexao, $sql);

header("Location: ../sucesso.html");
?>
