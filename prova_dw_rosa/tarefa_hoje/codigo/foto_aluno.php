
<?php
require_once "conexao.php";

$sql = "SELECT tb_aluno.nome, tb_aluno.foto, tb_turma.nome AS turma
        FROM tb_aluno
        INNER JOIN tb_turma
        ON tb_aluno.idturma = tb_turma.idturma";

$resultado = mysqli_query($conexao, $sql);

while ($aluno = mysqli_fetch_array($resultado)) {
?>

    <div>
        <img src="fotos/<?php echo $aluno['foto']; ?>" width="150">

        <h3><?php echo $aluno['nome']; ?></h3>

        <p>Turma: <?php echo $aluno['turma']; ?></p>
    </div>

<?php
}
?>
