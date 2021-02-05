<?php
session_start();
require_once '../conexao/conexao.php';


$id = $_SESSION['id'];
$sql = "SELECT * FROM planodeacao WHERE id = '$id'";

$tipo = mysqli_real_escape_string($conexao, trim($_POST['tipo']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$meta = mysqli_real_escape_string($conexao, trim($_POST['meta']));
$previsto = mysqli_real_escape_string($conexao, trim($_POST['previsto']));
$realizado = mysqli_real_escape_string($conexao, trim($_POST['realizado']));
$acao = mysqli_real_escape_string($conexao, trim($_POST['acao']));


$queryInser = $conexao->query("UPDATE planodeacao SET tipo='$tipo', nome='$nome', meta='$meta', previsto='$previsto', realizado='$realizado', acao='$acao' where id = {$id}");
$affected_rows = mysqli_affected_rows($conexao);
if($affected_rows > 0):
    header("Location: /padi/ver/listarplano.php");
endif;

mysqli_close($conexao);