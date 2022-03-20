<?php
    session_start();
    include '../classe/conexao-mysqli.php';

    #INICIAR O CÓDIGO DA AREA RESTRITA DENTRO DESSE IF
    if($_POST['txtEmail'] == "adm" and $_POST['txtSenha'] == md5("123")){
        header("Location:area-restrita.php");
    }






    
    #VERIFICANDO SE OS CAMPOS NÃO ESTÃO VAZIOS
    if(empty($_POST['txtEmail'] || empty($_POST['txtSenha']))){
        header("Location:../front-cadastro/adicionar-conta.php");
        exit();
    }
    $email =$_POST['txtEmail'];
    $senha = md5($_POST['txtSenha']);

    $sql = "SELECT * FROM tbusuario WHERE emailUsuario='{$email}' AND senhaUsuario='{$senha}'";

    #DANDO O COMANDO PARA O BANCO
    $result = mysqli_query($mysqli_conexao, $sql);

    #CONTANDO QUANTAS COLUNAS FORAM AFETADAS
    $total_colunas = mysqli_num_rows($result);

    #TRANSFORMANDO AS SESSION's PARA GUARDAR INFORMAÇÕES
    $row = mysqli_fetch_array($result, MYSQLI_BOTH);
        $_SESSION['idUsuario'] = $row[0];
        $_SESSION['nomeUsuario'] = $row[1];
        $_SESSION['emailUsuario'] = $row[2];

    

    #VERIFICANDO SE O EMAIL E A SENHA EXISTEM NO BANCO
    if($total_colunas != 0 ){
        $_SESSION['usuario'] = $email;
        header("Location:session-index-usuario.php");
        exit();
    }
    else{
        $msg = "Esse email ainda não existe";
        echo "<script>alert('$msg')</script>"; 
        header("Location: ../front-cadastro/index-cadastro.php");
        exit();
    }
?>