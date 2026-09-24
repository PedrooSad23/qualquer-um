<?php
require_once "../conexao.php";

if (empty($_POST['username']) OR empty($_POST['nome']) OR empty($_POST['email']) OR empty($_POST['senha'])) {
    header("Location: form_usuario.php?erro=vazio");
    exit;
}

$username = $_POST['username'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];

$sql = "INSERT INTO usuario (username, nome, email, senha, foto) VALUES ('$username', '$nome', '$email', '$senha', '$foto')";

mysqli_query($conexao, $sql);

header("Location: ../home/sucesso.html");
?>