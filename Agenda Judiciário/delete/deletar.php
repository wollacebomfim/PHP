<?php
include_once ('../conexao/conexao.php');

$id = $_GET['id'];
$querySelect = $conexao->query("DELETE validacao FROM validacao WHERE id = {$id}");
if(mysqli_affected_rows($conexao) > 0) {
    header('Location: ../dashboard.php');
}
?>
