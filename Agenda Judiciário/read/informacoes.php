<?php 
include_once './conexao/conexao.php';
$id = $_GET['id'];

$querySelect = $conexao->query("SELECT * FROM agenda WHERE id_cidade = {$id}");
while($registros = $querySelect->fetch_assoc()):

$id = $registros['id'];
$uf = $registros['uf'];
$comarca = $registros['comarca'];
$orgao = $registros['orgao'];
$norgao = $registros['norgao'];

echo "<tr>";
echo "

<td>$uf</td>
<td>$comarca</td>
<td>$orgao</td>
<td>$norgao</td>
<td><a href='./verinfo.php?id=$id'=><i class='material-icons'>search</td>
";
echo "</tr>";
endwhile;