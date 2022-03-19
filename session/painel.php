<?php
    include('verificar-login.php');
?>

<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>
<h2>
    <?php   
        echo $_SESSION['idUsuario']."<br>";
        echo $_SESSION['nomeUsuario']."<br>";
        echo $_SESSION['emailUsuario']."<br>";
    ?>
</h2>