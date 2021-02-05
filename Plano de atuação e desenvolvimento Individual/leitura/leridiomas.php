<?php 


include_once '../conexao/conexao.php';

$id = $_SESSION['id_usuario'];
/*
$querySelect = $conexao->query("SELECT * FROM historico WHERE id_usuario = '$id'");
*/
$querySelect = $conexao->query("select * from idiomas where id_usuario = '$id'");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $idioma = $registros['idioma'];
    $nivel = $registros['nivel'];

echo "<tr>";
echo "<td>$idioma</td><td>$nivel</td><td><a href='../processar/deletarididiomas.php?id=$id'><i class='material-icons'>delete</<td>";
echo "</tr>";
endwhile;
?>