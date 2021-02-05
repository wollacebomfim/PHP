<?php 


include_once '../conexao/conexao.php';

$id = $_SESSION['id_usuario'];
  $querySelect = $conexao->query("SELECT * FROM cursos WHERE id_usuario = '$id'");
  while($registros = $querySelect->fetch_assoc()):
    $id = $registros['id'];
    $nome = $registros['nome'];
    $tipo = $registros['tipo'];
    $faculdade = $registros['faculdade'];
    $conclusao = date("d/m/Y", strtotime($registros['conclusao']));

echo "<tr>";
echo "<td>$nome</td><td>$tipo</td><td>$faculdade</td><td>$conclusao</td><td><a href='../processar/deletarcursos.php?id=$id'><i class='material-icons'>delete</<td>";
echo "</tr>";
endwhile;
?>