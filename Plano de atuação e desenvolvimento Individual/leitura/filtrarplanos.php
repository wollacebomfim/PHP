
  <?php
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query("SELECT * FROM planodeacao WHERE id='$id'");

  while($registros = $querySelect->fetch_assoc()):

  $id = $registros['id'];
  $nome = $registros['nome'];
  $tipo = $registros['tipo'];
  $meta = $registros['meta'];
  $previsto = date("d/m/Y", strtotime($registros['previsto']));
  $realizado = date("d/m/Y", strtotime($registros['realizado']));
  $acao = $registros['acao'];
  endwhile;

  $data_formatada1 = DateTime::createFromFormat('d/m/Y', $previsto);
  $data_formatada2 = DateTime::createFromFormat('d/m/Y', $realizado);
  ?>
