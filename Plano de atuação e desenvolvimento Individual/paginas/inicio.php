<?php
session_start();
include_once '../conexao/conexao.php';
include_once "../incluir/seguranca.php";
include_once "../leitura/lerusuario.php";
?>
<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
<?php include_once "../incluir/menu.php"; ?>
<div class="row container">
<br>
<center><img src="../img/qca.jpg" width="400px" height="200px"></center>
<fieldset class="atualizar.php">
<h5 class="light center">Informações de cadastro </h5>
<p>
  Nome do Integrante: &nbsp;&nbsp;<?php echo $dados['nome']; ?>
  </br>
  Nome do Gestor: &nbsp;&nbsp;<?php echo $dados['sociogestor']; ?>
  </br>
  Data da Nascimento: &nbsp;&nbsp;<?php echo (date("d/m/Y",strtotime($dados['data_nascimento']))); ?>
  </br>
  <b>Data de Elaboração do PADI: &nbsp;&nbsp;<?php echo (date("d/m/Y",strtotime($dados['data_cadastro']))); ?></b>
  </br>
 <font color="red"><b>Data de Ultima Atualização do PADI:&nbsp;&nbsp; <?php echo (date("d/m/Y H:i:s",strtotime($dados['data_atualizacao']))); ?></b><font>
</p>
</div>
</fieldset>
<br><br><br><br>

</div>
</body>
<br>
<script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });
  $('.dropdown-trigger').dropdown();
  </script>
  <script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
  $(document).ready(function(){
    $('select').formSelect();
  });
  </script>
<?php include_once "../incluir/rodape.php"; ?>

</html>

