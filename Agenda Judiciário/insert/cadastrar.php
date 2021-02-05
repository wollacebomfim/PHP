<?php
session_start();
include_once '../conexao/conexao.php';

$id = mysqli_real_escape_string($conexao, trim($_POST['id']));
$id_estado = mysqli_real_escape_string($conexao, trim($_POST['id_estado']));
$id_cidade = mysqli_real_escape_string($conexao, trim($_POST['id_cidade']));
$uf = mysqli_real_escape_string($conexao, trim($_POST['uf']));
$comarca = mysqli_real_escape_string($conexao, trim($_POST['comarca']));
$orgao = mysqli_real_escape_string($conexao, trim($_POST['orgao']));
$norgao = mysqli_real_escape_string($conexao, trim($_POST['norgao']));
$assessor = mysqli_real_escape_string($conexao, trim($_POST['assessor']));
$contatoassessor = mysqli_real_escape_string($conexao, trim($_POST['contatoassessor']));
$emailassessor = mysqli_real_escape_string($conexao, trim($_POST['emailassessor']));
$chefe = mysqli_real_escape_string($conexao, trim($_POST['chefe']));
$contatochefe = mysqli_real_escape_string($conexao, trim($_POST['contatochefe']));
$emailchefe = mysqli_real_escape_string($conexao, trim($_POST['emailchefe']));


$sqlInsert = $conexao->query("INSERT INTO agenda (id_estado, id_cidade, uf, comarca, orgao, norgao, assessor, contatoassessor, emailassessor, chefe, contatochefe, emailchefe) VALUES ('$id_estado', '$id_cidade', '$uf', '$comarca', '$orgao', '$norgao', '$assessor', '$contatoassessor', '$emailassessor', '$chefe', '$contatochefe', '$emailchefe')");

if(mysqli_affected_rows($conexao) > 0) {
	$querySelect = $conexao->query("DELETE validacao FROM validacao WHERE id = '$id'");
}

$conexao->close();

header('Location: ../dashboard.php');
exit;
?>