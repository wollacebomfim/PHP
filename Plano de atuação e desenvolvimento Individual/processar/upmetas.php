<?php

require_once '../conexao/conexao.php';
session_start();

$id = $_SESSION['id'];
$sql = "SELECT * FROM metas WHERE id = '$id'";


$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$tipo = mysqli_real_escape_string($conexao, trim($_POST['tipo']));
$ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));
$meta = mysqli_real_escape_string($conexao, trim($_POST['meta']));


$queryInser = $conexao->query("UPDATE metas  SET nome='$nome', tipo='$tipo', ano='$ano', meta='$meta'  WHERE id = {$id}");
$affected_rows = mysqli_affected_rows($conexao);
if($affected_rows > 0):
    header("Location: /padi/paginas/metas.php");
endif;
mysqli_close($conexao);