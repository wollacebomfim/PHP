<?php
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query("SELECT * FROM realizacoes WHERE id='$id'");
  while($registros = $querySelect->fetch_assoc()):
  $id = $registros['id'];
  $nome = $registros['nome'];
  $ano = $registros['ano'];
  $texto = $registros['texto'];
  endwhile;
  ?>