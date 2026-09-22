<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Lista de Turmas</h2>

    <table>
        <tr>
            <td>id</td>
            <td>Turma</td>
            <td>nome</td>
            <td>idprofessor</td>
            <td>ação</td>
            <td>editar</td>
        </tr>
        <?php
        require_once "../conexao.php";
        
        $sql = "SELECT * FROM turma";
        
        $resultados = mysqli_query($conexao, $sql);
        
        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idturma'];
            $idcurso = $linha['idcurso'];
            $nome = $linha['nome'];
            $idprofessor = $linha['idprofessor'];

            echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$idcurso</td>";
                echo "<td>$nome</td>";
                echo "<td>$idprofessor</td>";
                echo "<td><a href='excluir_turma.php?id=$id'><img src='../imagens/lixeira.png'></a></td>";
                echo "<td><a href='cad_turma.php?id=$id'>Editar</a></td>";
            echo "</tr>";
        }
            
            
            ?>
    </table>
</body>
</html>