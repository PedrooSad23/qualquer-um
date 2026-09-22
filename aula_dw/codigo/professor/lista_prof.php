<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>lista de Professores</h2>

    <table>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>data de nascimento</td>
            <td>formacao</td>
            <td>ação</td>
            <td>editar</td>
        </tr>
        <?php
        require_once "../conexao.php";
        
        $sql = "SELECT * FROM professor";
        
        $resultados = mysqli_query($conexao, $sql);
        
        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idprofessor'];
            $nome = $linha['nome'];
            $data_nascimento = $linha['data_nascimento'];
            $formacao = $linha['formacao'];

            echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$nome</td>";
                echo "<td>$data_nascimento</td>";
                echo "<td>$formacao</td>";
                echo "<td><a href='excluir_prof.php?id=$id'><img src='../imagens/lixeira.png'></a></td>";
                echo "<td><a href='cad_prof.php?id=$id'>Editar</a></td>";
            echo "</tr>";
        }
            
            
            ?>
    </table>
</body>
</html>