<?php
function conexao(){
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodados = "exercicio_avalia";
    $conectar = mysqli_connect($servidor,$usuario,$senha,$bancodados);
    return $conectar;
}
?>