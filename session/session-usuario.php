<?php
    session_start();
    include '../classe/conexao-mysqli.php';

    if(empty($_POST['txtEmail'] || empty($_POST['txtSenha']))){
        header("Location:../front-cadastro/adicionar-conta.php");
        exit();
    }
    $email =$_POST['txtEmail'];
    $senha = md5($_POST['txtSenha']);

    $sql = "SELECT * FROM tbusuario WHERE emailUsuario='{$email}' AND senhaUsuario='{$senha}'";

    $result = mysqli_query($mysqli_conexao, $sql);

    $total_colunas = mysqli_num_rows($result);

    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $_SESSION['idUsuario'] = $row[0];
        $_SESSION['nomeUsuario'] = $row[1];
        $_SESSION['emailUsuario'] = $row[2];

    

    if($total_colunas != 0 ){
        $_SESSION['usuario'] = $email;
        header("Location:painel.php");
        exit();
    }
    else{
        $msg = "Esse email ainda não existe";
        echo "<script>alert('$msg')</script>"; 
        header("Location: ../front-cadastro/index-cadastro.php");
        exit();
    }
?>