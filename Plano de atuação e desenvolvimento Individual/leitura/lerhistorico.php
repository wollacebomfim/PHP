<?php 

include_once '../conexao/conexao.php';

$id = $_SESSION['id_usuario'];

$querySelect = $conexao->query("SELECT * FROM historico WHERE id_usuario = '$id'");

while($registros = $querySelect->fetch_assoc()):

    $id = $registros['id'];
    $empresa = $registros['empresa'];
    $departamento = $registros['departamento'];
    $data_inicio = $registros['data_inicio'];
    $data_fim = $registros['data_fim'];

echo "<tr>";
echo "<td>$empresa</td><td>$departamento</td><td>$data_inicio</td><td>$data_fim</td><td><a href='../ver/verhistorico.php?id=$id'><i class='material-icons'>search</td><td><a href='../editar/editarhistorico.php?id=$id'><i class='material-icons'>edit</<td><td><a href='../processar/deletarhistorico.php?id=$id'><i class='material-icons'>delete</<td>";
echo "</tr>";
endwhile;
?>