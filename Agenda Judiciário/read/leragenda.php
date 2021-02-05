<?php 
include_once './conexao/conexao.php';

$querySelect = $conexao->query("SELECT * FROM estados WHERE id ORDER BY sigla ASC");
while($registros = $querySelect->fetch_assoc()):

$id = $registros['id'];
$sigla = $registros['sigla'];
$estados = $registros['estados'];



echo "<tr>";
echo "
<td>$id</td>
<td>$sigla</td>
<td>$estados</td>
<td><a href='#?id=$id'=><i class='material-icons'>delete</td>
";
echo "</tr>";
endwhile;