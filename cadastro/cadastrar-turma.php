<?php
    include("../classe/conexao-mysqli.php");
    session_start();


    $id = $_SESSION['idUsuario'];
    $nomeTurma = $_POST['nomeTurma'];
    $descTurma = $_POST['descTurma'];
    $siglaTurma = $_POST['siglaTurma'];
    $semestreTurma = $_POST['semestreTurma'];
    
    if ($nomeTurma != ""){
        header ("Location: ../session/index-logado.php");
        $sql = "INSERT INTO tbturma (siglaTurma, semestreTurma, idUsuario,nomeTurma, descTurma)
                VALUES ('$siglaTurma', '$semestreTurma', '$id', '$nomeTurma', '$descTurma')";
    
        $result = mysqli_query($mysqli_conexao, $sql);
    }
    else{
        header ("Location: ../session/session-index-usuario.php");
    }



?>