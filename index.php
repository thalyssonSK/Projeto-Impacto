<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset = "utf8">
    <title>Contatos</title>
    <style>
        body{
            background: #eaeaea;
            padding: 20px;
            font-family: Arial;
            font-size: 18px;
        }
        label{
            display: block;
            font-weight: bold;
            font-family: Arial;
            font-size: 15px;
        }
        .espaco{
            height: 2;
            display: block;
        }
        input{
            font-size: 16px;
            padding: 5px;
        }
        .titulo{
            font-size: 20px;
            font-family: Arial;
            font-weight: bold;
        }   

    </style>
</head>

<?php
include "conexao.php";
?>

<body>

    <form class= titulo >
    <div>
    <a href="index.php?page=">Início</a>
    <a href="index.php?page=novo_contato">Cadastrar</a>
    <a href="index.php?page=visualizar&contato=">Listar</a>
    <p class= espaco></p>
    <input type="text" name="contato" placeholder="Buscar por Nome"><br>
    <button type="submit">Buscar</button>    
    </div>
    </form>

    <?php 
     $page='';
    if (!(( empty($_REQUEST['page'])))){  
        $pagina = $_REQUEST['page'];
        include ($pagina.'.php');
    }
    ?>
    <?php
    mysqli_close($conMySQL);

    ?>





</body>

</html>