<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Lista de Cursos</h2>

    <table>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>area</td>
            <td>carga</td>
            <td>ação</td>
            <td>editar</td>
        </tr>
        <?php
        require_once "../conexao.php";
        
        $sql = "SELECT * FROM curso";
        
        $resultados = mysqli_query($conexao, $sql);
        
        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idcurso'];
            $nome = $linha['nome'];
            $area = $linha['area'];
            $carga = $linha['carga_horaria'];

            echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nome</td>";
                echo "<td>$area</td>";
                echo "<td>$carga</td>";
                echo "<td><a href='excluir_curso.php?id=$id'><img src='../imagens/lixeira.png'></a></td>";
                echo "<td><a href='cad_curso.php?id=$id'>Editar</a></td>";
            echo "</tr>";
        }
            
            
            ?>
    </table>
</body>
</html>