<!DOCTYPE html>
<html lang="en">
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
        </div>

        <div class="turmas">  <!-- ESSA -->
            <div id="criar" class="criar">
                +
            </div>
    <!--TURMAS VÃO SER ADICIONADAS DAQUI PRA BAIXO DENTRO DA DIV "TURMAS"-->
            <a class="turma" href="#">
                <div class="turma-div">
                        <h1 class="nome-turma">Nome da Turma</h1> 
                        <p class="materia">Materia</p> 
                </div>
                <div class="descricao-div">
                    <p class="descricao">Descricao</p>
                </div>
            </a>


        </div>
    </div>

    <script src="../javascript/index-logado.js" ></script>
</body>
</html>