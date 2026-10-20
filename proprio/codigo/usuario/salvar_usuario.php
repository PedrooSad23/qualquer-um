<?php
$email = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$foto = $_POST['foto'];

$sql = "INSERT INTO usuario (email, senha, nome, foto) VALUES ('$email', '$senha', '$nome', '$foto')";

require_once "../conexao.php";
mysqli_query($conexao, $sql);


header("Location: ../sucesso.html");
?>