<?php
    session_start();
    
    require_once "conexao.php";

    $idusuario = $_SESSION['idusuario'];
    $texto = $_POST['texto'];


    $sql = "INSERT INTO postagem (idusuario, texto) VALUES (?, ?)";

    $comando = mysqli_prepare($conexao, $sql);
    
    mysqli_stmt_bind_param($comando, "is", $idusuario, $texto);

    // Executa a declaração preparada
    mysqli_stmt_execute($comando);

    // Fecha o statement (boa prática)
    mysqli_stmt_close($comando);

    // Redireciona o usuário
    header("Location: principal.php");
    exit;
?>