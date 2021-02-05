<?php 
include_once './conexao/conexao.php';

$sql = "SELECT * FROM estados WHERE id ORDER BY sigla ASC";
$resultado = mysqli_query($conexao, $sql);

while($estados = mysqli_fetch_array($resultado))
{
  echo   "<option value=\"".$estados["id"]."\">".$estados["nome"]."</option>";
}
?>