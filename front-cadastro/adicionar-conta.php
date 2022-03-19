<!--Uma modificação para deixar o código mais polido-->
<?php 
    include '../includes/head.php';
?>

    <link rel="stylesheet" href="../css/adicionar-conta.css">
    <title>My Book</title>
</head>

<?php include '../includes/navbar.php' ?>
    
    <div class="background-adicionar-conta">
        <div class="adicionar-conta">
            <h1>Adicionar conta</h1>
            <form action="../session/session-usuario.php" method="POST">
                <p class="ajuste-texto-nome">Email</p>
                <input type="text" name="txtEmail">
                <p class="ajuste-texto-senha">Senha</p>
                <input id="senha" type="password" name="txtSenha">
                    <div class="mostra-senha">
                        <input type="checkbox" onClick="mostraSenha()">
                        <p>Mostrar senha</p>
                    </div>
                <input class="botao" type="submit" value="Entrar">
            </form>
        </div>
        <p>Não tem uma conta?  <a href="form-cadastrar.php">Criar nova conta</a></p>
    </div>
    <script>
        function mostraSenha(){
            var senha = document.getElementById("senha");
            if(senha.type === "password"){
                senha.type = "text";
            }else{
                senha.type = "password";
            }
        }
    </script>
</body>
</html>

