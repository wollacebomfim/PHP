<?php

require_once '../conexao/conexao.php';
session_start();

$id = $_SESSION['id'];
$sql = "SELECT * FROM realizacoes WHERE id = '$id'";

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));
$texto = mysqli_real_escape_string($conexao, trim($_POST['texto']));


$queryInser = $conexao->query("UPDATE realizacoes SET nome='$nome', ano='$ano', texto='$texto'  WHERE  id = {$id}");
$affected_rows = mysqli_affected_rows($conexao);
if($affected_rows > 0):
    header("Location: /padi/paginas/realizacoes.php");
endif;

mysqli_close($conexao);