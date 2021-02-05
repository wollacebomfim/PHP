<?php 
include_once './conexao/conexao.php';

$sql = "SELECT * FROM cidades WHERE id_estados = '".$_POST['id']."' ORDER BY cidade ASC";
$resultado = mysqli_query($conexao, $sql);

while($cidades = mysqli_fetch_array($resultado)):
  echo  "<option value=\"".$cidades["id"]."\">".$cidades["cidade"]."</option>";

endwhile;
?>