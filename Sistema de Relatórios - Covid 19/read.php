<?php 
include_once './conexao/conexao.php';
$id = $_SESSION['id_usuario'];
$querySelect = $conexao->query("SELECT * FROM contratos WHERE id_usuario = '$id'");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $nomedaoutraparte = $registros['nomedaoutraparte'];
    
echo "<tr>";
echo "<td>$nome</td><td>$nomedaoutraparte</td><td><a href=imprimir.php?id=$id' target='_blank'><i class='material-icons'>print</td><td><a href='delete.php?id=$id'><i class='material-icons'>delete</<td>";
echo "</tr>";
endwhile;
?>