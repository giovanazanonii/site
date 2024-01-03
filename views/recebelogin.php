<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .message {
            color: #FFFFFFF;
            margin-top: 10px;
        }

        .success {
            color: #FFFFFF;
        }

        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>


<?php
            $loginUsuario = $_POST['loginEntrar'];
            $loginSenha = $_POST['senhaEntrar'];
            include_once("config.php");
            $conn = conexao();

        $senhabanco = "SELECT senha_user,nome_user FROM `tb_usuario` WHERE login_user='$loginUsuario'";
        $consulta = mysqli_query($conn,$senhabanco);
        
        if ($consulta) {
            $resultado = mysqli_fetch_assoc($consulta);

        if ($resultado && $loginSenha == $resultado['senha_user']) {
            echo '<p class="success">Seja Bem Vindo(a) ' . $resultado['nome_user'] . '</p>';

        } else {
            echo '<p class="error">DADOS INVÁLIDOS</p>';
        }
        } else {
        echo "Erro na consulta ao banco de dados: " . mysqli_error($conn);
        }
mysqli_close($conn);
?>
</body>
</html>