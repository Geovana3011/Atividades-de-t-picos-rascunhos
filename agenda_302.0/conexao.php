<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "agenda_302.0";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao){
    die ("Erro de conexão. ".mysqli_connect_errno());
}

