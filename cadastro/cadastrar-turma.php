<?php
    include("../classe/Conexao.php");
    session_start();

    $_SESSION['idUsuario'];

    $conexao=Conexao::pegarConexao();
    header ("Location: ../session/session-index-usuario.php");

    $nomeTurma = $_POST['nomeTurma'];
    $descTurma = $_POST['descTurma'];
    $siglaTurma = $_POST['siglaTurma'];
    $semestreTurma = $_POST['semestreTurma'];

    #ARRUMAR ISSO
    $queryInsert = "INSERT INTO tbTurma (siglaTurma, semestreTurma, idUsuario, idAula, idAtividade,nomeAula)";

    $conexao->exec($queryInsert);


?>