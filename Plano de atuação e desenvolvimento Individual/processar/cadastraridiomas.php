<?php
session_start();
include("../conexao/conexao.php");

$id_usuario = $_SESSION['id_usuario'];
$idioma = mysqli_real_escape_string($conexao, trim($_POST['idioma']));
$nivel = mysqli_real_escape_string($conexao, trim($_POST['nivel']));

$sql = "select count(*) as total from idiomas where idiomas = '$idioma'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: /padi/paginas/idiomas.php');
	exit;
}

$sql = "INSERT INTO idiomas VALUES (default, '$id_usuario', '$idioma', '$nivel')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: /padi/paginas/idiomas.php');
exit;
?>