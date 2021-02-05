<?php

require_once '../conexao/conexao.php';
session_start();

$id = $_SESSION['id'];
$sql = "SELECT * FROM projetos WHERE id = '$id'";

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));
$projeto = mysqli_real_escape_string($conexao, trim($_POST['projeto']));


$queryInser = $conexao->query("UPDATE projetos SET nome='$nome', ano='$ano', projeto='$projeto'  WHERE  id = {$id}");
$affected_rows = mysqli_affected_rows($conexao);
if($affected_rows > 0):
    header("Location: /padi/paginas/projetos.php");
endif;
mysqli_close($conexao);