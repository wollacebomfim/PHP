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
<h5 class="light center">Menu Administrativo</h5>
    <a class="waves-effect red btn" href="cursos.php" width="300px"><i class="material-icons left">school</i>Meus Cursos</a></br><br>
    <a class="waves-effect grey btn" href="idiomas.php"><i class="material-icons left">language</i>Meus Idiomas</a></br><br>
    <a class="waves-effect blue btn" href="historicoprofissional.php"><i class="material-icons left">assignment_ind</i>Meu Histórico Profissional</a></br><br>
    <a class="waves-effect green btn" href="realizacoes.php"><i class="material-icons left">assignment</i>Realizações Pessoais/Profissionais</a></br><br>
</fieldset>
<br><br><br><br><br><br><br><br><br>
</div>
</center>
</body>
<?php include_once "../incluir/rodape.php"; ?>
</html>

