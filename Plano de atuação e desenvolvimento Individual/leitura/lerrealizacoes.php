<?php 

include_once '../conexao/conexao.php';

$id = $_SESSION['id_usuario'];
$querySelect = $conexao->query("select * from realizacoes where id_usuario = '$id'");
  while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $ano = $registros['ano'];
    $texto = $registros['texto'];


echo "<tr>";
echo "<td>$nome</td><td>$ano</td><td><a href='../ver/verrealizacoes.php?id=$id'><i class='material-icons'>search</<td><td><a href='../editar/editarrealizacoes.php?id=$id'><i class='material-icons'>edit</<td><td><a href='../processar/deletarrealizacoes.php?id=$id'><i class='material-icons'>delete</<td>";
echo "</tr>";
endwhile;
?>