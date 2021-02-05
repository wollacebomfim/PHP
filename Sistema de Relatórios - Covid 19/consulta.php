<?php
  session_start();
  require_once './conexao/conexao.php';
  include_once "./incluir/seguranca.php";

?>
    <html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    </head>
<?php include_once "./incluir/topo.php"; ?>
<body>
    <div class="row container">
    <div class="col s12">
      <center>  <h5 class="light">Meus Relatórios Covid-19</h5><hr></center>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome do Proponente</th>
                    <th>Nome da Outra Parte CNPJ</th>
                    
                    <th>Imprimir</th>
                    <th>Deletar</th>
</tr>
</thead>
<tbody><?php include_once 'read.php'; ?></tbody>
</table>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<?php include_once "./incluir/rodape.php"; ?>
</html>


