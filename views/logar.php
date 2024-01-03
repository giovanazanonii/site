<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFFF;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #FFFFFF;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-top: 50px;
        }

        h1 {
            text-align: center;
        }

        .form-floating {
            margin-bottom: 15px;
        }

        .btn-primary {
            background-color: #B05888;
            color: #FFFFFF;
            border: none;
        }

        .btn-primary:hover {
            background-color: #922B6C;
        }
        
    </style>
</head>
<body>
    <form action="?pagina=recebelogin" method="POST">
        <h1 class="h3 mb-3 fw-normal">ENTRAR</h1>
        <div class=form-floating>
            <label for="floatingInput">Digite login:</label>
            <input type="text" class="form-control" name="loginEntrar" id="username" placeholder="Digite usuário" required>
        </div>
    
        <div class="form-floatin">
            <label for="floatinPassword">Senha:</label>
            <input type="password" class="form-control" name="senhaEntrar" id="inputPassword" placeholder="Password" required>
        </div>
            <div style="margin-top: 10px;"></div>
            <button class="btn btn-primary mx-auto w-100 py-2" type="submit" href="?pagina=recebelogin">Entrar</button>

            <p class="mt-3">Não tem uma conta? <a href="?pagina=criarconta">Criar uma conta</a></p>
</body>
    </form>
