<?php
session_start();
include("../conexao/conexao.php");

$id_usuario = $_SESSION['id_usuario'];
$tipo = mysqli_real_escape_string($conexao, trim($_POST['tipo']));
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$meta = mysqli_real_escape_string($conexao, trim($_POST['meta']));
$status = mysqli_real_escape_string($conexao, trim($_POST['status']));
$previsto = mysqli_real_escape_string($conexao, trim($_POST['previsto']));
$realizado = mysqli_real_escape_string($conexao, trim($_POST['realizado']));
$acao = mysqli_real_escape_string($conexao, trim($_POST['acao']));

$sql = "SELECT * FROM planodeacao WHERE planodeacao = '$meta'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: /padi/paginas/planodeacao.php');
	exit;
}

$sql = "INSERT INTO planodeacao VALUES (default, '$id_usuario', '$tipo', '$nome', '$meta', '$status', '$previsto', '$realizado', '$acao')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: /padi/ver/listarplano.php');
exit;
?>