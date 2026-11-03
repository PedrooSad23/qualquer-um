<?php
require_once "conexao.php";

$username = $_POST['username'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


// SEPARA O NOME DO ARQUIVO 
$nome_arquivo = $_FILES['foto']['name'];

// CRIA UM CAMINHO TEMPORARIO
$caminho_temporario = $_FILES['foto']['tmp_name'];

// SEPARA A EXTENSAO DO NOME DO ARQUIVO
$extensao = pathinfo($nome_arquivo, PATHINFO_EXTENSION);

// CRIA O NOVO NOME COM A FUNÇÃO DE CRIAR NOME ALEATORIO
$novo_nome = uniqid() . "." . $extensao;

// MOSTRA O CAMINHO DE DESTINO
$caminho_destino = "foto_user/" . $novo_nome;

// MOVE PRO CAMINHO DE DESTINO
move_uploaded_file($caminho_temporario, $caminho_destino);



$sql = "INSERT INTO usuario (username, nome, email, senha, foto) VALUES ('$username', '$nome', '$email', '$senha', '$novo_nome')";

mysqli_query($conexao, $sql);

header("Location: index.php");
?>