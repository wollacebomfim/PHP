<?php
session_start();
include("../conexao/conexao.php");

$id_usuario = $_SESSION['id_usuario'];
$empresa = mysqli_real_escape_string($conexao, trim($_POST['empresa']));
$departamento = mysqli_real_escape_string($conexao, trim($_POST['departamento']));
$funcao = mysqli_real_escape_string($conexao, trim($_POST['funcao']));
$data_inicio = mysqli_real_escape_string($conexao, trim($_POST['data_inicio']));
$data_fim = mysqli_real_escape_string($conexao, trim($_POST['data_fim']));
$atividades = mysqli_real_escape_string($conexao, trim($_POST['atividades']));

$sql = "select count(*) as total from historico where historico = '$empresa'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: /padi/paginas/historicoprofissional.php');
	exit;
}

$sql = "INSERT INTO historico VALUES (default, '$id_usuario', '$empresa', '$departamento', '$funcao', '$data_inicio', '$data_fim', '$atividades')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: /padi/paginas/historicoprofissional.php');
exit;
?>