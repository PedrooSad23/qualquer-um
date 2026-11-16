<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$idtrabalho = $_POST['idtrabalho'];
$alunos = $_POST['alunos'];

// 1º passo: gravar na tabela de grupos
$sql = "INSERT INTO tb_grupo (nome, idtrabalho) VALUES (?, ?)";
$comando = mysqli_prepare($conexao, $sql);
mysqli_stmt_bind_param($comando, "si", $nome, $idtrabalho);
mysqli_stmt_execute($comando);

// 2º passo: pegar o id que acabou de ser inserido percorrendo a tabela
$sql_id = "SELECT * FROM tb_grupo";
$comando_id = mysqli_prepare($conexao, $sql_id);
mysqli_stmt_execute($comando_id);
$resultados_id = mysqli_stmt_get_result($comando_id);

while ($linha = mysqli_fetch_array($resultados_id)) {
    $idgrupo = $linha['idgrupo'];
}

// 3º passo: gravar na tabela tb_aluno_grupo
$total = count($alunos);

for ($i = 0; $i < $total; $i++) {
    $idaluno = $alunos[$i];

    $sql_aluno = "INSERT INTO tb_aluno_grupo (idaluno, idgrupo) VALUES (?, ?)";
    $comando_aluno = mysqli_prepare($conexao, $sql_aluno);
    mysqli_stmt_bind_param($comando_aluno, "ii", $idaluno, $idgrupo);
    mysqli_stmt_execute($comando_aluno);
}

header("Location: index.php");
?>