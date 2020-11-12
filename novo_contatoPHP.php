<?php
include "conexao.php";

$sql = "INSERT INTO contatos(
            nome, 
            telefone, 
            idade, 
            dataNascimento, 
            email
            )
            VALUES (
            '".$_POST["nome"]."',
            '".$_POST['telefone']."',
            '".$_POST['idade']."',
            '".$_POST["dataNascimento"]."',
            '".$_POST["email"]."'    
            )";
        
$query = mysqli_query($conMySQL, $sql);

if ($query == true) {
  echo "<script>alert('Cadastrado com Sucesso');</script>";
  echo "<META http-equiv='refresh' content='0;URL=index.php?page=visualizar&contato='> ";
}
else {
  echo "Não foi possivel inserir o registro<br><br>".mysqli_error($conMySQL);

}

?>