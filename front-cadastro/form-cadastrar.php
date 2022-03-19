<!--Uma modificação para deixar o código mais polido-->
<?php include '../includes/head.php'?>

    <link rel="stylesheet" href="../css/form-cadastrar.css">
    <title>Cadastrar Conta</title>
</head>

<?php include '../includes/navbar.php'?>

    <div class="background-do-cadastro-professor">
        <div class="blur">

            <form class="form-do-cadastro-professor" action="../cadastro/cadastrar-usuario.php" method="post">
                
                    <h1 class="titulo-cadastro">Cadastrar Conta</h1>
        
                    <p class="nome-p">Nome Completo</p>
                    <input placeholder="Nome Completo" class="nome" type="text" name="txtNome">
                    
                    <p class="email-p">Email</p>
                    <input placeholder="seuemail@gmail.com" class="email" type="text" name="txtEmail">
                    
                    <p class="senha-p">Senha</p>
                    <input placeholder="Senha" id="senha" class="senha" type="password" name="txtSenha">
                    
                    <p class="confirmar-p">Confirmar Senha</p>
                    <input placeholder="confirmar senha" id="confirmar-senha"class="confirmar-senha" type="password" name="ctxtSenha">
                    <div class="mostra-senha">
                        <input type="checkbox" id="mostra-senha" onClick="mostraSenha()">
                        <p>Mostrar Senha</p>
                    </div>
                    <input class="botao" type="submit" value="Cadastrar">
                
            </form>

        </div>
    </div>
    <script>
        function mostraSenha(){
            var senha = document.getElementById("senha");
            var confirmar_senha = document.getElementById("confirmar-senha");

            if (senha.type === "password"){
                senha.type = "text";
            }else{
                senha.type = "password";
            }

            if (confirmar_senha.type === "password"){
                confirmar_senha.type = "text";
            }else{
                confirmar_senha.type = "password";
            }
        }
    </script>

</body>
</html>