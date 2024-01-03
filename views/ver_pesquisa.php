<html>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        margin-top: 0px;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #dddddd;
        background-color: white; /* Cor de fundo branco */
        color: black; /* Cor do texto preto */
    }
    .search-results {
        color: white;
        margin-top: 10px;
    }
    .warning-message {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            margin-top: 0px;
            text-align: center;
            font-weight: bold;
        }

</style>

<body>
        <div class="warning-message">
            Esses dados não podem ser vistos por qualquer pessoa.
        </div>
        
<?php
include_once("config.php");
$conexao = conexao();

$var_pesquisa= "CAMISA";

$sql = "SELECT * FROM produto WHERE nome_prod LIKE '%$var_pesquisa%'";

// A variável $pesquisa faz a execução da do nosso comando SQL
$pesquisa= mysqli_query($conexao,$sql);
// O mysqli_num_rows verifica se encontro algum resultado

if(mysqli_num_rows($pesquisa)>0){
    echo '<p class="search-results">Resultados relacionados a \'' . $var_pesquisa . '\'</p>';

    echo "<table border=1>";
 //mysqli_fetch_assoc converte para vetor e mostras os campos encontrados
    while($resu=mysqli_fetch_assoc($pesquisa)){
        echo "<tr>";
        echo "<td>".$resu['id_prod']."</td>";
        echo "<td>".$resu['nome_prod']."</td>";
        echo "<td>".$resu['data_prod']."</td>";
        }
        }else{
        echo "NENHUM DADO ENCONTRADO";
        }
?> 
<body>
</html>