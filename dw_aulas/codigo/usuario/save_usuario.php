<?php
require_once "../conexao.php";

$username = $_POST['username'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];

$sql = "INSERT INTO usuario (username, nome, email, senha, foto) VALUES ('$username', '$nome', '$email', '$senha', '$foto')";

mysqli_query($conexao, $sql);

header("Location: ../sucesso.html");
?>