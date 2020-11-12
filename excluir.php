<?php
  include "conexao.php";

  $sql = "DELETE FROM contatos WHERE id_contato = $_REQUEST[contato];";


  if (mysqli_query($conMySQL, $sql) === TRUE) {
    echo "<script>alert('Usuário Excluído com sucesso');</script>";
    echo "<META http-equiv='refresh' content='0;URL=index.php?page=visualizar&contato='> ";
  } else {
    echo "DELETE ERRO" . error;
    echo "<script>alert('Erro ao Excluir Usuário');</script>";
    echo "<META http-equiv='refresh' content='0;URL=index.php?page=visualizar&contato='> ";

  }
  ?>