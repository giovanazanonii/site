<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width",initial-scale="1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

        <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            align-items: center; /* Centraliza verticalmente */
            justify-content: center; /* Centraliza horizontalmente */
            height: 100vh; /* Preenche a altura da tela */
            background-color: #FFFFFF;
        }

        .navbar {
            width: 100%;
            background-color: #FFFFFF; /* Cor da barra de navegação superior (branca) */
        }

        .navbar-black {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #000000; /* Cor da barra de navegação inferior (preta) */
        }

        .nav-links {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .nav-link {
            color: black; /* Cor dos links na barra branca */
            text-decoration: none;
            padding: 14px 16px;
        }

        .nav-link-black {
            background-color: #000000; /* Cor dos links na barra preta */
            text-decoration: none;
            padding: 14px 16px;
            position:relative;
            text-align: center;
            color: white;
        }
        .dropdown {
            display: inline-block;
            position: relative;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #333; /* Cor de fundo do dropdown */
            min-width: 160px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block; /* Exibir o dropdown ao passar o mouse sobre o link */
            background-color: #FFFFFF; /* COR CINZA*/
        }

        .nav-link:hover {
            background-color: #B05888;
            color: white;
        }

        .nav-link-black:hover {
            background-color: #B05888;
            color: white;
        }
        .nav-link-img {
        text-decoration: none;
        }

        .nav-link-img:hover {
        background-color: transparent; /* Manter o fundo transparente ao passar o mouse */
        }
        .background-image {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1; /* Garante que a imagem fique no fundo */
        }

        .background-image img {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Garante que a imagem cubra todo o espaço sem distorção */
        }

        .dropdown-item {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        .dropdown-item:hover {
        background-color: #e3b1c8;
        color:white;
        }
        
        </style>
        </head>
        <div class="navbar">
            <div class="nav-links"> 
                <a href="?pagina=home" class="nav-link-img">
                    <img src="img/imagem.png" style="width:60px">
                </a>
            </div>
            
            <div class="nav-links">
                <a href="?pagina=verPesquisa" class="nav-link">PRODUTOS</a>
                <a href="?pagina=logar" class="nav-link">LOGIN</a>
                <a href="?pagina=home" class="nav-link">HOME</a>
            </div>
        </div>

        <div class="navbar-black">
            <div class="nav-link-black dropdown">
                <a href="?pagina=feminino" class="nav-links" style=color:white;>FEMININO</a>
                <div class="dropdown-content">
                <a class="dropdown-item" href="?pagina=calcadosfem">Calçados</a>
                <a class="dropdown-item" href="?pagina=camisasfem">Camisas</a>
                <a class="dropdown-item" href="?pagina=moletonsfem">Moletons</a>
                </div>
            </div>

            <div class="nav-link-black dropdown">
                <a href="?pagina=masculino" class="nav-links"style=color:white;>MASCULINO</a>
                <div class="dropdown-content">
                <a class="dropdown-item" href="?pagina=calcadosmasc">Calçados</a>
                <a class="dropdown-item" href="?pagina=camisasmasc">Camisas</a>
                <a class="dropdown-item" href="?pagina=moletonsmasc">Moletons</a>
                </div>
            </div>
        </div>
        <div class="background-image">
            <img src="img/FUNDO.jpg">
        </div>

        <?php
            if(!isset($_GET['pagina'])){
                include("views/home.php");
            }else{
                $pagina=$_GET['pagina'];
                switch($pagina){
                    case"logar":
                        include("views/logar.php");
                        break;
                    case "home":
                        include("views/home.php");
                        break;
                    case "criarconta":
                        include("views/cadastra.php");
                        break;
                    case "feminino":
                        include("views/feminino.php");
                        break;
                    case "masculino":
                        include("views/masculino.php");
                        break;
                    case "calcadosmasc":
                        include("views/calcadosmasc.php");
                        break;
                    case "calcadosfem":
                        include("views/calcadosfem.php");
                        break;
                    case "camisasmasc":
                        include("views/camisasmasc.php");
                        break;
                    case "camisasfem":
                        include("views/camisasfem.php");
                        break;
                    case "moletonsmasc":
                        include("views/moletonsmasc.php");
                        break;
                    case "moletonsfem":
                        include("views/moletonsfem.php");
                        break;
                    case "recebecadastro":
                        include("views/recebecadastro.php");
                        break;
                    case "recebelogin":
                        include("views/recebelogin.php");
                        break;
                    case "verPesquisa":
                        include("views/ver_pesquisa.php");
                        break;
                }
            }
        ?>

        </body>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        </html>