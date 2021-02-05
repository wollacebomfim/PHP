<?php
session_start();
include_once '../conexao/conexao.php';


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



/*
$sql = "select count(*) as total from comarca where nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: index.php');
	exit;
}
*/
$sqlInsert = $conexao->query("INSERT INTO validacao ( id_estado, id_cidade, uf, comarca, orgao, norgao, assessor, contatoassessor, emailassessor, chefe, contatochefe, emailchefe) VALUES
 ( '$id_estado', '$id_cidade', '$uf', '$comarca', '$orgao', '$norgao','$assessor', '$contatoassessor', '$emailassessor', '$chefe', '$contatochefe', '$emailchefe')");


//if($conexao-)query)
//$sqlDelete = "DELETE agenda FROM agenda WHERE id = {$id}";

//$verifica = mysqli_query($conexao, $sqlInsert, $sqlDelete);
//$queryDelete = $conexao->query("DELETE agenda FROM agenda  WHERE id = '$id'");
/*
if($conexao->query($sql, $queryDelete) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}
*/

$conexao->close();

header('Location: ../concluido.php');
exit;
?>