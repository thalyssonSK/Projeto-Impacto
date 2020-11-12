<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "project01";

$conMySQL = mysqli_connect($host, $usuario, $senha,$bd);

if (mysqli_connect_errno()){
     echo "Falha na conexao:" . mysqli_connect_errno();
}

mysqli_select_db($conMySQL,$bd);

?>
