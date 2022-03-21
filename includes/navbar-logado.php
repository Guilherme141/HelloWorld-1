
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/navbar-logado.css">
    <title>Navbar-logado</title>
</head>
    
<body>
    <nav>
        <input id="menu" type="checkbox">
            <label onClick="ligar_menu()"for="menu">
                <div class="menu">
                    <div id="one" class="one"></div>
                    <div id="two" class="two"></div>
                    <div id="three" class="three"></div>
                </div>
            </label>
    </nav>
    
     <div id="navbar-lateral" class="navbar-lateral">
         <p class="info">Atividades</p>
         <div class="links-agupados">
             <a class="link"href="#">Atividade x</a>
             <a class="link"href="#">Atividade y</a>
             <a class="link"href="#">Atividade z</a>
         </div>

         <p class="info">Turmas</p>
         <div class="links-agupados">
             <a class="link"href="#">Turma x</a>
             <a class="link"href="#">Turma y</a>
             <a class="link"href="#">Turma z</a>
         </div>
        <div class="-div-"></div>
        <div class="links-agupados">
            <a class="link"href="#">Agenda</a>
            <a class="link"href="#">Notas</a>
            <a class="sair"href="../index/index.php">Sair</a>
        </div>
         
     </div>

    <script>
        function ligar_menu(){
            var one = document.getElementById('one');
            one.classList.toggle('on');

            var two = document.getElementById('two');
            two.classList.toggle('on');

            var three = document.getElementById('three');
            three.classList.toggle('on');

            var ativa = document.getElementById('navbar-lateral');
            ativa.classList.toggle('ativa');
        }

    </script>

