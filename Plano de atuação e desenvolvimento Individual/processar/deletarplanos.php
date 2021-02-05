<?php
include_once ('../conexao/conexao.php');

$id = mysqli_real_escape_string($conexao, trim($_GET['id']));
$querySelect = $conexao->query("DELETE planodeacao FROM planodeacao WHERE id = {$id}");
if(mysqli_affected_rows($conexao) > 0) {
    header('Location: /padi/paginas/listarplano.php');
}
?>
