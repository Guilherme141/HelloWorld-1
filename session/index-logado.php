<?php
    include('verificar-login.php');
    include ('../classe/conexao-mysqli.php');

    #ARMAZANE AS INFORMAÇÕES DO USUARIO
    $idUsuario = $_SESSION['idUsuario'];
    $nomeUsuario = $_SESSION['nomeUsuario'];
    $emailUsuario = $_SESSION['emailUsuario'];


    $sql = "SELECT * FROM tbturma WHERE idUsuario = '$idUsuario'";
    $result = mysqli_query($mysqli_conexao, $sql);
?>


  
    


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index-logado.css">
    <title>index logado</title>
</head>
<body>
    <?php include '../includes/navbar-logado.php'?>

    <div class="A-body">
        <div id="modal" class="modal">
            <button class="fechar"id="fechar"> X </button>
            <!--Conteudo da modal-->
            <p>TESTE DE MODAL</p>
                <form action="../cadastro/cadastrar-turma.php" method="POST">
                <input type="text" name="nomeTurma" id="" placeholder="Nome da Turma">
                <input type="text" name="descTurma" id="" placeholder="Descrição sobre a Turma">
                <input type="text" name="siglaTurma" id="" placeholder="Sigla da Turma">
                <input type="text" name="semestreTurma" id="" placeholder="Semestre">
                <input type="submit" value="Cadastrar">
            </form>
        </div>

        <div class="turmas">  <!-- ESSA -->
            <div id="criar" class="criar">
                +
        </div>
    <!--TURMAS VÃO SER ADICIONADAS DAQUI PRA BAIXO DENTRO DA DIV "TURMAS"-->

    <?php 

    $total_colunas = mysqli_num_rows($result);

    #Verificando se existe está cadastrado alguma turma
    if($total_colunas > 0){
        #Apresentando as tabelas 
        while($row = mysqli_fetch_row($result))
        {
    ?>
            <a class="turma" href="#">
                <div class="turma-div">
                        <h1 class="nome-turma"><?php echo "Nome da Turma: ".$row[4];?></h1> 
                        <p class="materia">Materia</p> 
                </div>
                <div class="descricao-div">
                    <p class="descricao"><?php echo "Descrição: ".$row[5];  ?></p>
                </div>
            </a>
    <?php
        }
    }else{
        $msg = "Ops! nenhuma turma cadastrada";
    ?>
        <h2><?php echo $msg;?></h2>
    <?php
    }
    ?>

        </div>
    </div>
    <?php 

        /*echo $idUsuario."<br>";
        echo $nomeUsuario."<br>";
        echo $emailUsuario."<br>";*/
    ?>
    <script src="../javascript/index-logado.js" ></script>
</body>
</html>