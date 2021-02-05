<?php
session_start();
include("../conexao/conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$sociogestor = mysqli_real_escape_string($conexao, trim($_POST['sociogestor']));
$data_nacimento = mysqli_real_escape_string($conexao, trim($_POST['data_nacimento']));

$sql = "SELECT * AS TOTAL FROM usuarios WHERE usuarios = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: /padi/cadastro.php');
	exit;
}

$sql = "INSERT INTO usuarios VALUES (default, '$nome', '$usuario', '$senha', '$sociogestor', NOW(), '$data_nacimento', NOW())";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: /padi/cadastro.php');
exit;
?>