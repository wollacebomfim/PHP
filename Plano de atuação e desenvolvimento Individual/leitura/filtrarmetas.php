<?php
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query("SELECT * FROM metas WHERE id='$id'");

  while($registros = $querySelect->fetch_assoc()):

  $id = $registros['id'];
  $nome = $registros['nome'];
  $tipo = $registros['tipo'];
  $ano = $registros['ano'];
  $meta = $registros['meta'];
  endwhile;
?>
