<?php
session_start();
require_once '../conexao/conexao.php';


$id = $_SESSION['id'];
$sql = "SELECT * FROM historico WHERE id = '$id'";




$empresa = mysqli_real_escape_string($conexao, trim($_POST['empresa']));
$departamento = mysqli_real_escape_string($conexao, trim($_POST['departamento']));
$funcao = mysqli_real_escape_string($conexao, trim($_POST['funcao']));
$data_inicio = mysqli_real_escape_string($conexao, trim($_POST['data_inicio']));
$data_fim = mysqli_real_escape_string($conexao, trim($_POST['data_fim']));
$atividades = mysqli_real_escape_string($conexao, trim($_POST['atividades']));

$queryInser = $conexao->query("UPDATE historico SET empresa='$empresa', departamento='$departamento', funcao='$funcao', data_inicio='$data_inicio', data_fim='$data_fim', atividades='$atividades' where id = {$id}");
$affected_rows = mysqli_affected_rows($conexao);
if($affected_rows > 0):
    header("Location: /padi/paginas/historicoprofissional.php");
endif;

mysqli_close($conexao);