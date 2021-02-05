<?php
  include_once './conexao/conexao.php';
  $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
  $_SESSION['id'] = $id;
  $querySelect = $conexao->query("select * from contratos where id='$id'");
  while($registros = $querySelect->fetch_assoc()):
  $id = $registros['id'];
  $nome= $registros['nome'];
  $nomedaoutraparte = $registros['nomedaoutraparte'];
  $ramoatividadeproponente = $registros['ramoatividadeproponente'];
  $ramoatividadeoutrparte = $registros['ramoatividadeoutraparte'];
  $datacontrato = $registros['datacontrato'];
  $valorprestacao = $registros['valorprestacao'];
  $dataaditivo = $registros['dataaditivo'];
  $objeto = $registros['objeto'];
  $datavencimento = $registros['datavencimento'];
  $datacumprimento = $registros['datacumprimento'];
  $natureza = $registros['natureza'];
  $contratoprestacao = $registros['contratoprestacao'];
  $obrigacao = $registros['obrigacao'];
  $obrigacao1 = $registros['obrigacao1']; 
  $obrigacao2 = $registros['obrigacao2'];
  $renegociar = $registros['renegociar'];
  $quedarecebimento = $registros['quedarecebimento'];
  $quedafaturamento = $registros['quedafaturamento'];
  $custosdespesas = $registros['custosdespesas'];
  $recursos = $registros['recursos'];
  $partes = $registros['partes'];
  $comprovacaoimpossibilidade = $registros['comprovacaoimpossibilidade'];
  $valorproponente = $registros['valorproponente'];
  $prestacao = $registros['prestacao'];
  endwhile;
?>