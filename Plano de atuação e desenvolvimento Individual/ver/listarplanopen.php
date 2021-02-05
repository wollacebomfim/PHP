<?php
session_start();
include_once '../conexao/conexao.php';
include_once "../incluir/seguranca.php";
?>
<html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <?php  include_once '../incluir/menu.php'; ?>
    <body>
<center> <h5 class="light">Listagem de todos os planos de ação <b>Pendentes</b></h5><hr></center>


<div class="row container">
<?php include_once "../incluir/filtrodeselecao.php"; ?>
<table class="striped">
    <thead>
        <tr>
            <th>Tipo</th>
            <th>Ação</th>
            <th>Previsão</th>
            <th>Realizado</th>
            <th>Status</th>
            <th>Ver Plano</th>
</tr>
</thead>
<tbody><?php  include_once '../leitura/lerplanospen.php'; ?></tbody>
</table>
 </div>


 <script type="text/javascript" src="../js/jquery-3.5.0.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });
  $('.dropdown-trigger').dropdown();
  </script>
  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
</body>
<?php include_once "../incluir/rodape.php"; ?>
</html>


