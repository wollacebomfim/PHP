<?php
include_once ('../conexao/conexao.php');

$id = mysqli_real_escape_string($conexao, trim($_GET['id']));
$querySelect = $conexao->query("DELETE historico FROM historico WHERE id = {$id}");
if(mysqli_affected_rows($conexao) > 0) {
    header('Location: /padi/paginas/historicoprofissional.php');
}
?>
