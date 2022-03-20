<?php
    include('verificar-login.php');
    include ('../classe/conexao-mysqli.php');

    #ARMAZANE AS INFORMAÇÕES DO USUARIO
    $idUsuario = $_SESSION['idUsuario'];
    $nomeUsuario = $_SESSION['nomeUsuario'];
    $emailUsuario = $_SESSION['emailUsuario'];
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h2>Olá, <?php echo $nomeUsuario;?></h2>
    <h2><a href="logout.php">Sair</a></h2>
    <h2>
        <?php 

            echo $idUsuario."<br>";
            echo $nomeUsuario."<br>";
            echo $emailUsuario."<br>";
        ?>
    </h2>
    
    <form action="../cadastro/cadastrar-turma.php" method="POST">
        <input type="text" name="nomeTurma" id="" placeholder="Nome da Turma">
        <input type="text" name="descTurma" id="" placeholder="Descrição sobre a Turma">
        <input type="text" name="siglaTurma" id="" placeholder="Sigla da Turma">
        <input type="text" name="semestreTurma" id="" placeholder="Semestre">
        <input type="submit" value="Cadastrar">
    </form>


    <?php 
     $sql = "SELECT * FROM tbturma WHERE idUsuario = '$idUsuario'";
     $result = mysqli_query($mysqli_conexao, $sql);
    
     while($row = mysqli_fetch_row($result)){
        echo "<br>id:".$row[0]." |Nome da Turma: ".$row[4]." ".$row[2]."º".$row[1]." |Descrição:".$row[5];
    }
    ?>
</body>
</html>