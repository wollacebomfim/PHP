<?php
session_start();
include("../conexao/conexao.php");

$id_usuario = $_SESSION['id_usuario'];
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$ano = mysqli_real_escape_string($conexao, trim($_POST['ano']));
$projeto = mysqli_real_escape_string($conexao, trim($_POST['projeto']));

$sql = "select count(*) as total from usuario where usuario = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: /padi/paginas/projetos.php');
	exit;
}

$sql = "INSERT INTO projetos VALUES (default, '$id_usuario', '$nome', '$ano', '$projeto')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: /padi/paginas/projetos.php');
exit;
?>