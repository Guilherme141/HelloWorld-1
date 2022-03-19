<?php
    require_once ('../classe/Usuario.php');
    require_once ('../classe/Conexao.php');

    include '../classe/conexao-mysqli.php';

    $email = $_POST['txtEmail'];

    $sql = "SELECT * FROM tbusuario WHERE emailUsuario = '$email'";
    $result = mysqli_query($mysqli_conexao , $sql);

    #Informa o total de colunas que existe
    $total_colunas = mysqli_num_rows($result);

    #1º condição = Se o email já está cadastrado no banco
    if($total_colunas > 0){
        header("Location: ../front-cadastro/form-cadastrar.php");
        $msg = "Email já cadastrado.";
        echo "<script>alert('$msg')</script>";
    }else {
        //2º condição = Se as senhas são iguais
        if($_POST['txtSenha'] != $_POST['ctxtSenha']){
            header("Location: ../front-cadastro/form-cadastrar.php");
            $msg = "Informações incorretamente";
            echo "<script>alert('$msg')</script>";
        }
        else 
        {
            header("Location: ../front-cadastro/index-cadastro.php");
            $usuario = new Usuario();
            $usuario->setNomeUsuario($_POST['txtNome']);
            $usuario->setEmailUsuario($_POST['txtEmail']);
            $usuario->setSenhaUsuario (md5($_POST['txtSenha']));
        
            echo $usuario->cadastrar($usuario);
        }
    }

?>