<?php
include_once './conexao/conexao.php';

  $id = $_GET['id'];
  $sql = "SELECT * FROM agenda WHERE id = '$id'";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_array($resultado);
  mysqli_close($conexao);
  ?>