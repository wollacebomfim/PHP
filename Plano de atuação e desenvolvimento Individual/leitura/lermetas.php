<?php 
include_once '../conexao/conexao.php';
$id = $_SESSION['id_usuario'];
$querySelect = $conexao->query("SELECT * FROM metas WHERE id_usuario = '$id'");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $tipo = $registros['tipo'];
    $ano = $registros['ano'];

echo "<tr>";
echo "<td>$nome</td><td>$tipo</td><td>$ano</td><td><a href='../ver/vermetas.php?id=$id'><i class='material-icons'>search</<td><td><a href='../editar/editarmetas.php?id=$id'><i class='material-icons'>edit</<td><td><a href='../processar/deletarmetas.php?id=$id'><i class='material-icons'>delete</<td>";
echo "</tr>";
endwhile;
?>