<?php 

include_once './conexao/conexao.php';
$sql = "SELECT * FROM norgao WHERE id";
$resultado = mysqli_query($conexao, $sql);
while($orgaos = mysqli_fetch_array($resultado)){
  echo   "<option value=\"".$orgaos["id"]."\">".$orgaos["id"]."</option>";

}
?>