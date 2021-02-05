<?php
session_start();
include("../conexao/conexao.php");

$id_usuario = $_SESSION['id_usuario'];
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$tipo = mysqli_real_escape_string($conexao, trim($_POST['tipo']));
$faculdade = mysqli_real_escape_string($conexao, trim($_POST['faculdade']));
$conclusao = mysqli_real_escape_string($conexao, trim($_POST['conclusao']));

$sql = "select count(*) as total from cursos where cursos = '$conclusao'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: /padi/paginas/cursos.php');
	exit;
}

$sql = "INSERT INTO cursos VALUES (default, '$id_usuario', '$nome', '$tipo', '$faculdade', '$conclusao')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: /padi/paginas/cursos.php');
exit;
?>