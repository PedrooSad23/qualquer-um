<?php

require_once "../verifica/verifica_sessao.php";

require_once "../conexao.php";

$texto = $_POST['texto'];
$idusuario = $_POST['idusuario'];

$sql = "INSERT INTO postagem (texto, idusuario) VALUES ('$texto', '$idusuario')";

if (mysqli_query($conexao, $sql)) {
    header("Location: ../home/principal.php");

} else {
    echo "Erro: " . mysqli_error($conexao);
}
?>