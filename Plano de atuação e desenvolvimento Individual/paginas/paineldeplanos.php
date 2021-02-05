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
    <?php include_once "../incluir/menu.php"; ?>
    <body>
<br>
<div class="row container">
<br>
<fieldset class="formulario">
<h5 class="light center">Plano de Ação</h5>
<br>
<center>
    <a class="waves-effect brown btn" href="/padi/paginas/planodeacao.php" width="300px"><i class="material-icons left">map</i>Cadastrar meu plano</a>
    <a class="waves-effect grey btn" href="/padi/ver/listarplano.php"><i class="material-icons left">gavel</i>Ver meus planos</a>
</center>
<br>
</fieldset>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<?php include_once "../incluir/rodape.php"; ?>
</html>

