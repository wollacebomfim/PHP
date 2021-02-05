<?php
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query("SELECT * FROM historico WHERE id='$id'");

  while($registros = $querySelect->fetch_assoc()):

  $id = $registros['id'];
  $empresa = $registros['empresa'];
  $departamento = $registros['departamento'];
  $funcao = $registros['funcao'];
  $departamento = $registros['departamento'];
  $data_inicio = date("d/m/Y", strtotime($registros['data_inicio']));
  $data_fim = date("d/m/Y", strtotime($registros['data_fim']));
  $atividades = $registros['atividades'];
  endwhile;

?>