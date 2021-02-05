<?php
session_start();
include("../conexao/conexao.php");

$id_usuario = $_SESSION['id_usuario'];
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$tipo = mysqli_real_escape_string($conexao, trim($_POST['tipo']));
$ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));
$meta = mysqli_real_escape_string($conexao, trim($_POST['meta']));

$sql = "select count(*) as total from metas where metas = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: /padi/paginas/metas.php');
	exit;
}

$sql = "INSERT INTO metas VALUES (default, '$id_usuario', '$nome', '$tipo', '$ano', '$meta')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: /padi/paginas/metas.php');
exit;
?>