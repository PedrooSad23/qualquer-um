<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from usuario WHERE email = '$email' AND senha = '$senha'";
    
    require_once "../conexao.php";
    $resultado = mysqli_query($conexao, $sql);


    $quantidade = mysqli_num_rows($resultado);

    if ($quantidade == 1) {

        $linha = mysqli_fetch_array($resultado);

        $idusuario = $linha['idusuario'];
        $username = $linha['username'];
        $nome = $linha['nome'];
        $email = $linha['email'];
        $foto = $linha['foto'];

        // Início da sessão
        session_start();
        $_SESSION['logado'] = 1;
        $_SESSION['idusuario'] = $idusuario;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        
        header("Location: ../home/principal.php");
        exit;
    }
    else {
        header("Location: ../index.php?erro=login&email=$email");
        exit;
    }
?>