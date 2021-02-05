<?php
session_start();
include_once '../conexao/conexao.php';
$id_usuario = $_SESSION['id_usuario'];
$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$nomedaoutraparte = mysqli_real_escape_string($conexao, trim($_POST['nomedaoutraparte']));
$ramoatividadeproponente = mysqli_real_escape_string($conexao, trim($_POST['ramoatividadeproponente']));
$ramoatividadeoutraparte = mysqli_real_escape_string($conexao, trim($_POST['ramoatividadeoutraparte']));
$datacontrato = mysqli_real_escape_string($conexao, trim($_POST['datacontrato']));
$valorprestacao = mysqli_real_escape_string($conexao, trim($_POST['valorprestacao']));
$dataaditivo = mysqli_real_escape_string($conexao, trim($_POST['dataaditivo']));
$objeto = mysqli_real_escape_string($conexao, trim($_POST['objeto']));
$datavencimento = mysqli_real_escape_string($conexao, trim($_POST['datavencimento']));
$datacumprimento = mysqli_real_escape_string($conexao, trim($_POST['datacumprimento']));
$natureza = mysqli_real_escape_string($conexao, trim($_POST['natureza']));
$contratoprestacao = mysqli_real_escape_string($conexao, trim($_POST['contratoprestacao']));
$obrigacao = mysqli_real_escape_string($conexao, trim($_POST['obrigacao']));
$obrigacao1 = mysqli_real_escape_string($conexao, trim($_POST['obrigacao1']));
$obrigacao2 = mysqli_real_escape_string($conexao, trim($_POST['obrigacao2']));
$renegociar = mysqli_real_escape_string($conexao, trim($_POST['renegociar']));
$quedarecebimento = mysqli_real_escape_string($conexao, trim($_POST['quedarecebimento']));
$quedafaturamento = mysqli_real_escape_string($conexao, trim($_POST['quedafaturamento']));
$custosdespesas = mysqli_real_escape_string($conexao, trim($_POST['custosdespesas']));
$recursos = mysqli_real_escape_string($conexao, trim($_POST['recursos']));
$partes = mysqli_real_escape_string($conexao, trim($_POST['partes']));
$comprovacaoimpossibilidade = mysqli_real_escape_string($conexao, trim($_POST['comprovacaoimpossibilidade']));
$valorproponente = mysqli_real_escape_string($conexao, trim($_POST['valorproponente']));
$prestacao = mysqli_real_escape_string($conexao, trim($_POST['prestacao']));


$queryInser = $conexao->query("INSERT INTO contratos VALUES(default, '$id_usuario', '$nome', '$nomedaoutraparte', '$ramoatividadeproponente', '$ramoatividadeoutraparte', '$datacontrato', '$valorprestacao', '$dataaditivo', '$objeto', '$datavencimento', '$datacumprimento', '$natureza', '$contratoprestacao', '$obrigacao', '$obrigacao1', '$obrigacao2', '$renegociar', '$quedarecebimento', '$quedafaturamento', '$custosdespesas', '$recursos', '$partes', '$comprovacaoimpossibilidade', '$valorproponente', '$prestacao')");
			header('Location: ../consulta.php');


