<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        h1 {
            color: white;
            font-family: Arial, sans-serif;
            font-size: 24px;
            text-align: center;
            margin-top: 20px;
        }
        .links-container {
            text-align: center;
            margin-top: 20px;
        }

        .links-item {
            display: block; /*link ocupe toda a largura disponível */
            color: white;
        }
        </style>
    </head>

    <body>
        <h1>Cadastro Concluído</h1>
    
        <div class="links-container">
    <a class="links-item" href="?pagina=criarconta">Novo Cadastro</a>
    <a class="links-item" href="?pagina=home">Voltar a Home</a>
        </div>
    </body>


    <?php
        $nomeUser = $_POST['nomeusuario'];
        $loginUser = $_POST['login'];
        $senha = $_POST['senha'];
        include_once("config.php");
        $conn = conexao();

        $sql = "INSERT INTO tb_usuario(nome_user,login_user,senha_user) VALUES('$nomeUser','$loginUser',$senha)";
        $insere = mysqli_query($conn,$sql);
    ?>
</html>