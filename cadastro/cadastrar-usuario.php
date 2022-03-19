<?php
    require_once ('../classe/Usuario.php');
    require_once ('../classe/Conexao.php');
    
    // instanciando um objeto


    //1º condição = Se as senhas são iguais
    if($_POST['txtSenha'] != $_POST['ctxtSenha']){
        header("Location: ../front-cadastro/form-cadastrar.php");
        $msg = "Informações incorretamente";
    }
    else 
    {
        header("Location: ../front-cadastro/index-cadastro.php");
        $usuario = new Usuario();
        $usuario->setNomeUsuario($_POST['txtNome']);
        $usuario->setEmailUsuario($_POST['txtEmail']);
        $usuario->setSenhaUsuario($_POST['txtSenha']);
    
        echo $usuario->cadastrar($usuario);
    }

?>