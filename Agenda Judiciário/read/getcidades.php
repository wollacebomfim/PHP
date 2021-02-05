<?php 
include_once './conexao/conexao.php';
$id = $_GET['id'];
$sql = "SELECT * FROM cidades WHERE id_estados = {$id}";
$resultado = mysqli_query($conexao, $sql);
while($cidades = mysqli_fetch_array($resultado)){
  $varCidades[] = $cidades;
  echo  "<option value=\"".$cidades["id"]."\">".$cidades["cidade"]."</option>";
}

?>