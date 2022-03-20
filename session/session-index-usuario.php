<?php
    include('verificar-login.php');
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
    <h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
    <h2><a href="logout.php">Sair</a></h2>
    <h2>
        <?php   
            echo $_SESSION['idUsuario']."<br>";
            echo $_SESSION['nomeUsuario']."<br>";
            echo $_SESSION['emailUsuario']."<br>";
        ?>
    </h2>
    
    <form action="../cadastro/cadastrar-turma" method="POST">
        <input type="text" name="nomeTurma" id="">
        <input type="text" name="descTurma" id="">
        <input type="text" name="siglaTurma" id="">
        <input type="text" name="semestreTurma" id="">
        
    </form>
</body>
</html>