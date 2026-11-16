<?php
require_once "conexao.php";

// Recebe os dados
$nome = $_POST['nome'];
$idturma = $_POST['idturma'];

$file_name = $_FILES['foto']['name'];
$temp_road = $_FILES['foto']['tmp_name'];

// Cria um novo nome para a foto
$extensao = pathinfo($file_name, PATHINFO_EXTENSION);
$new_name = uniqid() . "." . $extensao;

// Verifica se o aluno já existe
$sql = "SELECT * FROM tb_aluno
        WHERE nome = ? AND idturma = ?";

$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "si", $nome, $idturma);

mysqli_stmt_execute($comando);

$resultado = mysqli_stmt_get_result($comando);

// Se não existir, cadastra
if (mysqli_num_rows($resultado) == 0) {

    // Salva a foto
    if (move_uploaded_file($temp_road, "fotos/" . $new_name)) {

        // Insere o aluno
        $sql = "INSERT INTO tb_aluno(nome, idturma, foto)
                VALUES (?, ?, ?)";

        $comando = mysqli_prepare($conexao, $sql);

        mysqli_stmt_bind_param($comando, "sis", $nome, $idturma, $new_name);

        mysqli_stmt_execute($comando);

        // Redireciona
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao salvar a foto!";
    }
} else {
    echo "Já cadastrado!";
}
