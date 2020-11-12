<?php
include "conexao.php";

$inicial= $_REQUEST['contato'];

$query = "SELECT * FROM contatos where nome like '%$inicial%'";
$result = mysqli_query($conMySQL,$query);
$r = mysqli_fetch_assoc($result);
$total = mysqli_num_rows($result);


?>

<h1 align= 'center'>Contatos (<?php echo"$total"?>)</h1>

<?php

    echo "<table cellpadding=10 align='center'>
    <tr>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Idade</td>
        <td>Data de Nascimento</td>
        <td>Email</td>
        <td>Opcao</td>
    </tr>";  
    while ($r = mysqli_fetch_array($result)){
            echo "<tr><td>".$r['nome']."</td>".
            "<td>".$r['telefone']."</td>".
            "<td>".$r['idade']."</td>".
            "<td>".$r['dataNascimento']."</td>".
            "<td>".$r['email']."</td>".
            "<td></td>";
        }
    echo "</table>";
        
?>
</table>