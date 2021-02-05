<?php 


include_once '../conexao/conexao.php';

/*
$id = $_SESSION['id'];
$sql = "SELECT * FROM metas WHERE id_usuario = '$id'";
$resultado = mysqli_query($conexao, $sql);
while($dados = mysqli_fetch_array($resultado)){
    $id = $dados['id'];
    $nome = $dados['nome'];
}
*/

    $id = $_SESSION['id_usuario'];
    $querySelect = $conexao->query("SELECT * FROM planodeacao WHERE id_usuario = {$id} and status = 'Em Andamento' ORDER BY previsto DESC");
    while($registros = $querySelect->fetch_assoc()):
        $id = $registros['id'];
        $tipo = $registros['tipo'];
        $nome = $registros['nome'];
        $status = $registros['status'];
        $previsto = date("d/m/Y", strtotime($registros['previsto']));
        $realizado = date("d/m/Y", strtotime($registros['realizado']));





echo "<tr>";
echo "<td>$tipo</td><td>$nome</td><td>$previsto</td><td>$realizado</th><td>$status</td><td><a href='../editar/editarplano.php?id=$id'><i class='material-icons'>search</td>";
echo "</tr>";
endwhile;
    
