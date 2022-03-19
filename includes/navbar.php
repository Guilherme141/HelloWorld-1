
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <title>Navbar</title>
</head>
    
<body>
    <nav>
        <div class="navbar-parte-um">
            <a href="../index/index.php">
                <p class="logo-helloworld">&lt;h/&gt;</p>
            </a>
        </div>
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
         <a href="../index/index.php">INICIO</a>
         <a style="text-decoration: line-through;"href="#">LINK</a>
         <a style="text-decoration: line-through;"href="#">LINK</a>
         <a style="text-decoration: line-through;"href="#">LINK</a>
         <a style="text-decoration: line-through;"href="#">LINK</a>
         <a style="text-decoration: line-through;"href="#">LINK</a>
         <a class="login" href="../front-cadastro/index-cadastro.php">Login<i class="ajuste-icone-login fa fa-sign-in"></i></a>
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

