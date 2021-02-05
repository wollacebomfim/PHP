  <?php
  include_once './conexao/conexao.php';
  $id = $_GET['id'];
  $sql = $conexao->query("SELECT * FROM validacao WHERE id = '$id'");
  while($dados = $sql->fetch_assoc()):
  
  $id_estado = $dados['id_estado'];
  $id_cidade = $dados['id_cidade'];
  $uf = $dados['uf'];
  $comarca = $dados['comarca'];
  $orgao = $dados['orgao'];
  $norgao = $dados['norgao'];
  $assessor = $dados['assessor'];
  $contatoassessor = $dados['contatoassessor'];
  $emailassessor = $dados['emailassessor'];
  $chefe = $dados['chefe'];
  $contatochefe = $dados['contatochefe'];
  $emailchefe = $dados['emailchefe'];
  endwhile;
  ?>