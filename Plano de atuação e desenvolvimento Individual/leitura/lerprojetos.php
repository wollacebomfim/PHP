<?php 


include_once '../conexao/conexao.php';

$id = $_SESSION['id_usuario'];
$querySelect = $conexao->query("SELECT * FROM projetos WHERE id_usuario = '$id'");
while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $ano = $registros['ano'];


echo "<tr>";
echo "<td>$nome</td><td>$ano</td><td><a href='../ver/verprojetos.php?id=$id'><i class='material-icons'>search</<td><td><a href='../editar/editarprojetos.php?id=$id'><i class='material-icons'>edit</<td><td><a href='../processar/deletarprojetos.php?id=$id'><i class='material-icons'>delete</<td>";
echo "</tr>";
endwhile;
?>